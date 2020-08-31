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
   
<link rel="stylesheet" href="../plugin/css/menu.css">
        <link rel="stylesheet" href="../plugin/css/footer.css">
      <link rel="stylesheet" href="../plugin/css/grelha.css">
       
           
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/4.7.0/css/bootstrap.min.css">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
</head>
<body style="background:#f4f4f4; ">
   <?php 
  include "nav.php";
 
  
 
        ?>
       
  <div class="cont" style="height:100%;  background-color: #f4f4f4;">

<div class="grid-container">
<?php
                    $sql = "SELECT* FROM mensagem;";
                    $result = mysqli_query($connect, $sql) or die("Error:" . mysqli_error($connect));
                    while ($row = mysqli_fetch_array($result)) {
                        $cod = $row["codigo"];
                        ?>
         
  
  <div class="item"  style="height:402px;position:relative;">

        
      <div class="informacao" >
       
           <p style="padding-top:8px;"><span></span><?php echo $row['assunto'];?></p>
           
             
         </div>
          <div class="operacoes" >
           <p  style="padding-top:8px;"><?php echo $row['nome']; ?></p>
           <a href="responder.php?cod=<?php echo $row["codigo"];?>" class="btn btn-info" style="float: left;margin-left:15px;"><i class=" fa fa-edit "></i>Responder </a>
           
         </div>
  </div>
    <?php } ?>
   
  
  
   
   
 
</div>
</div>

<?php 
        include ("../plugin/footer.php");
        ?>

 


</body>

<script  src="../plugin/js/sliderPublicidade.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</html>
       
