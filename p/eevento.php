<?php
include "../plugin/coneccao.php";

$codigo = $_GET["codigo"];
$e = $_POST["e"];
$nome = strtolower($_POST["nome"]);
$local = strtolower($_POST["local"]);
$endereco = strtolower($_POST["endereco"]);
$data = $_POST["data"];
$hora = $_POST["hora"];
$descricao = addslashes($_POST["descricao"]);
$categoria = $_POST["categoria"];

    //Evento pago ou gratis
    switch ($e):
        case 2;
            $b1 = $_POST["b1"];
         
            if($b1!=""){
                $b1=$b1.";";
            }
            $bilhete = $b1;
        break;
        case 3;
            $b1 = $_POST["b1"];
            $b2 = $_POST["b2"];
         
            if($b1!=""){
                $b1=$b1.";";
            }
            if($b2!=""){
                $b2=$b2.";";
            }
            $bilhete = $b1.$b2;
        break;
        case 4;
             $b1 = $_POST["b1"];
             $b2 = $_POST["b2"];
             $b3 = $_POST["b3"];
            if($b1!=""){
                $b1=$b1.";";
            }
            if($b2!=""){
                $b2=$b2.";";
            }
            if($b3!=""){
                $b3=$b3.";";
            }
            $bilhete=$b1.$b2.$b3;
        break;
        case 5;
            $b1 = $_POST["b1"];
             $b2 = $_POST["b2"];
             $b3 = $_POST["b3"];
             $b4 = $_POST["b4"];
            if($b1!=""){
                $b1=$b1.";";
            }
            if($b2!=""){
                $b2=$b2.";";
            }
            if($b3!=""){
                $b3=$b3.";";
            }
            if($b4!=""){
                $b4=$b4.";";
            }
            $bilhete=$b1.$b2.$b3.$b4;
        break;
        case 6;
            $b1 = $_POST["b1"];
             $b2 = $_POST["b2"];
             $b3 = $_POST["b3"];
             $b4 = $_POST["b4"];
             $b5 = $_POST["b5"];
            if($b1!=""){
                $b1=$b1.";";
            }
            if($b2!=""){
                $b2=$b2.";";
            }
            if($b3!=""){
                $b3=$b3.";";
            }
            if($b4!=""){
                $b4=$b4.";";
            }
            if($b5!=""){
                $b5=$b5;
            }
            $bilhete = $b1.$b2.$b3.$b4.$b5;
        break;
    endswitch;
     $sql = "UPDATE evento SET nome='$nome',local='$local',endereco='$endereco',data='$data',hora='$hora',bilhete='$bilhete',descricao='$descricao',categoria='$categoria' 
    WHERE codigo='$codigo';";
    if (mysqli_query($connect, $sql)) {
        echo("<script language='javascript' type='text/javascript'>window.location.href='meventos.php';</script>");
    }
    mysqli_close($connect);
?>