<?php
include "../plugin/coneccao.php";
include "sessao.php";


$nome = $_POST["nome"];
$contacto = $_POST["contacto"];
$email = strtolower($_POST["email"]);
$tamanho = strlen($contacto);
if ($tamanho <8 || $tamanho>9) {
    echo("<script language='javascript' type='text/javascript'> alert('Contacto invalido! Tem de conter 8 ou 9 dígitos.');window.history.back();</script>");
} else {

    $sql = "UPDATE produtor SET nome='$nome',contacto='$contacto',email='$email' WHERE codigo='$_COOKIE[produtor]';";
    if (mysqli_query($connect, $sql)) {

        $to = $email;
        $subject = "Ideia: Actualização de dados";
        $message = "Foi efectuado a actualização dos dados da sua conta:\n
                         Nome: " . $nome . "\n
                         Contacto: " . $contacto . "\n
                         Email: " . $email . "\n
                         Obrigado por usar os nossos serviços.";
        $header = "MIME-Version: 1.0\n";
        $header = "content-type: text/html; charset=iso-8859-1\n";
        $header = "From Ideia\n";
        mail($to, $subject, $message, $header);

        echo("<script language='javascript' type='text/javascript'> window.location.href='mperfil.php';</script>");
    }
    mysqli_close($connect);
 
}
?>