<?php
session_start();
require('backend/alert.php');
require('backend/profile.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <title>Laundry Request | NTT-Laundry Management</title>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>

  <?php
include './includes/nav.inc.php';
?>
  <div class="container">

    <div class=" my-3">
      <div class="row">
        <div class="col">
          <div class="alert alert-dismissible alert-info">
            <h6><strong>Order Laundry Service Now!</strong><br>
              We provide door-step delivery and pickup for you.</h6>

          </div>
        </div>
      </div>
    </div>
    <div class="order">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12">
          <form method="POST" action="./backend/servicerequest.php">
            <fieldset>
              <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Full Name</label>
                    <input type="text" class="form-control" name="user-name" id="exampleInputName" aria-describedby="emailHelp"
                      placeholder="e.g. John Doe" value="<?php echo $user_row['user_name']?>">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Contact</label>
                    <input type="number" class="form-control" name="user-mob" id="exampleInputcontact" placeholder="e.g. +91 995004844" value="<?php echo $user_row['user_mob']?>" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" class="form-label mt-4">Address</label>
                <!-- <input type="number" class="form-control" id="exampleInputAddress" placeholder="+91 995004844"> -->
                <textarea name="address" name="user-address" id="address" cols="78" rows="2" placeholder="Address"
                  aria-placeholder="Address" class="form-control" required><?php echo $user_row['user_address']?></textarea>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Schedule Pick-Up</label>
                    <input type="date" class="form-control" name="date"  id="exampleInputSchedule" required>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Pick-Up Time(9.00AM -12.00PM & 3.00 PM-6.00PM)</label>
                    <input type="time" class="form-control" min="09:00" max="18:00" name="time" id="exampleInputScheduleTime" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Topware(T-Shirts,Shirts,Top)</label>
                    <input type="number" class="form-control" name="topware" id="exampleInputTopware" placeholder="Enter Quantity" required>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Bottomware(Lower,Jeans,Leggins)</label>
                    <input type="number" class="form-control" name="bottomware" id="exampleInputBottomware" placeholder="Enter Quantity" required>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Woolen</label>
                    <input type="number" class="form-control" name="woolen" id="exampleInputWoolen" placeholder="Enter Quantity" required>
                  </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Other</label>
                    <input type="number" class="form-control" name="other" id="exampleInputOther" placeholder="Enter Quantity" require>
                  </div>
                </div>
              </div>

            </fieldset>
            <!-- <div class="form-group">
              <button type="button" class="btn btn-primary btn-lg" style="margin-top:18px ;">Place Order</button>
            </div> -->
            <button type="submit" class="btn btn-primary btn-md my-3" name="order">Place Order</button>
          </form>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="card text-white bg-primary mb-3">
            <div class="card-header">Price List</b></div>
            <div class="card-body">
            <table>
      <thead>
        <tr>
          <th scope="col"><b>Clothing Type</b></th>
          <th scope="col">Service Charge(per-item)</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Bottom Ware Laundry</td>
          <td>₹22</td>
        </tr>
        <tr>
          <td>Top Ware Laundry</td>
          <td>₹12</td>
        </tr>
        <tr>
          <td>Woolen Laundry</td>
          <td>₹20</td>
        </tr>
        <tr>
          <td>Other Laundry</td>
          <td>According to Apparel</td>
        </tr>
      </tbody>
    </table>
            </div>
          </div>
        </div>
      </div>



    </div>

</body>

</html>