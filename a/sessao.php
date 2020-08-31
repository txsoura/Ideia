<?php
session_start();
if(!isset($_SESSION["conta"]) ){
    session_destroy();
    unset($_SESSION["conta"]);
    header("location:../u/index.php");
}
?>