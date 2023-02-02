<?php
include './backend/loginverfy.php';
include './backend/orderlist.php';
if (isset($_GET["name"])) {
  $message = $_GET["name"];
  echo "<script>alert('$message');</script>";

}
unset($_GET['name']);
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
$query="SELECT * FROM pricing";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <title>Home | NTT-Laundry Management
  </title>
</head>

<body>
  <?php
include './includes/nav.inc.php';
?>
  <div class="container" style="margin-top:12px ;">

    <div class="row">
      <div class="col">
        <div class="alert alert-dismissible alert-info">
          <h6><strong>Welcome to Laundry Service.</strong><br>
            We provide door-step delivery and pickup for you.</h6>
        </div>
      </div>
    </div>
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
  <div class="container my-5" id="pricing">
    <table class="table table-hover text-center">
      <thead>
        <tr class="table-info">
          <th scope="col">Slno</th>
          <th scope="col">Clothing Type</th>
          <th scope="col">Service Charge(per-item)</th>

        </tr>
      </thead>
      <tbody>
      <?php 
        while($row=mysqli_fetch_assoc($result)){
            ?>

            <th scope="row"><?php echo $row['slno'];?></th>
            <td><?php echo $row['laundry_type'];?></td>
            <td><?php echo $row['currency'].$row['price'];?></td>
            </tr>

            <?php
        }
        ?>
        <!-- <tr>
          <th scope="row">2</th>
          <td>Top Ware Laundry</td>
          <td>$8.50</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Woolen Laundry</td>
          <td>$13.50</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Other Laundry</td>
          <td>According to Apparel</td>
        </tr> -->
      </tbody>
    </table>
  </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>