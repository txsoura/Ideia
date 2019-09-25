            <!--Navbar -->
            <nav class="mb-4 navbar navbar-expand-lg navbar-dark fixed-top bg-unique-dark" style=" background:white;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); border-bottom:solid 1px #ccc;" >
                <style>
                       
                    </style>
                 

                <a class="navbar-brand" href="index.php"><img src="../plugin/images/logo.svg" style="width:120px;  "></a>
                 <button  class="navbar-toggler" style=" border-color:#ccc; outline: 0; -webkit-box-shadow: none; box-shadow: none;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style=" background-image: url('https://mdbootstrap.com/img/svg/hamburger7.svg?color=#ccc');"></span>
    
                   
                </button>
               
                <div  class="collapse navbar-collapse" id="navbarSupportedContent-3" >
                 
                    <ul class="navbar-nav mr-auto">
                        <style type="text/css">
                            a{
                                font-family:sans-serif;
                                font-size:16pt;
                               color:blue;

                            }

                            
                        </style>
                        <li class="nav-item">
                            <a class="nav-link" href="eventos.php" style="color:grey;">Todos eventos<span class="sr-only">(current)</span></a>
                        </li>
                    
                         <li class="nav-item dropdown">
                            <a  style="color: grey" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ideia 
                                </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink" >
                                <a class="dropdown-item" href="produtor.php">Produtores</a>
                                <a class="dropdown-item" href="conta.php">Contas</a>
                                <a class="dropdown-item" href="publicidade.php">Publicidades</a>
                                 <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Sair</a>
                            </div>
                        </li>
                       
                        
                        
                    </ul>
                    <style type="text/css">
                  
                    #input-nav{
                      width:500px;
                    }
                    @media (max-width:1200px){
                    #input-nav{
                      width:500px;
                    
                    }
                  }
                   
                    @media(max-width:990px){
                      #input-nav{
                        width:800px;

                      }
                      #ya{
                       margin-top:15px;
                       margin-right:20px;
                      
                          }
                    }
                     @media (max-width:820px){
                    #input-nav{
                      width:600px;
                      
                    }
                  }
                     @media (max-width:625px){
                    #input-nav{
                      width:550px;
                      
                    }
                  }
                     @media (max-width:550px){
                    
                    #input-nav{
                      width:400px;
                     
                    }
                  }
                     @media (max-width:425px){
                    #input-nav{
                      width:320px;
                     
                    }
                   
                   }
                    @media (max-width:340px){
                    #input-nav{
                      width:300px;
                     
                    }
                   
                   }

 </style>

                          

                     <form class="navbar-form navbar-left" action="/action_page.php" style="margin-right:50px">
  <div class="input-group" id="input-nav" >
    <input style="   border-color:#ccc; outline: 0; -webkit-box-shadow: none; box-shadow: none;" type="text" class="form-control" placeholder="Procurar" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
    <style type="text/css">
      .form-control{
        border-color:#ccc; outline: 0; -webkit-box-shadow: none; box-shadow: none;
      }
    </style>
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="fa fa-search"></i>
      </button>
    </div>
    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                 <button class="dropdown-item" type="button">Culinaria</button>
     <div class="dropdown-divider"></div>
    <button class="dropdown-item" type="button">Musica</button>
     <div class="dropdown-divider"></div>
    <button class="dropdown-item" type="button">NetWorking</button>
                            </div>
  </div>
</form>
<a href="publicar.php" class="btn btn-primary" id="ya" style="font-family: sans-serif;  font-weight:bolder;" >Publicar Publicidade +</a>
       
                </div>

            </nav>

            <!--/.Navbar -->