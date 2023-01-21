<?php
include('./connection.php');
session_start();
if(isset($_POST['update'])){
    $name=$_POST['user-name'];
    $mob=$_POST['user-mob'];
    $address=$_POST['address'];
    $query="UPDATE `user` SET `user_name`='$name',`user_mob`='$mob',`user_address`='$address' WHERE `user-email`='".$_SESSION['user']."'";
    $execute_query=mysqli_query($con,$query);
    if($execute_query){
        header('location:../view-profile.php?name=Profile Updated Successfully');
    }
    else{
        header('location:../index.php?name=Try Again.');
    }
    
}
?>