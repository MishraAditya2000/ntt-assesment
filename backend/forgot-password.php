<?php
session_start();
if(isset($_POST['verify'])){
    $user=$_POST['user-mail'];
    $con=mysqli_connect('localhost','root','','lms');
    $query_profile="SELECT * FROM user WHERE   `user-email`='$user'";
    $result_profile=mysqli_query($con,$query_profile);
    $user_row=mysqli_num_rows($result_profile);
    if($user_row==1){
        $_SESSION['user']=$user;
        header('location:../change-password.php');
    }
    elseif($user_row==0){
        header('location:../registration.php?name=New User?Please Sign up');
    }
    else{
        header('location:../user-verify.php?name=Credential Mismatch');

    }
}
?>