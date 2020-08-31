<?php
include "../plugin/coneccao.php";
include "sessao.php";

$sim=strtolower($_POST["sim"]);
$senha = sha1(MD5($_POST["senha"]));
if ($sim != "sim") {
    echo("<script language='javascript' type='text/javascript'>window.history.back();</script>");
} else {
    $sql = "SELECT * FROM usuario WHERE codigo='$_COOKIE[produtor]';";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) < 1) {
        echo("<script language='javascript' type='text/javascript'> alert('Senha errada!');window.history.back();</script>");
    } else {

    $sql = "DELETE FROM usuario  WHERE codigo='$_COOKIE[produtor]';";
    if (mysqli_query($connect, $sql)) {
        
        $sql = "SELECT * FROM produtor WHERE codigo='$_COOKIE[produtor]';";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result); 
        
            $to = $row['email'];
            $subject = "Ideia: Apagar conta";
            $message = $row['nome'].",\n 
            Recebemos a solicitação para apagar a sua conta Ideia associada a este email.\n
            Este email confirma que a sua conta, perfil, conteudos e eventos serao retirados na nossa plataforma num prazo de 24 horas.\n
            Contas apagadas não podem ser reactivas,\n
            Obrigado por usar os nossos serviços.";
            $header = "MIME-Version: 1.0\n";
            $header = "content-type: text/html; charset=iso-8859-1\n";
            $header = "From Ideia\n";
            mail($to, $subject, $message, $header);
        
        
            $sql = "DELETE FROM produtor  WHERE codigo='$_COOKIE[produtor]';";
    if (mysqli_query($connect, $sql)) {
            echo("<script language='javascript' type='text/javascript'> window.location.href='logout.php';</script>");
    }
       
    }
    mysqli_close($connect);
    }
}
?>