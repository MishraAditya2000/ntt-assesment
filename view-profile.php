<?php
include('backend/alert.php');
require('backend/profile.php');
include('backend/orderlist.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <title>Document</title>
</head>

<body>

  <?php
include './includes/nav.inc.php';
?>

  <div class="container" style="margin-top: 12px">
    <div class="row">
      <div class="col-lg-4 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-4 col-sm-4 col-xs-4">
            <img src="https://img.freepik.com/premium-vector/3d-square-white-icon-button-person_165488-4834.jpg?w=826"
              alt="profile-image" width="100%" />
          </div>
          <div class="col-lg-8 col-sm-8 col-xs-8">
            <div class="col">
              <h4 class="h4"></h4>
              <p class=" "><?php echo $user_row['user_name'];?></p>
            </div>
            <div class="col">
              <h4 class="h4"></h4>
              <p class=" "><?php echo $user_row['user_mob'];?></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h6 class="h6">Email:</h6>
            <p class=" "><?php echo $user_row['user-email'];?></p>
          </div>
          <div class="col-12">
            <h6 class="h6">Address:</h6>
            <p class=" ">
             <?php echo $user_row['user_address'];?> 
            </p>
          </div>
          <a class="btn btn-primary" data-bs-toggle="offcanvas" href="./change-password.php" role="button" aria-controls="offcanvasExample">
          Change Password
          </a>
        </div>



      </div>

      <div class="col-lg-8 col-sm-12 col-xs-12">
        <div class="container">

          <div class="card border-secondary mb-3">
            <div class="card-header  text-center">
              <!-- <h4 class="card-title">Jhon Hoe</h4> -->
              <h4 class="h4 text-center">My Orders</h4>
            </div>
            <div class="card-body text-center">
              <div class="row">
                <div class="col-12">
                  <td>Total Order</td><br>
                  <td><?php echo mysqli_num_rows($order_count);?></td>
                </div>
              </div>
              <table>
                <tr>

                </tr>
                <tr>


                </tr>
              </table>
            </div>

          </div>
          <?php while($order_row=mysqli_fetch_assoc($result_order)){
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
        }?>







        </div>
      </div>

    </div>





  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>