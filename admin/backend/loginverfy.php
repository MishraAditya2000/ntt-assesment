<?php
session_start();
if(!isset($_SESSION['login']) && !isset($_SESSION['admin'])){
  header('location:../admin/login.php');
}
?>