<?php
if(!isset($_SESSION)){
    session_start();
    }
    if(isset($_GET["name"]) && strlen($_GET['name'])>0){
        $message=$_GET["name"];
        echo "<script>alert('$message');</script>";
    
        
    }
    unset($_GET['name']);
?>