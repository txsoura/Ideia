var _extends = Object.assign || function (target) {for (var i = 1; i < arguments.length; i++) {var source = arguments[i];for (var key in source) {if (Object.prototype.hasOwnProperty.call(source, key)) {target[key] = source[key];}}}return target;};console.clear();

var isString = function isString(obj) {return typeof obj === 'string';};
var isFunction = function isFunction(obj) {return typeof obj === 'function';};

function loadImage(image) {

  return new Promise(function (resolve, reject) {

    var isImage = image instanceof Image || image instanceof HTMLImageElement;

    var url = isString(image) ?
    image :
    isImage && 'lazy' in image.dataset ? image.dataset.lazy : null;

    if (!url) {
      throw new Error('An URL has to be provided.' + isImage ? 'The [data-lazy] attribute is not set.' : '');
    }

    image = isImage ? image : new Image();

    image.addEventListener('load', function () {
      resolve(image);
    });

    image.addEventListener('error', function () {
      reject();
    });

    image.src = url;

  });
}

function makeLoadImage(doAfterLoad) {
  return function (image) {return loadImage(image).then(function (image) {return doAfterLoad(image) || image;});};
}

function createIntersectionObserver(loadImage) {var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

  if (!('IntersectionObserver' in window)) {
    throw new Error('The IntersectionObserver is not supported by this browser.');
  }

  options = _extends({
    useQueue: false,
    wait: 200 },
  options);


  var queue = Promise.resolve();
  var timeouts = new Map();

  var observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(function (entry) {var
      intersectionRatio = entry.intersectionRatio,image = entry.target,

      isIntersecting = intersectionRatio >= options.threshold;

      if (isIntersecting) {
        timeouts.set(image, setTimeout(function () {
          options.useQueue ? queue.then(function () {return loadImage(image);}) : loadImage(image);
          observer.unobserve(image);
          timeouts.delete(image);
        }, options.wait));
      } else if (!isIntersecting && timeouts.has(image)) {
        clearTimeout(timeouts.get(image));
      }

    });
  }, _extends({}, options, { threshold: [0, options.threshold] }));

  return observer;

}

function hasFastConnection() {

  if (!('connection' in navigator)) return false;
  if (!('type' in navigator.connection)) return false;
  if (!('effectiveType' in navigator.connection)) return false;
  if (!('downlink' in navigator.connection)) return false;var _navigator$connection =

  navigator.connection,type = _navigator$connection.type,effectiveType = _navigator$connection.effectiveType,downlink = _navigator$connection.downlink;

  /* Determine which connection suffices */
  if (['wifi', 'ethernet'].indexOf(type) > -1 && effectiveType === '3g') return true;

  return false;

}

function setup(loadImage, images, options) {
  try {

    if (hasFastConnection()) throw new Error('Your connection is sufficient to load all images altogether.');

    var observer = createIntersectionObserver(loadImage, options);
    images.forEach(function (image) {return observer.observe(image);});
  } catch (error) {
    var queue = Promise.resolve();
    images.forEach(function (image) {return options.useQueue ?
      queue.then(function () {return loadImage(image);}) :
      loadImage(image);});

  }
}


/* --- Code in action --- */

function parent(callback) {

  if (!(this instanceof Element)) {
    throw new Error('This function can be applied to Elements only.');
  }

  var el = this;

  var _callback = isString(callback) ?
  function (el) {return el.classList.contains(callback);} :
  callback;

  do {
    el = el.parentNode;
  } while (!_callback(el));

  return el;

}

var _loadImage = makeLoadImage(function (image) {
  parent.call(image, 'col-sm-4 col-sm-6 col-sm-8').classList.add('Image--loaded');
});

var images = Array.from(document.querySelectorAll('.col-sm-4 img, .col-sm-6 img , .col-sm-8 img'));

setup(_loadImage, images, { useQueue: true, threshold: .25 });