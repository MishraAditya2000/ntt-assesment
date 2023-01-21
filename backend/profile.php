<?php
$con=mysqli_connect('localhost','root','','lms');
$query_profile="SELECT * FROM user WHERE   `user-email`='".$_SESSION['user']."'";
$result_profile=mysqli_query($con,$query_profile);
$user_row=mysqli_fetch_assoc($result_profile);

?>