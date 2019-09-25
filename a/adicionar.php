<?php
include "../plugin/coneccao.php";
include "sessao.php";
$date = date("Y-m-d");

$nome = strtolower($_POST["nome"]);
$local = strtolower($_POST["local"]);
$endereco = strtolower($_POST["endereco"]);
$mapa = $_POST["mapa"];
$data = $_POST["data"];
$hora = $_POST["hora"];
$descricao = $_POST["descricao"];

 if ($data <= $date) {
    echo("<script language='javascript' type='text/javascript'> alert('Data invalida! Só pode publicar evento que ira acontecer no mínimo amanhã.');window.history.back();</script>");
} else {

    //Evento pago ou gratis
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
        
 
    //se tiver imagem, verificar se e imagem 
        if($_FILES['imagem']!=""){
    switch ($_FILES['imagem']['type']):
        case 'image/jpeg';
        case 'image/pjpeg';
        case 'image/png';
        case 'image/x-png';
            $n = $nome . $data;
    $extensao = strtolower(substr($_FILES['imagem']['name'], -4));

    $nnome = $n . $extensao;
    $target="../plugin/images/";
            break;
    
    endswitch;


     if(move_uploaded_file($_FILES['imagem']['tmp_name'], $target.$nnome)){
    }else{
        echo("<script language='javascript' type='text/javascript'> alert('Falha ao gravar imagem!');window.history.back();</script>");
    }
    }
     $sql = "INSERT INTO evento (imagem,nome,local,endereco,mapa,data,hora,bilhete,descricao,responsavel) VALUES('$nnome','$nome','$local','$endereco','$mapa','$data','$hora','$bilhete','$descricao','$_COOKIE[produtor]');";
    if (mysqli_query($connect, $sql)) {
        echo("<script language='javascript' type='text/javascript'>window.location.href='meventos.php';</script>");
    }
    
    mysqli_close($connect);
}
?>