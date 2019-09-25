<?php
$ano = date("Y");
session_start();
session_destroy();
?>
<!DOCTYPE HTML>
<html lang="pt">
    <head>
        <title>Ideia | Chega de incomodar seus amigos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../plugin/images/icon.png">

        <!--Bootstrap -->    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../plugin/css/footer.css" rel="stylesheet">
        
    </head>
    <body >
       
                                                        <div class="container" >
                                                                                                                        <div class="row">
                                                                                                                        <div class="container container--xs">
        <div class="woocommerce">



<div id="signup_div_wrapper">
    <a href="index.php"><img class="img-fluid mx-auto d-block mb-5" width="150px" height="65px" src="../plugin/images/logo.svg" alt=""></a>

    <ul class="list-group mb-3">
                                                                                                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
          <form action="cadastrar.php" method="post">
               <div class="row">
                    <div class="col-md-6 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="O seu email (Ex: seuemail@gmail.com)" name="email" required>
                
               
              </div>
              
              <div class="col-md-6 mb-3">
                <label for="contacto">Contacto</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">+258</span>
                </div>
                <input type="number" class="form-control" id="contacto" placeholder="Seu numero de telefone (Ex: 841234567)" name="contacto" required>
                
              </div>
              </div>
            </div>

<div class="row">
             <div class="col-md-6 mb-3">
                <label for="nome">Nome</label>
              <div class="input-group">
                
                <input type="text" class="form-control" id="nome" placeholder="O seu nome (Ex: joao)" name="nome" required>
                
              </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" placeholder="Crie uma senha" name="senha" required>
                
              </div>
            </div>
            
              
            <div class="row">
             
              <div class="col-md-6 mb-3">
                <label for="senhac">Senha <span class="text-muted">(Confirmacao)</span></label>
                <input type="password" class="form-control" id="senhac" placeholder="Confirme a sua senha" name="senha1" required>
                
              </div>
            </div>
            <small class="text-muted">Sessões e conteúdos sujeitos a monitoria. Os responsáveis do Ideia, tem o direito de apagar todo tipo de conteúdo considerado impróprio para a sociedade, bem como as contas que forem mal-usadas.</small>
            <hr class="mb-4">
              <p class="text-gray-soft text-center small mb-2">Ja tem conta? <a href="entrar.php">Entrar</a>.</p>
              <div class="row align-items-center justify-content-center">
        <div class="form-group ">
          <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-primary btn-block btn-lg" value="Criar Conta">
    </div>
</div>
          </form>
    </li>
            </ul>
        </div>

    

</div>
</div>
    </div>
                </div>
       
            <!-- #main .site-main -->
       <?php include "../plugin/footer.php"; ?>
  </body>
    <!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
</html>