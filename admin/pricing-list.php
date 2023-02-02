<?php
include'../admin/backend/connection.php';
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

    <title>Price List</title>
</head>
<body>
    <?php 
            include './includes/nav.inc.php';    
    ?>
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

      </tbody>
    </table>
    <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#profileEditModa">Update Pricing</a>
  </div>

  <div class="modal fade" id="profileEditModa" tabindex="-1" aria-labelledby="profileEditModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="profileEditModalLabel">Edit Pricing</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="modal-form" method="POST" action="./backend/update-price.php">
          <fieldset>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label mt-4">Topware Laundry</label>
                  <input type="text" class="form-control" name="topware" id="exampleInputName" aria-describedby="emailHelp" 
                    placeholder="Price of Topware Laundry" required>

                </div>
              </div>
              <div class="col">
                
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label mt-4">Bottomware Laundry</label>
                  <input type="text" class="form-control" name="bottomware" id="exampleInputEmail" aria-describedby="emailHelp"
                  placeholder="Price of Bottomware Laundry" required>
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label mt-4">Woolen Laundry</label>
                  <input type="text" class="form-control" name="woolen" id="exampleInputName" aria-describedby="emailHelp"
                    placeholder="Price of Woolen Laundry" required>

                </div>
              </div>
              <div class="col">
                
                <div class="form-group">
                  <label for="exampleInputEmail1" class="form-label mt-4">Other Laundry</label>
                  <input type="text" class="form-control" name="other" id="exampleInputEmail" aria-describedby="emailHelp"
                  placeholder="Price of Topware Laundry" required>
                  
                </div>
              </div>
            </div>

          </fieldset>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="margin-top: 12px;">Close</button>
          <button type="submit" form="modal-form" name="update" class="btn btn-primary" style="margin-top:12px">Update</button>
        </form>
      </div>
    </div>

  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
// this will get the full URL at the address bar
var url = window.location.href;
// passes on every "a" tag
$(".nav-item a").each(function() {
  // checks if its the same on the address bar
  if (url == (this.href)) {
    console.log(url);
    $(this).closest(".nav-link").addClass("active");
  }
});
</script>
</body>
</html>