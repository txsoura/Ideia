<?php
if(!isset($_COOKIE["produtor"])) {
    echo("<script language='javascript' type='text/javascript'>window.location.href='u/index.php';</script>");
} else {
    echo("<script language='javascript' type='text/javascript'>window.location.href='p/index.php';</script>");
}
?>