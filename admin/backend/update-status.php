<?php
require('./connection.php');
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $stats=$_POST['status'];

    $query="UPDATE orders SET status='".$stats."' WHERE id='".$id."' ";
    echo $query;
    $result=mysqli_query($con,$query);
    if($result){
        header('location:../laundry-order.php');
    }
    else{
        header('location:../order-details.php?id=$id');
    }
}
?>