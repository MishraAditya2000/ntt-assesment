<?php
session_start();
$_SESSION['loggedin']=null;
session_destroy();
header('location:../index.php');
?>