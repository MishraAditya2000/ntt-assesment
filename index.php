<?php
include './backend/loginverfy.php';
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
            <small class="card-text">Last Order:06-01-23</small><br>
            <small><a href="#" class="card-link">View Details</a></small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-3 col-xs-12">
        <div class="card border-info mb-3">
          <div class="card-header bg-info">
            <h6 class="card-title text-white">Accepted</h6>
          </div>
          <div class="card-body">
            <small class="card-text">Accepted On:15-01-23</small><br>
            <small><a href="#" class="card-link">View Details</a></small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-3 col-xs-12">
        <div class="card border-warning mb-3">
          <div class="card-header bg-warning">
            <h6 class="card-title text-white">In Process</h6>
          </div>
          <div class="card-body">
            <small class="card-text">Processing Started:10-01-23</small><br>
            <small><a href="#" class="card-link">View Details</a></small>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-3 col-xs-12">
        <div class="card border-success mb-3">
          <div class="card-header bg-success">
            <h6 class="card-title text-white">Finished</h6>
          </div>
          <div class="card-body">
            <small class="card-text text-small">Last Delivered On: 12-01-23</small><br>
            <small><a href="#" class="card-link">View Details</a></small>
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
        <tr>
          <th scope="row">1</th>
          <td>Bottom Ware Laundry</td>
          <td>₹22</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Top Ware Laundry</td>
          <td>₹12</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Woolen Laundry</td>
          <td>₹20</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Other Laundry</td>
          <td>₹30</td>
        </tr>
      </tbody>
    </table>
  </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>