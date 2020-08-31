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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../plugin/css/menu.css" rel="stylesheet">
        <link href="../plugin/css/footer.css" rel="stylesheet">
        
    </head>
    <body style="background:#F5F5F5">
         
       <?php
    include "nav.php";
    ?>
        <div class="nav-scroller bg-dark box-shadow" style="padding-top:75px;">
      <nav class="nav nav-underline">
        <a class="nav-link" href="msenha.php" style="color:#ccc;">Editar Senha</a>
        <a class="nav-link" href="mconta.php" style="color:#ccc;">Apagar Conta</a>
      </nav>
    </div>
        
           <main role="main" class="container" style="margin-bottom:95px;">
      
               <div class="main-panel" >
            <div class="content" >
                    <div class="row" >
                       
                        
                        <div class="col-md-8" style="margin: auto; " >
                            <div class="card" >
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Editar Perfil</h4>
                                </div>
                                <div class="card-content" style="padding:10px 30px">
                                    <form method="post" action="eperfil.php">
                                       
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Nome</label>
                                                    <input type="text" class="form-control" value="<?php echo $rowp['nome']; ?>" name="nome" required>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Contacto</label>
                                                     <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">+258</span>
                </div>
                <input type="number" class="form-control" id="contacto" value="<?php echo $rowp['contacto']; ?>" name="contacto" required>
                
              </div>
                                                    <small class="form-text text-muted">

      Formato Mocambicano (8 a 9 digitos).
    </small>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" class="form-control" value="<?php echo $rowp['email']; ?>" name="email" required>
                                                </div>
                                            </div>
                                        </div>
                                       <button type="submit" class="btn btn-primary pull-right"style="margin-right:20px;" >Gravar</button>
                                       
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                </div>
            </div>
           
        </div>
        </main>
       
            
            <?php
        include "../plugin/footer.php";
        ?>
    </body>
    <!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
</html>