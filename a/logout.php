<?php
session_start();
session_destroy();
header("location:../u/index.php");
?>