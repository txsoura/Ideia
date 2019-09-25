<?php
include "../plugin/coneccao.php";

$cod = $_GET["codigo"];
$imagem = $_GET["imagem"];
$sql = "DELETE FROM evento WHERE codigo='$cod';";

if (mysqli_query($connect, $sql)) {
    unlink("../images/".$imagem);
    echo("<script language='javascript' type='text/javascript'> alert('Apagado com sucesso!');window.location.href='eventos.php';</script>");
}
mysqli_close($connect);
?>