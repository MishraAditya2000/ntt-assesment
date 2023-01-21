<?php
session_start();
include('./connection.php');
if(isset($_POST['order'])){
    $name=$_POST['user-name'];
    $mob=$_POST['user-mob'];
    $address=$_POST['address'];
    $schdeule_date=$_POST['date'];
    $time=$_POST['time'];
    $topware=$_POST['topware'];
    $bottomware=$_POST['bottomware'];
    $woolen=$_POST['woolen'];
    $other=$_POST['other'];
    $status="Pending";
    $today = date("Ymd");
    $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
    $order_id=$today.$rand;

    $order_query="INSERT INTO `orders`( `id`, `status`,`name`,`profile_mail`,`mob`, `address`, `date`,`time`, `item_topware`, `item_bottomware`, `item_woolen`, `item_other`) VALUES 
                ('$order_id','$status','$name','".$_SESSION['user']."','$mob','$address','$schdeule_date','$time','$topware','$bottomware','$woolen','$other')";
    echo $order_query."<br>";
    $execute_query=mysqli_query($con,$order_query);
    if($execute_query){
        header('location:../view-profile.php?name=Order Successful,We will pick up on'.$schdeule_date);
    }
    else{
        header('location:../laundry-request.php?name=Error Occured,Try Again');

    }
}   
?>