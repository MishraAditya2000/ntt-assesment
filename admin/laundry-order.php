<?php
include './backend/connection.php';
if(isset($_POST['status'])&&$_POST['status']=="All"){
    $query="SELECT *FROM orders";
}
else if(isset($_POST['status'])){
    $status=$_POST['status'];
    // echo $status;
    $query="SELECT * FROM orders WHERE status='".$status."'";
}
else{
    $query="SELECT *FROM orders";

}
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">

    <title>Laundry Orders</title>
</head>
<body>
    <?php 
            include './includes/nav.inc.php';
    ?>
    <div class="container center" >
    <form method="POST" action="">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row my-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelect1" class="form-label mt-4">Status</label>
                                    <select class="form-select" id="exampleSelect1" name="status">
                                        <option default><?php if(isset($_POST['status'])){echo $_POST['status'];}?></option>
                                        <option value="All">All</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Accepted">Accepted</option>
                                        <option value="In Process">In Process</option>
                                        <option value="Delivered">Delivered</option>
                                    </select>
                                 </div>
                            </div>
                            <div class="col" style="margin-top: 52px;">
                                <button  class="btn btn-primary ">Filter Status
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
    </div>
    <div class="container">
        <?php
        while($order_row=mysqli_fetch_assoc($result)){
            ?>
            <div class="card" style="margin-bottom: 12px;">
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 col-lg-4 col-sm-12 col-xs-12">
                  <h6 class="h6">Order ID:</h6>
                  <p class=" "><?php echo $order_row['id'];?></p>
                </div>
                <div class="col-md-3 col-lg-4 col-sm-12 col-xs-12">
                  <h6 class="h6">Status:</h6>
                  <p class=" "><?php echo $order_row['status'];?></p>
                </div>
                <div class="col-md-3 col-lg-4 col-sm-12 col-xs-12">
                  <h6 class="h6">Pick Up Scheduled on:</h6>
                  <p class=" "><?php echo $order_row['date']." ".$order_row['time'];?></p>
                </div>
                <div class="col-md-3 col-lg-4 col-sm-12 col-xs-12">
                    <a  class="btn btn-outline-primary" href="./order-details.php?id=<?php echo $order_row['id'];?>">View  Details</a>
                </div>
                <!-- <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                  <h6 class="h6">Name:</h6>
                  <p class=" "></p>
                </div> -->
                <!-- <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                  <h6 class="h6">Mobile No:</h6>
                  <p class=" "></p>
                </div> -->
                <!-- <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                  <h6 class="h6">Address:</h6>
                  <p class=" ">
                 
                  </p>
                </div> -->
              </div>

              <!-- <div class="row mt-3">
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                  <h6 class="h6">Topware:</h6>
                  <p class=" "><?php echo $order_row['item_topware'];?></p>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                  <h6 class="h6">Bottomware:</h6>
                  <p class=" "><?php echo $order_row['item_bottomware'];?></p>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                  <h6 class="h6">Woolen:</h6>
                  <p class=" "><?php echo $order_row['item_woolen'];?></p>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                  <h6 class="h6">Other:</h6>
                  <p class=" "><?php echo $order_row['item_other'];?></p>
                </div>
              </div> -->
            </div>
          </div>
       <?php     
        }
        ?>
    </div>
</body>
</html>