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
       <link rel="stylesheet" href="../plugin/css/sliderPublicidade.css">
       
           
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/4.7.0/css/bootstrap.min.css">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
        
        <!--Google AdSense-->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4977378894211740",
    enable_page_level_ads: true
  });
</script>
</head>
<body style="background:#f4f4f4; ">
   <?php 
  include "nav.php";
 
  
 
        ?>
       
  <div class="cont" style="height:100%;  background-color: #f4f4f4;">
<div class="col-md-12"   style=" margin:20px auto; padding:5px;height:310px; position:relative; ">

  <img class="mySlides" src="../plugin/images/b1.jpg" >
  <img class="mySlides" src="../plugin/images/b2.jpg" >
  <img class="ty" src="../plugin/images/b3.jpg" >
</div>
<div class="grid-container">
<?php
                    $sql = "SELECT* FROM evento WHERE data>=CURDATE() and responsavel=$_COOKIE[produtor] ORDER BY data ASC;";
                    $result = mysqli_query($connect, $sql) or die("Error:" . mysqli_error($connect));
                    while ($row = mysqli_fetch_array($result)) {
                        $cod = $row["codigo"];
                        ?>
         
  
  <div class="item"  style="height:335px;position:relative;">

        
            
          <div class="top-right"><?php  
                        if($row['bilhete']==""){
                            echo "Entradas gratis";
                        } else{
                            echo "Bilhetes a venda";
                        }
              ?></div>
       
          <style type="text/css">
            .top-right {
             
              position: absolute;
             
              top: 12px;
               right: 0px;
                background:rgb(100,120,120,.6);
                font-size:12pt;
                padding:2px;
  
               
                }
          </style>
         
          <?php 
                        if($row['imagem']==""){
                          echo "<img src='../plugin/images/imagem.png' alt='' class='r'>";  
                        }else
                       { 
                        echo "<img src='../plugin/images/" . $row['imagem'] . "' alt='' class='r'>"; 
                    }
      ?>
      <div class="informacao" >
       
           <p   class="dataHora"><span class=" fa fa-calendar"  ></span><?php
                        setlocale(LC_TIME, 'pt', 'pt.tuf-8', 'pt.utf-8', 'portuguese');
                        echo strftime("%a", strtotime($row['data'])).", ".date('d',strtotime($row['data']))." de ".strftime("%b", strtotime($row['data']))." pelas ".substr($row['hora'], 0,5); 
                                 ?></p>
           
             <p class="titulo"><?php echo substr($row['nome'], 0, 20); ?></p>
            
               <p  class="localizcao"><span class="fa fa-map-marker" ></span><?php echo substr($row['local'], 0, 30); ?></p>
         </div>
           <a href="aevento.php?codigo=<?php echo $cod; ?>&imagem=<?php echo $row['imagem']; ?>" onclick="return confirm('Tem certeza que quer apagar o evento?');" class="btn btn-danger" style="float: left;margin-left:15px;"><i class=" fa fa-remove "></i>Apagar </a>
           <a href="minfo.php?codigo=<?php echo $cod; ?>" class="btn btn-info" style="float:right;margin-right:15px;"><i class=" fa fa-edit"></i> Editar</a>
           
  </div>
    <?php } ?>
   
  
  
   
   
 
</div>
</div>

<?php 
        include ("../plugin/footer.php");
        ?><?php
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
       <link rel="stylesheet" href="../plugin/css/sliderPublicidade.css">
       
           
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/4.7.0/css/bootstrap.min.css">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
</head>
<body style="background:#f4f4f4; ">
   <?php 
  include "nav.php";
 
  
 
        ?>
       
  <div class="cont" style="width:100%;  background-color: #f4f4f4;">
<div class="col-md-12"   style=" margin:20px auto; padding:5px;height:310px; position:relative; ">

  <img class="mySlides" src="../plugin/images/b1.jpg" >
  <img class="mySlides" src="../plugin/images/b2.jpg" >
  <img class="ty" src="../plugin/images/b3.jpg" >
</div>


 <style>
    
.grid-container {
 margin:auto;
 margin-top:100px;
 
  justify-content: center;
 
  
 
 
  
 
   

  

 
}
 
            






        
 </style>
 












<div class="grid-container">
<?php
                    $sql = "SELECT* FROM evento WHERE data>=CURDATE() and responsavel=$_COOKIE[produtor] ORDER BY data ASC;";
                    $result = mysqli_query($connect, $sql) or die("Error:" . mysqli_error($connect));
                    while ($row = mysqli_fetch_array($result)) {
                        $cod = $row["codigo"];
                        ?>
         
  
  <div class="item"  style="height:335px;position:relative;">

        
            
          <div class="top-right"><?php  
                        if($row['bilhete']==""){
                            echo "Entradas gratis";
                        } else{
                            echo "Bilhetes a venda";
                        }
              ?></div>
       
          <style type="text/css">
            .top-right {
             
              position: absolute;
             
              top: 12px;
               right: 0px;
                background:rgb(100,120,120,.6);
                font-size:12pt;
                padding:2px;
  
               
                }
          </style>
         
          <?php 
                        if($row['imagem']==""){
                          echo "<img src='../plugin/images/imagem.png' alt='' class='r'>";  
                        }else
                       { 
                        echo "<img src='../plugin/images/" . $row['imagem'] . "' alt='' class='r'>"; 
                    }
      ?>
      <div class="informacao" >
       
           <p   class="dataHora"><span class=" fa fa-calendar"  ></span><?php
                        setlocale(LC_TIME, 'pt', 'pt.tuf-8', 'pt.utf-8', 'portuguese');
                        echo strftime("%a", strtotime($row['data'])).", ".date('d',strtotime($row['data']))." de ".strftime("%b", strtotime($row['data']))." pelas ".substr($row['hora'], 0,5); 
                                 ?></p>
           
             <p class="titulo"><?php echo substr($row['nome'], 0, 20); ?></p>
            
               <p  class="localizcao"><span class="fa fa-map-marker" ></span><?php echo substr($row['nome'], 0, 30); ?></p>
         </div>
           <a href="aevento.php?codigo=<?php echo $cod; ?>&imagem=<?php echo $row['imagem']; ?>" onclick="return confirm('Tem certeza que quer apagar o evento?');" class="btn btn-danger" style="float: left;margin-left:15px;"><i class=" fa fa-remove "></i>Apagar </a>
           <a href="minfo.php?codigo=<?php echo $cod; ?>" class="btn btn-info" style="float:right;margin-right:15px;"><i class=" fa fa-edit"></i> Editar</a>
           
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
       