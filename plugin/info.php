<?php
        $cod = $_GET["codigo"];
        $sql = "SELECT* FROM evento where codigo='$cod'";
        $result = mysqli_query($connect, $sql) or die("Error:" . mysqli_error($connect));
        $row = mysqli_fetch_array($result);
        ?>
        
            <div  style="position:absolute;border-bottom:solid 1px #ccc;width:100%;">
                <?php
                if($row['imagem']==""){
                    echo "<img src='../plugin/images/imagem.png' width='100%' height='450px' style=filter:blur(3px);>"; 
                }else{
                    echo "<img src='../plugin/images/" . $row['imagem'] . "' width='100%' height='450px' style=filter:blur(3px);>"; 
                }
                ?>
            </div>
        
      

<main role="main" class="container bg-light" style="padding-top:90px; margin-top:0px;position:relative;">
    
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
                    
                    <h4 class="card-title" style="padding-top: 5px;"> <?php echo $row['nome']; ?></h4>
                    <div class="mb-1 text-muted"><i class="fa fa-calendar"></i> <?php
                        setlocale(LC_TIME, 'pt', 'pt.tuf-8', 'pt.utf-8', 'portuguese');
                        echo strftime("%A", strtotime($row['data'])).", ".date('d',strtotime($row['data']))." de ".strftime("%B", strtotime($row['data']))." de ".date('Y',strtotime($row['data'])); ?><br/>
                      <i class="fa fa-clock-o"></i>Hora de Inicio: <?php echo substr($row['hora'], 0,5); ?><br/>
                        <?php
                        
                         if($row['bilhete']==""){ 
                        ?>
                    <strong class="d-inline-block mb-2 text-primary"> Entradas gratis</strong><br/>
  <?php 
                         }else{
                        ?>


<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ver Bilhetes
  </button>
  <div class="dropdown-menu dropdown-menu-left">
      <?php
                        $bilhetes = $row["bilhete"];
                        $bilhete = explode(";", $bilhetes);
                        foreach ($bilhete as $b) {
                            ?>
      <button class="dropdown-item" type="button"><?php echo $b; ?></button>
     
                            <?php
                        }
                        ?>
    

  </div>
</div>
                        <?php } ?>
                </div>
            </div>
        </div>
        <div class="card-footer w-100 text-muted">
           <i class="fa fa-map-marker"></i> <?php echo $row['local'].", ".$row['endereco']; ?>
        </div>
  </div>
    
      <div class="row" >
          <div class="col-md-4" id="des">
          <div style="width:100%;height:300px ;border:solid 1px yellow"></div>
        </div>

          

          <div class="blog-post col-md-8" style="padding-left:20px;padding-right:20px;" >
              <h2 class="blog-post-title " style="margin:10px;" >Descricao</h2>
            <hr>
              <nav >
                  <span class="badge badge-pill badge-primary"><?php echo $row['categoria']; ?></span>
          </nav>
             <?php echo $row['descricao']; ?>
              
          </div>
          

          <style type="text/css">
          #lig{
                display:none;

              }
              
          
           @media(max-width:767px){
              #des{
                display:none;
              }
              #lig{
                display:block;
              }
              
              

              }

            
          </style>
          <div class="col-md-4" id="lig" style="">
          <div style="width:100%;height:300px ;border:solid 1px yellow"></div>
          </div>
        </div>
           




      </div>
        </main>
