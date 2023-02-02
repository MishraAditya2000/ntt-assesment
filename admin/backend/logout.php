<?php
session_start();
$_SESSION['login']=null;
$_SESSION['admin']=null;
session_destroy();
header('location:../index.php');
?>