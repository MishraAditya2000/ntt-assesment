<?php 
include "./backend/connection.php";
if (isset($_GET["id"])) {
  $id = $_GET["id"];

  $query="SELECT * FROM orders WHERE id='".$id."' ";
  $result=mysqli_query($con,$query);
  $order_row=mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.css">

    <title>Admin-Laundry Management
    </title>
</head>
<body>
<body>
           <?php
            include './includes/nav.inc.php';
            ?>
            <center>
                <div class="container" style="margin-top:12px">
                    <div class="card" style="width: 680px;">
                        <div class="card-header">
                            <p class="h6">ORDER ID:<?php echo $order_row['id'];?></p>
                        </div>
                        <div class="card-body">
                        <div class="row">
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <h6 class="h6">Order ID:</h6>
                                    <p class=" "><?php echo $order_row['id'];?></p>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <h6 class="h6">Status:</h6>
                                    <p class=" "><?php echo $order_row['status'];?></p>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <h6 class="h6">Pick Up Scheduled on:</h6>
                                    <p class=" "><?php echo $order_row['date']." ".$order_row['time'];?></p>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <h6 class="h6">Name:</h6>
                                    <p class=" "><?php echo $order_row['name'];?></p>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <h6 class="h6">Mobile No:</h6>
                                    <p class=" "><?php echo $order_row['mob'];?></p>
                                    </div>
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                    <h6 class="h6">Address:</h6>
                                    <p class=" ">
                                    <?php echo $order_row['address'];?>
                                    </p>
                                    </div>
                            </div>

              <div class="row mt-3">
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
              </div>

              <div class="row mt-3">
                        <form method="POST" action="./backend/update-status.php">
                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                            <input type="text" name="id"  value="<?php echo $order_row['id']?>"hidden>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
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
                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12" style="margin-top: 8px;">
                            <button class="btn btn-outline-primary" name="update" type="submit">Update Status</button>
                            </div>
                            <!-- <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                            <h6 class="h6">Other:</h6>
                            <p class=" "></p>
                            </div> -->
                            </form>
              </div>


                        </div>
                    </div>
                </div>
            </center>
      
</body>
</html>