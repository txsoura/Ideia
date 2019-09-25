
 
   
<style>
html,body{
 
  background:#f4f4f4;
  font:sans-serif;
 
}


.grid-container {
 margin:auto;
 margin-top:100px;
  display:grid;
  grid-template-columns: auto auto auto ;
  grid-gap: 25px 25px;
  background-color: #f4f4f4;
  justify-content: center;
  
 
  
 
 
  
 
   

  

 
}
 .item {
  margin:0 auto;
  
  width:320px;
 height:282px;
  background:white;
border:solid  1px #ccc;
border-radius:4px;
background-color:rgb(255,255,255);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}



.item img{
 width:100%;
 height:200PX;
 box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
  
.informacao p{
          text-align:left;
          padding-left:10px;
          margin-top:4px;
         
          }
           span.fa{
           
            font-size:15px; 
            margin-right:5px;
          }
.informacao p{
          text-align:left;
          text-transform: uppercase;
          font-size:13px;
          font-family:sans-serif;
          color:rgb(120,120,120);
          line-height: .4;

        }
       p.titulo{
             font-weight:bolder;
              color:darkslategray;
               font-size:18px;
               padding-top:-2px;


          }
          p.dataHora{
            padding-top:2px;
          }
         
        @media (max-width:1050px){
          .grid-container {
              
               grid-template-columns: auto auto auto ;
                grid-gap: 10px 10px;
            }
           
          }
         @media (max-width:1000px){
           .grid-container {
              
               grid-template-columns: auto auto ;
               
               
            }
         
          .item{
            width:300px;
          }
         
        }
         @media (max-width:640px){
           .grid-container {
              
               grid-template-columns: auto ;
               grid-gap: 30px ;
               
                
            }
            .item{
                margin-bottom:10px;
            }
              
         
         
        }
           
         
         


        
   
        
</style>
   


<div class="grid-container"   >
  <?php
                    $sql = "SELECT* FROM evento where data>=CURDATE() ORDER BY data ASC;";
                    $result = mysqli_query($connect, $sql) or die("Error:" . mysqli_error($connect));
    $e=1;
                    while ($row = mysqli_fetch_array($result)) {
                        $cod = $row["codigo"];
                        ?>
  <div class="item"  style="position: relative;">

        
            
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
             border-radius:1px;
              top: 12px;
               right: 5px;
               background-color:rgba(192,192,192,0.6);
                font-size:12pt;
                padding:2px;
  
               
                }
          </style>
         <a href="info.php?codigo=<?php echo $row['codigo']; ?>">
       <?php
                    if($row['imagem']==""){
                        echo "<img data-lazy='../plugin/images/imagem.png' alt='' class='r'>";
                    }    else{
                        echo "<img data-lazy='../plugin/images/" . $row['imagem'] . "' alt='' class='r'>"; 
                    }
             ?>
             </a>
      <div class="informacao" >
       
         
         
           <p   class="dataHora"><span class=" fa fa-calendar"  ></span><?php
                        setlocale(LC_TIME, 'pt', 'pt.tuf-8', 'pt.utf-8', 'portuguese');
                        echo strftime("%a", strtotime($row['data'])).", ".date('d',strtotime($row['data']))." de ".strftime("%b", strtotime($row['data']))." pelas ".substr($row['hora'], 0,5); 
                                 ?></p>
           
             <p class="titulo"><?php echo substr($row['nome'], 0, 20); ?></p>
            
               <p  class="localizcao"><span class="fa fa-map-marker" ></span><?php echo substr($row['local'], 0, 30); ?></p>
         </div>
      
  </div>
   <?php if($e%5==0){?>
    <div class="item" style="position: relative;">
         
         
         
      <img src="../images/if1.jpg" style="height:100%;">
      
  </div>
    <?php
    }
    $e++;
      } ?>
   
  
  
   
    
   
 
</div>






