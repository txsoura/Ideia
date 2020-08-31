<?php
include "../plugin/coneccao.php";
include "sessao.php";


$actual = sha1(MD5($_POST["actual"]));
$senha = sha1(MD5($_POST["senha"]));
$senha1 = sha1(MD5($_POST["senha1"]));
if ($senha != $senha1) {
    echo("<script language='javascript' type='text/javascript'> alert('Senhas incompatíveis!');window.history.back();</script>");
} else {
    $sql = "SELECT * FROM usuario WHERE codigo='$_COOKIE[produtor]' and senha='$actual';";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) < 1) {
        echo("<script language='javascript' type='text/javascript'> alert('Senha actual errada!');window.history.back();</script>");
    } else {

    $sql = "UPDATE usuario SET senha='$senha' WHERE codigo='$_COOKIE[produtor]';";
    if (mysqli_query($connect, $sql)) {
        
        $sql = "SELECT * FROM produtor WHERE codigo='$_COOKIE[produtor]';";
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_array($result); 
        
            $to = $row['email'];
            $subject = "Ideia: Actualização de dados";
            $message = $row['nome'].",\n 
            Foi efectuado a actualização da sua senha, caso não o tenha feito contacte-nos.\n
            Nosso email: info.ideiamz@gmail.com\n
            Obrigado por usar os nossos serviços.";
            $header = "MIME-Version: 1.0\n";
            $header = "content-type: text/html; charset=iso-8859-1\n";
            $header = "From Ideia\n";
            mail($to, $subject, $message, $header);

            echo("<script language='javascript' type='text/javascript'> window.location.href='mperfil.php';</script>");
       
    }
    mysqli_close($connect);
    }
}
?>