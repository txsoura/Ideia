<?php
$ano = date("Y");
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="pt"  >

<head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../plugin/images/icon.png">
  <title>Ideia | Chega de incomodar seus amigos</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/4.7.0/css/bootstrap.min.css">

      <link rel="stylesheet" href="../plugin/css/footer.css">
      <link rel="stylesheet" href="../plugin/css/menu.css">

  
</head>
<body style="background:#f4f4f4; ">
   <?php 
        include "nav.php";
       ?>
    
    
           <main role="main" class="container" style="padding-top:80px;">
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Contactos</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Sérgio Frank:</h6>
                  <a href="callto:(+258) 87 680 4015"><small class="text-muted">(+258) 87 680 4015</small></a>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Arnaldo Mussalafo:</h6>
                  <a href="callto:(+258) 84 448 0823"><small class="text-muted">(+258) 84 448 0823</small></a>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Victor Tesoura</h6>
                <a href="callto:(+258) 84 491 6247"><small class="text-muted">(+258) 84 491 6247</small></a>
              </div>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <h6 class="my-0">Email:</h6>
                <a href="mailto:info.ideiamz@gmail.com"><small class="text-muted">info.ideiamz@gmail.com</small></a>
            </li>
          </ul>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Mensagem</h4>
            <ul class="list-group mb-8">
                                                                                                                            <li class="list-group-item  lh-condensed">
          <form class="needs-validation" method="post" action="mensagem.php">
            

            <div class="mb-3">
              <label for="nome">Nome</label>
              <div class="input-group" style="width:100%;">
                <div class="input-group-prepend">
                </div>
                  <input type="text" class="form-control" id="nome" placeholder="O seu nome (Ex: joao)" style="width:100%" name="nome" required>
                
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="O seu email (Ex: seuemail@gmail.com)" name="email">
             
            </div>

            <div class="mb-3">
              <label for="contacto">Contacto</label>
              <input type="number" class="form-control" id="contacto" placeholder="O seu numero de telefone (Ex: 841234567)" name="contacto" required>
              
            </div>

            <div class="mb-3">
              <label for="assunto">Assunto / Mensagem </label>
                <textarea type="text" class="form-control" id="assunto" placeholder="Digite a menssagem" name="assunto" required></textarea>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
          </form>
                </li>
            </ul>
        </div>
      </div>
                </main>
        
            
            
    
    <?php
        include "../plugin/footer.php";
        ?>
    
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>