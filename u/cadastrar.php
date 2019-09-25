<?php
include "../plugin/coneccao.php";

$contacto = $_POST["contacto"];
$email = strtolower($_POST["email"]);
$tamanho = strlen($contacto);
if ($tamanho <8 || $tamanho>9) {
    echo("<script language='javascript' type='text/javascript'> alert('Contacto invalido! Tem de conter 8 ou 9 dígitos.');window.history.back();</script>");
} else {
    $sql = "SELECT * FROM produtor WHERE contacto='$contacto' or email='$email';";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo("<script language='javascript' type='text/javascript'> alert('Contacto e/ou Email já existem!');window.history.back();</script>");
    } else {
        $senha = sha1(MD5($_POST["senha"]));
        $senha1 = sha1(MD5($_POST["senha1"]));
        if ($senha != $senha1) {
            echo("<script language='javascript' type='text/javascript'> alert('Senhas incompatíveis!');window.history.back();</script>");
        } else {
            $nome = $_POST["nome"];
            $sql = "INSERT INTO usuario (senha) VALUES('$senha');";
            if (mysqli_query($connect, $sql)) {

                $sql="INSERT INTO produtor (nome,contacto,email) VALUES ('$nome','$contacto','$email')";
                if(mysqli_query($connect, $sql)){
                    $to = $email;
                $subject = "Ideia | Chega de incomodar seus amigos.";
                $message = "Bem-vindo(a), " . $nome . "\n
                         Com a presente conta, pode: Encontrar eventos do seu interesse, Criar o seu proprio evento e publicitar a sua marca ou empresa na nossa plataforma.\n
                         Obrigado por aderir aos nossos serviços.";
                $header = "MIME-Version: 1.0\n";
                $header = "content-type: text/html; charset=iso-8859-1\n";
                $header = "From Ideia\n";
                mail($to, $subject, $message, $header);

                echo("<script language='javascript' type='text/javascript'> window.location.href='entrar.php';</script>");
                }
                
            }
            mysqli_close($connect);
        }
    }
}
?>