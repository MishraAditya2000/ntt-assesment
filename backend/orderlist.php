<?php
$con=mysqli_connect('localhost','root','','lms');
$query_order="SELECT * FROM orders WHERE `profile_mail`='".$_SESSION['user']."'";
$result_order=mysqli_query($con,$query_order);
$order_count=mysqli_query($con,$query_order);
?>