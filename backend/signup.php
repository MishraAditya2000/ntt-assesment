<?php 
session_start();
include('./connection.php');
if(isset($_POST['signup'])){
  $name=$_POST['user-name'];
  $email=$_POST['user-mail'];
  $mob=$_POST['user-mob'];
  $address=$_POST['user-address'];
  $password=$_POST['user-password'];


  $checkuser = "SELECT * FROM user WHERE `user-email`='$email'";
  $result = mysqli_query($con,$checkuser);
  $num = mysqli_num_rows($result);
  echo $num;
  if($num>0){
      header ("location:../login.php?name=Account Exit,Please Log In");
    }

  else{
    $hash_ed1=password_hash($password,PASSWORD_DEFAULT);
    $insertuser="INSERT INTO `user`(`user_name`, `user-email`, `user_mob`, `user_password`, `user_address`) VALUES 
                ('$name','$email','$mob','$hash_ed1','$address')";
        $query=mysqli_query($con, $insertuser);
        if($query){
            $_SESSION["user"]=$email;
            $_SESSION["loggedin"]=1;   
            header ('location:../index.php?name=Sign Up Successful');

        } 

    }
}
?>
