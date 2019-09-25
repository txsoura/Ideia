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
                        <li class="nav-item">
                            <a class="nav-link" href="entrar.php" style="color:grey;"><i class="fa fa-user" style="padding-right:2px;"></i>Entrar<span class="sr-only">(current)</span></a>
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

                          

                     <form method="post" action="busca.php" class="navbar-form navbar-left" style="margin-right:50px">
  <div class="input-group" id="input-nav" >
    <input style="border-color:#ccc; outline: 0; -webkit-box-shadow: none; box-shadow: none;" type="search" class="form-control" placeholder="Procurar evento" class="nav-link dropdown-toggle" name="palavra" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
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
                                 <a href="categoria.php?ct=Desporto" class="dropdown-item" type="button">Desporto</a>
     <div class="dropdown-divider"></div>
    <a href="categoria.php?ct=Musica" class="dropdown-item" type="button">Musica</a>
     <div class="dropdown-divider"></div>
    <a href="categoria.php?ct=Gastronomia" class="dropdown-item" type="button">Gastronomia</a>
        <div class="dropdown-divider"></div>
    <a href="categoria.php?ct=Conferencia" class="dropdown-item" type="button">Conferencia</a>
        <div class="dropdown-divider"></div>
    <a href="categoria.php?ct=Educacao" class="dropdown-item" type="button">Educacao</a>
        <div class="dropdown-divider"></div>
    <a href="categoria.php?ct=Artes" class="dropdown-item" type="button">Artes</a>
        <div class="dropdown-divider"></div>
    <a href="categoria.php?ct=Outra" class="dropdown-item" type="button">Outra</a>
                            </div>
  </div>
                    </form>
<a href="entrar.php" class="btn btn-primary" id="ya" style="font-family: sans-serif;  font-weight:bolder;" >Publicar Evento +</a>
                </div>

            </nav>

            <!--/.Navbar -->