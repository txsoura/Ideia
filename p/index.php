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
<link href="http://jquerymobile.com/">
        <!--Bootstrap -->
        
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css'>
<!--aqui-->
 
<!--fsfs-->
  

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/4.7.0/css/bootstrap.min.css">

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>


     
             <link rel="stylesheet" href="../plugin/css/style.css">
              <link rel="stylesheet" href="../plugin/css/slider.css">
              <link rel="stylesheet" href="../plugin/css/categorias.css">
             <link rel="stylesheet" href="../plugin/css/footer.css">
            <link rel="stylesheet" href="css/menu.css">
 

   
           
    </head>
       

    <body style="background:#f5f5f5;">
        <?php
   
   include "nav.php";
    include "../plugin/inicio.php";
    include "../plugin/footer.php";
   
    ?>
 
    </body>
    <script>
$(document).ready(function() {
   $("#demo").swiperight(function() {
      $(this).carousel('prev');
    });
   $("#demo").swipeleft(function() {
      $(this).carousel('next');
   });
});
</script>
    
    <!-- Bootstrap -->
    
  

   <script  src="../plugin/js/index.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js'></script>


 

  

   
     <script  src="../plugin/js/rolamento2.js"></script>
    
     

  




    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>



    
</html>

    