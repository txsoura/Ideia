 <?php
include "../plugin/coneccao.php";
$data=date("Y-m-d");
$codigo = $_GET["codigo"];
$imagem = $_GET["imagem"];
//se tiver imagem, verificar se e imagem 
        if($_FILES['imagem']!=""){
    switch ($_FILES['imagem']['type']):
        case 'image/jpeg';
        case 'image/pjpeg';
        case 'image/png';
        case 'image/x-png';
            $n = $codigo . $data;
    $extensao = strtolower(substr($_FILES['imagem']['name'], -4));

    $nnome = $n . $extensao;
    $target="../plugin/images/";
            break;
    
    endswitch;


     if(move_uploaded_file($_FILES['imagem']['tmp_name'], $target.$nnome)){
         unlink("../plugin/images/".$imagem);
    }else{
        echo("<script language='javascript' type='text/javascript'> alert('Falha ao gravar imagem!');window.history.back();</script>");
    }
    }

$sql = "UPDATE evento SET imagem='$nnome' WHERE codigo='$codigo';";
    if (mysqli_query($connect, $sql)) {
        echo("<script language='javascript' type='text/javascript'>window.history.back();</script>");
    }
?>