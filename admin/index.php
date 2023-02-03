<?php 
include "./backend/loginverfy.php";
include "./backend/connection.php";
if (isset($_GET["name"])) {
  $message = $_GET["name"];
  echo "<script>alert('$message');</script>";

}
unset($_GET['name']);
$query="SELECT * FROM orders  ORDER BY slno DESC";
$order_count=mysqli_query($con,$query);
$result_order=mysqli_query($con,$query);
$recent_orders=mysqli_query($con,$query);
$new_request=[];
$accepted=[];
$processing=[];
$finished=[];
  if(mysqli_num_rows($order_count)>0){
    while($row=mysqli_fetch_assoc($result_order)){
      if($row['status']=="Pending"){
        $new_request[]=$row['date'];
      }
      elseif ($row['status']=="Accepted") {
       $accepted[]=$row['date'];
      }
      elseif($row['status']=="Processing"){
        $processing[]=$row['date'];
      }
      elseif ($row['status']=="Finished") {
        $finished[]=$row['status'];
      }
    }
    $total=count($new_request)+count($processing)+count($finished)+count($accepted);
  }

else{
$total=0;

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
      <div class="container">
            <div class="row my-5">
                  <div class="col-lg-3 col-sm-3 col-xs-12">
                  <div class="card border-primary mb-3">
                  <div class="card-header bg-primary">
                            <h6 class="card-title text-white">New Request</h6>
                  </div>

                <div class="card-body">
                  <small class="card-text">Total New Request:<?php echo count($new_request);?></small><br>
                  <small>Total Order:<?php echo $total;?></small>
                </div>

              </div>
      </div>
            <div class="col-lg-3 col-sm-3 col-xs-12">
              <div class="card border-info mb-3">
                <div class="card-header bg-info">
                  <h6 class="card-title text-white">Accepted</h6>
                </div>
                <div class="card-body">
                  <small class="card-text">Total Order Accepted:<?php echo count($accepted);?></small><br>
                  <small>Total Order:<?php echo $total;?></small>

                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-3 col-xs-12">
              <div class="card border-warning mb-3">
                <div class="card-header bg-warning">
                  <h6 class="card-title text-white">In Process</h6>
                </div>
                <div class="card-body">
                  <small class="card-text">In Processing :<?php echo count($processing);?></small><br>
                  <small>Total Order:<?php echo $total;?></small>

                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-3 col-xs-12">
              <div class="card border-success mb-3">
                <div class="card-header bg-success">
                  <h6 class="card-title text-white">Finished</h6>
                </div>
                <div class="card-body">
                  <small class="card-text text-small">Order Fulfilled:<?php echo count($finished);?></small><br>
                  <small>Total Order:<?php echo $total;?></small>

                </div>
              </div>
            </div>

            </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
                <div class="card text-white bg-primary">
                      <p class="h5 text-center text-white" style="padding: 8px;">Recent Orders</p>
                </div>
          </div>
        </div>
        <div class="row my-2">
          <div class="col-12">
        <?php
           $i=0;
          while($order_row=mysqli_fetch_assoc($recent_orders)){
            if($i<=2){
              ?>
              <div class="card" style="margin-bottom: 12px;">
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
            </div>
          </div>



            <?php
            }
            $i++;
          }
        ?>
          </div>
        </div>

      </div>
</body>
</html>