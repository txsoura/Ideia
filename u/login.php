<?php

include "../plugin/coneccao.php";
$conta = strtolower($_POST['conta']);
$senha = sha1(MD5($_POST['senha']));

if($conta=="info.ideiamz@gmail.com" && $senha=="ff184043e84bf7070cda461cd7af13a5148c8b34"){
   session_start();
    $_SESSION["conta"] = 0;
    echo("<script language='javascript' type='text/javascript'>window.location.href='../a/index.php';</script>"); 
}else{
    
    $sql = "SELECT (codigo) FROM produtor WHERE contacto='$conta' or email='$conta';";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
       $cod=$row["codigo"];
        
        $sql = "SELECT * FROM usuario WHERE codigo='$cod' and senha='$senha';";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
       setcookie("produtor",$cod,(time()+(86400*30)),"/");
        echo("<script language='javascript' type='text/javascript'>window.location.href='../p/index.php';</script>");
    } else {

        echo("<script language='javascript' type='text/javascript'> alert('Senha incorreta! Tente novamente.');window.location.href='entrar.php';</script>");
    }
        
    } else {

        echo("<script language='javascript' type='text/javascript'> alert('Contacto ou Email incorrectos! Tente novamente');window.location.href='entrar.php';</script>");
    }
}
mysqli_close($connect);
?>