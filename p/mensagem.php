<?php
include "../plugin/coneccao.php";
include "sessao.php";

$assunto=$_POST["assunto"];
$sql = "SELECT * FROM produtor WHERE codigo='$_COOKIE[produtor]';";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
        $sql="INSERT INTO mensagem (nome,email,contacto,assunto) VALUES('$row[nome]','$row[email]','$row[contacto]','$assunto');";
            if(mysqli_query($connect, $sql)){
                
                echo("<script language='javascript' type='text/javascript'> alert('Mensagem enviada com sucesso!');window.location.href='ajuda.php';</script>");
            }      
            mysqli_close($connect);
?>