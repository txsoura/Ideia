<div class="row" style="max-width:1200px;margin:auto;background:#f5f5f5; "> 
            <style>
                .row{
                    padding: 0px 0px;
                }
            </style>
   
    <div class="col-md-12" style="padding-top:100px; width:100%;margin:0 auto;">
      <!--inicio do auroel-->
    
    <div id="demo" class="carousel slide" data-ride="carousel">
    

  <div class="carousel-inner">
     
      <div class="carousel-item active" id="total">
          
          <img src="../plugin/images/ba1.jpg" alt="Los Angeles"  style="width:100%;border-top-right-radius:3px;
    border-bottom-right-radius:3px;">
    </div>
      <div class="carousel-item" id="total">
          <img src="../plugin/images/ba2.jpg" alt="Los Angeles"  style="width:100%;border-top-right-radius:3px;
    border-bottom-right-radius:3px;">
      </div>
      <div class="carousel-item" id="total">
          <img src="../plugin/images/ba3.jpg" alt="Los Angeles"  style="width:100%;border-top-right-radius:3px;
    border-bottom-right-radius:3px;">
      </div>
    <div class="carousel-item">
        <img src="../plugin/images/ba4.jpg" alt="Chicago"  >
       <div class="informa" >
      <h2> King of House</h2>
      <p ><span class=" fa fa-calendar" ></span>sex,25 de Março 20:00</p >
        <p><span  class=" fa fa-map-marker"></span>Mavis Bar,25 de setembro</p>
        <button class="btn btn-default">Ver Detalhes</button>


      </div>
      
    </div>
  </div>
  <ul class="carousel-indicators ">

    
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
     <li data-target="#demo" data-slide-to="3"></li>
      
       

  </ul>
  


    </div>
    </div>
</div>

 
 <style>
    
    
 </style>
 
<div class="Container" style="width:100%;background:#e0e0e0;padding-bottom:20px;padding-top:0px;margin-top:0px;">
 
    
    
     

  
  <!-- Carousel Container -->
  
<div class="my-owl-nav" style="background:#e0e0e0;border:solid #e0e0e0;" >
  <span style="float:left;background:transparent;color:#50525f;  font-size:15px; cursor:context-menu;"><h4>Eventos mais Próximos</h4></span>
  <span class="my-next-button ty">
    <i class="fa fa-arrow-right" aria-hidden="true" style="font-size:25px;color:#50525f"></i> 
  </span>
  <span class="my-prev-button ty">
    <i class="fa fa-arrow-left" aria-hidden="true" style="font-size:25px;color:#50525f"></i> 
  </span>
</div>

  <div class="owl-carousel owl-theme" style="padding-left:5px">
<?php
                    $sql = "SELECT* FROM evento where data>=CURDATE() ORDER BY data ASC LIMIT 0, 10;";
                    $result = mysqli_query($connect, $sql) or die("Error:" . mysqli_error($connect));
                    while ($row = mysqli_fetch_array($result)) {
                        $cod = $row["codigo"];
                        ?>

    <div class="item" style=" width:260px;position: relative;">

    	 <a href="info.php?codigo=<?php echo $row['codigo']; ?>">
       <?php
                    if($row['imagem']==""){
                        echo "<img src='../plugin/images/imagem.png' alt='' class='r'>";
                    }    else{
                        echo "<img src='../plugin/images/" . $row['imagem'] . "' alt='' class='r'>"; 
                    }
             ?>
             </a>
    	 <div class="top-right" style="font-family: sans-serif;"><?php  
                        if($row['bilhete']==""){
                            echo "Entradas gratis";
                        } else{
                            echo "Bilhetes a venda";
                        }
              ?></div>
                             

       
                               <div class="informacao">
                               
                             <span class=" fa fa-calendar"  ><spam class="data" style="font-family: sans-serif;margin-left:5px;"><?php
                        setlocale(LC_TIME, 'pt', 'pt.tuf-8', 'pt.utf-8', 'portuguese');
                        echo strftime("%a", strtotime($row['data'])).", ".date('d',strtotime($row['data']))." de ".strftime("%b", strtotime($row['data']))." pelas ".substr($row['hora'], 0,5); 
                                 ?></spam></span >
           
                                 <span><spam class="titulo"><?php echo substr($row['nome'], 0, 20); ?></spam></span>
             
                                 <span class=" fa fa-map-marker" ><spam class="localizacao"
                                 style="font-family: sans-serif;margin-left:5px; "><?php echo substr($row['local'], 0, 30); ?></spam></span>
                                     </div>
    </div>
   
     <?php
                    }
                        ?>
    
   
   
        
    
</div>
</div>


 
            


