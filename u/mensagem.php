<?php
include "../plugin/coneccao.php";

$nome=$_POST["nome"];
$email=$_POST["email"];
$contacto=$_POST["contacto"];
$assunto=$_POST["assunto"];
$tamanho=strlen($contacto);
if($tamanho<8 || $tamanho>9){
    echo("<script language='javascript' type='text/javascript'> alert('Contacto invalido! Tem de conter 8 ou 9 dígitos.');window.history.back();</script>");
}else{
            $sql="INSERT INTO mensagem (nome,email,contacto,assunto) VALUES ('$nome','$email','$contacto','$assunto');";
            if(mysqli_query($connect, $sql)){
                
                echo("<script language='javascript' type='text/javascript'> alert('Mensagem enviada com sucesso!');window.location.href='ajuda.php';</script>");
            }
            mysqli_close($connect);
}
?>