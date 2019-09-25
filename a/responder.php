<?php
$ano = date("Y");
include "sessao.php";
include "../plugin/coneccao.php";
?>
<!DOCTYPE html>
<html lang="pt"  >

<head>
  <meta charset="UTF-8">
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
      
                    $cod=$_GET["cod"];
                    $sql = "SELECT* FROM mensagem WHERE codigo='$cod';";
                    $result = mysqli_query($connect, $sql) or die("Error:" . mysqli_error($connect));
                    $row = mysqli_fetch_array($result);
                        ?>
           <main role="main" class="container" style="padding-top:80px;">
    
        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Responder</h4>
            <ul class="list-group mb-8">
                                                                                                                            <li class="list-group-item  lh-condensed">
          <form method="post" action="mensagem.php">
            

            <div class="mb-3">
              <label for="nome">Nome</label>
              <div class="input-group" style="width:100%;">
                <div class="input-group-prepend">
                </div>
                  <input type="text" class="form-control"   style="width:100%" name="nome" value="<?php echo $row['nome']; ?>" disabled required>
                
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" disabled required>
             
            </div>
            <div class="mb-3">
              <label for="assunto">Assunto / Mensagem </label>
                <textarea type="text" class="form-control" placeholder="Digite a menssagem" name="assunto" required></textarea>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
          </form>
                </li>
            </ul>
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