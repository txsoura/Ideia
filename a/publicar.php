<?php
$ano = date("Y");
include "sessao.php";
include "../plugin/coneccao.php";
?>
<!DOCTYPE HTML>
<html lang="pt">
    <head>
        <title>Ideia | Chega de incomodar seus amigos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="../plugin/images/icon.png">
        <!--Bootstrap -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
    <script src="../plugin/js/locationpicker.jquery.min.js"></script> 
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/4.7.0/css/bootstrap.min.css">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
        
        <link rel="stylesheet" href="../plugin/css/menu.css">
        <link rel="stylesheet" href="../plugin/css/footer.css">
        
    </head>
    <body style="background:#F5F5F5">
         
       <?php
    include "nav.php";
    ?>
        <style>
            #ya{
                display:none;
            } 
        </style>
           <main role="main" class="container" style="padding-top:80px;">
      <div class="row">
        
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Dados do Evento</h4>
            <ul class="list-group mb-8">
                                                                                                                            <li class="list-group-item  lh-condensed">
            <form action="adicionar.php" method="post">
            

            <div class="mb-3">
              <label for="nome">Nome do evento</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome do evento (Ex: festa 3)" name="nome" required>
                
              </div>
            </div>
<div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Local do evento</label>
                                                     <div class="input-group">
               
                <input type="text" class="form-control" id="contacto" placeholder="Digite o local (Ex: bar maputo)" name="local" required>
                
              </div>
                                                </div>
                                            </div>
                                            
              
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Endereco</label>
                                                    <input type="text" class="form-control" id="us3-address" placeholder="Digite o endereco (Ex: avenida 24 de julho)" name="endereco" required>
                                                     <small class="form-text text-muted">

      Em Mocambique apenas.
    </small>
                                                </div>
                                            </div>
                                        </div>
              <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Imagem</label>
                                                     <div class="input-group">
               <label class="btn btn-secondary btn-file">
    Escolher <input type="file" style="display: none;" name="imagem">
</label>
               
              </div>
                                                    <small class="form-text text-muted">

      Resolucao minima recomendada (850 x 310 px).<br/>
      Formato recomendado: JPG ou PNG.
    </small>
                                                </div>
                                                </div>
             
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Data e Hora de inicio</label>
                                                    <div class="input-group">
  
  <input type="date" class="form-control" name="data" required>
  <input type="time" class="form-control" name="hora" required>
</div>
                                                     <small class="form-text text-muted">

      A data nao pode ser igual ou inferior ao dia de hoje.
    </small>
                                                </div>
                                            </div>
                                        </div>
            
            <div class="mb-3">
             <div class="form-group label-floating">
                                                    <label class="control-label">Bilhete</label><small class="form-text text-muted">

      Se o evento for gratis nao preencha.
    </small>
                                                    <div class="input-group">
  

  <input type="text" class="form-control" placeholder="Tipo de bilhete e preco (Ex: normal - 500)" name="b1">
                                                        <div class="input-group-append">
    <span class="input-group-text">.00 Mt</span>
  </div>

</div>
                                                     
     <div class="input-group">
  

  <input type="text" class="form-control" placeholder="Tipo de bilhete e preco (Ex: VIP - 2000)" name="b2">
                                                        <div class="input-group-append">
    <span class="input-group-text">.00 Mt</span>
  </div>

</div>
                <div class="input-group">
  

  <input type="text" class="form-control" name="b3">
                                                        <div class="input-group-append">
    <span class="input-group-text">.00 Mt</span>
  </div>

</div>
                 <div class="input-group">
  

  <input type="text" class="form-control" name="b4">
                                                        <div class="input-group-append">
    <span class="input-group-text">.00 Mt</span>
  </div>

</div>
                 <div class="input-group">
  

  <input type="text" class="form-control" name="b5">
                                                        <div class="input-group-append">
    <span class="input-group-text">.00 Mt</span>
  </div>

</div>
                 
                </div>
            </div>
              
                                           
                                            
                                            <div class="col-md-8">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Descricao</label>
                                                    <div class="input-group" id="po" >
                                                            <textarea class="form-control" id="po" aria-label="With textarea" name="descricao" required></textarea>
                                                             <style>
                                                            @media(min-width:990px){
                                                                textarea,#po{
                                                                    width:500px;
                                                                }
                                                            }
                                                            </style>
</div>
                                                     
                                                </div>
                                            </div>
                                       
              <script src="//tinymce.cachefly.net/4.1/tinymce.min.js" ></script>
              <script >
        tinymce.init({selector:'textarea'});
</script>
    <input type="hidden" id="mapa" name="mapa">


            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Publicar</button>
          </form>
                </li>
            </ul>
        </div>
          <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Mapa</span>
          </h4>
              <div id="us3" style="width: 100%; height: 300px;"></div>
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <div class="dropdown-divider"></div>
            <span class="text-muted">Publicidade</span>
          </h4>
               <div style="width:100%;height:300px ;border:solid 1px yellow"> Google ads
               </div>
           
        
        <div class="clearfix"></div>
        <script>
            $('#us3').locationpicker({
                location: {
                    latitude: -18.150 ,
                    longitude: 35.000
                },
                radius: 1,
                inputBinding: {
                    locationNameInput: $('#us3-address')
                },
                enableAutocomplete: true,
                onchanged: function (currentLocation, radius, isMarkerDropped) {
                    // Uncomment line below to show alert on each Location Changed event
                    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                    var mapa = document.getElementById("mapa");
  mapa.value = currentLocation.latitude + ";" + currentLocation.longitude;
                }
            });
        </script>
        </div>
      </div>
                </main>
        <div>
        <br/>
        </div>
            
            <?php
        include "../plugin/footer.php";
        ?>
    </body>
    <!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
</html>