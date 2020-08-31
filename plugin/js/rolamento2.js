  $('.owl-carousel').owlCarousel({
    loop:true,
    
    nav:false,
    dots: false,
     margin:10,
   autoWidth:true,
    slideSpeed : 2000,
    autoplay:true,
    lazyLoad: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:5

        }
    }
});

var selector = $('.owl-carousel');

$('.my-next-button').click(function() {
  selector.trigger('next.owl.carousel');
});

$('.my-prev-button').click(function() {
  selector.trigger('prev.owl.carousel');
});