<?php
include "sessao.php";
include "../plugin/coneccao.php";

    $sql = "DELETE * FROM evento  WHERE data<CURDATE();";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    echo("<script language='javascript' type='text/javascript'> window.location.href='eventos.php';</script>");
    
?>