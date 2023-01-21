<?php 
include('./connection.php');
session_start();
if(isset($_POST['login'])){
    $user_mail=$_POST['user-mail'];
    $user_password=$_POST['user-password'];

    $s="SELECT * FROM user WHERE `user-email`='$user_mail'";
    echo $s;
    $s_res=mysqli_query($con,$s);

     if($s_row=mysqli_fetch_assoc($s_res)){
        if($user_password==$s_row['user_password']){
            
            $_SESSION["user"]=$s_row['user-email'];
            $_SESSION["loggedin"]=1;
            header('location:../index.php?name=Login Successful');
        }
        else{
            header ('location:../login.php?name=Password Does Not Match.');
        }
    }

    else{
        header ('location:../login.php?name=Credentials Does Not Matcch Any Account');   
    }
 } 
?>