<?php
include('./connection.php');
session_start();
if(isset($_POST['update'])){
    $password=$_POST['user-password'];
    $confirm=$_POST['confirm-password'];
    $query_password="UPDATE `user` SET `user_password`='$password' WHERE `user-email`='".$_SESSION['user']."'";
    $result=mysqli_query($con,$query_password);
    if($query_password){
        header('location:./logout.php');
    }
    else{
        header('location:../change-password.php');
    }
}
?>