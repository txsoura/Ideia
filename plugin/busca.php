
  <div class="cont" style="height:100%;  background-color: #f4f4f4;">
   

   


<div class="grid-container">
  <?php
    $palavra=$_POST["palavra"];
                    $sql = "SELECT* FROM evento WHERE data>=CURDATE() and nome LIKE '%$palavra%' or local LIKE '%$palavra%' or endereco LIKE '%$palavra%' or categoria LIKE '%$palavra%' ORDER BY data ASC;";
                    $result = mysqli_query($connect, $sql) or die("Error:" . mysqli_error($connect));
                    if(mysqli_num_rows($result)>0){
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
             
              top: 12px;
               right: 0px;
                background:rgb(100,120,120,.6);
                font-size:12pt;
                padding:2px;
  
               
                }
          </style>
         <a href="info.php?codigo=<?php echo $row['codigo']; ?>">
       <?php
                    if($row['imagem']==""){
                        echo "<img src='../plugin/images/imagem.png' alt='' class='r'>";
                    }    else{
                        echo "<img src='../plugin/images/" . $row['imagem'] . "' alt='' class='r'>"; 
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
      } 
                    }else{
    echo "<p class='titulo'>Evento '".$palavra."' nao foi encontrado.</p>";
                    }
    ?>
   
  
  
   
    
   
   
 
</div>
</div>