<!--fim do rolamento-->

     <div class="col-md-12" style="padding:30px;max-width:1200px;margin:auto;">
 
    <style>
    .col-md-12{
            padding:20px;
            max-width:1200px;margin:auto; }
         </style>

         <h3 style="text-align:center">Categorias</h3 >
    <style>
       
.col-sm-4 ,.col-sm-6,.col-sm-8{
  overflow: hidden;
 height:180px;
  margin:20px auto;
  padding:0px;
   border-radius:8px;
 
}
 .img-responsive{
    width:100%;
    height:180px;
     border-radius:8px;
}
.col-sm-4{
     max-width:340px;
}
.col-sm-6{
    max-width:540px;
  
}
.col-sm-8{
    max-width:740px;
}

.col-sm-4 img ,.col-sm-6 img,.col-md-8 img{
   -webkit-transition: .3s ease-in-out;
         transition: .3s ease-in-out;
}

.img-responsive:hover{
  -moz-transform: scale(1.3);
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
}
.image-responsive:hover + #a{
            font-size:25pt;
              transition: .3s ease-in-out;
        }
        
        @media(max-width:1200px){
            .row{
                margin:auto;
               
            }
            
          .col-sm-4 ,.col-sm-6,.col-sm-8{
             margin:10px auto;
          }
          .col-sm-4{
     max-width:340px;
}
.col-sm-6{
     max-width:520px;
}  .col-sm-8{
     max-width:720px;
}
        }
        
        
@media(max-width:1160px){
       .col-sm-4{
     max-width:300px;
}
.col-sm-6{
     max-width:490px;
}
.col-sm-8{
     max-width:670px;
}
 
}
@media(max-width:1060px){
       .col-sm-4{
     max-width:300px;
}
.col-sm-4{
     max-width:460px;
}

.col-sm-8{
     max-width:630px;
}
}
        
@media(max-width:1000px){
       .col-sm-4{
     max-width:280px;
}
.col-sm-6{
     max-width:440px;
}
.col-sm-8{
     max-width:610px;
}
}
@media(max-width:930px){
       .col-sm-4{
     max-width:260px;
}
.col-sm-6{
     max-width:400px;
}
.col-sm-8{
     max-width:560px;
}
    
}
@media(max-width:860px){
       .col-sm-4{
     max-width:250px;
}
.col-sm-6{
     max-width:390px;
}
.col-sm-8{
     max-width:530px;
}
}
@media(max-width:825px){
    .col-md-12{
        padding:10px;
        
    }
       .col-sm-4{
     max-width:230px;
}
.col-sm-6{
     max-width:360px;
}
.col-sm-8{
     max-width:490px;
}
}
@media(max-width:750px){
    .col-sm-4{
        max-width:210px;
    }
    .col-sm-6{
     max-width:330px;
}
.col-sm-8{
     max-width:450px;
}
}
@media(max-width:680px){
    .col-sm-4{
        max-width:180px;
    }
    .col-sm-6{
     max-width:290px;
}
.col-sm-8{
     max-width:390px;
}
}
@media(max-width:585px){
    .col-sm-4,.col-sm-6,.col-sm-8{
        max-width:490px;
    }
}

         
            
        
       
      </style>
 
  <div class="row">
      <div class="col-sm-4 ">
          <a href="categoria.php?ct=Desporto"><img src="../plugin/images/ba1.jpg" class="img-responsive "  alt="Image"></a>
      <p id="a" class="centered " >Desporto</p>
    </div>
    
    <div class="col-sm-4">
      <a href="categoria.php?ct=Musica"><img src="../plugin/images/ba2.jpg" class="img-responsive"  alt="Image"></a>
      <p class="centered">Musica</p>
        
    </div>
      <div class="col-sm-4">
      <a href="categoria.php?ct=Gastronomia"><img src="../plugin/images/ba3.jpg" class="img-responsive"  alt="Image"></a>
     <p class="centered">Gastronomia</p>
        
    </div>
    </div>
    <div class="row">
    <div class="col-sm-8"> 
      <a href="categoria.php?ct=Conferencia"><img src="../plugin/images/ba4.jpg" class="img-responsive"  alt="Image"></a>
     <p class="centered">Conferencia</p>  
    </div>
      <div class="col-sm-4"> 
      <a href="categoria.php?ct=Educacao"><img src="../plugin/images/ba5.png" class="img-responsive"  alt="Image"></a>
   <p class="centered">Educacao</p>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-6"> 
      <a href="categoria.php?ct=Artes"><img src="../plugin/images/ba6.png" class="img-responsive"  alt="Image"></a>
      <p class="centered">Artes</p>
           </div>
          <div class="col-sm-6"> 
      <a href="categoria.php?ct=Outra"><img src="../plugin/images/ba7.jpg" class="img-responsive"  alt="Image"></a>
   <p class="centered">Outra</p>
    </div>
      
   
       
  </div>
  
</div>