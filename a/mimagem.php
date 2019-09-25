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
        
        <?php
        $cod = $_GET["codigo"];
        $sql = "SELECT* FROM evento where codigo='$cod'";
        $result = mysqli_query($connect, $sql) or die("Error:" . mysqli_error($connect));
        $row = mysqli_fetch_array($result);
        ?>
        
        <div class="nav-scroller bg-dark box-shadow" style="padding-top:75px;">
      <nav class="nav nav-underline">
        <a class="nav-link" href="minfo.php?codigo=<?php echo $cod;?>" style="color:#ccc;">Editar Evento</a>
        <a class="nav-link" href="mimagem.php?codigo=<?php echo $cod;?>" style="color:#ccc;">Editar Imagem</a>
      </nav>
    </div>

        
            
        
      

<main role="main" class="container bg-light" style="padding-bottom:45px;position:relative;">
    
    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-9">
               <?php 
                if($row['imagem']==""){
                    echo "<img src='../plugin/images/imagem.png' width='850px' height='310px' alt='' class='img-fluid'>";
                }else{
                echo "<img src='../plugin/images/" . $row['imagem'] . "' width='850px' height='310px' alt='' class='img-fluid'>";
                }
                ?>
            </div>
            <div class="col">
                <div class="card-block px-2">
                    
                    <div class="mb-1 text-muted">
<form method="post" action="eimagem.php?codigo=<?php echo $row['codigo'];?>&imagem=<?php echo $row['imagem'];?>" enctype="multipart/form-data">
<div class="form-group label-floating">
                                                    <label class="control-label">Imagem</label>
                                                     <div class="input-group">
               <label class="btn btn-secondary btn-file">
    Escolher <input type="file" style="display: none;" name="imagem" required>
</label>
               
              </div>
                                                    <small class="form-text text-muted">

      Resolucao minima recomendada (850 x 310 px).<br/>
      Formato recomendado: JPG ou PNG.
    </small>
                                                </div>
<div class="btn-group">
  <button type="submit" class="btn btn-primary" aria-haspopup="true" aria-expanded="false">
    Gravar
  </button>
  
</div>
                        </form>          
                </div>
            </div>
        </div>
        <div class="card-footer w-100 text-muted">
           <i class="fa fa-map-marker"></i> <?php echo $row['nome'].", ".$row['local']; ?>
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