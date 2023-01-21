<?php
include('./backend/alert.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | NTT-Laundry Management</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body >
    <div class="content">
        <div class="card text-white bg-primary mb-3" style="max-width: 35rem;">
            <div class="card-header text-center"><h3 class="h3">Log In</h3></div>
            <div class="card-body">
                <form method="post" action="./backend/update-password.php">
                    <fieldset>
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="form-label mt-4">New Password</label>
                          <input type="password" class="form-control" name="user-password" id="exampleInputPassword" aria-describedby="emailHelp" required>
                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" class="form-label mt-4">Confirm Password</label>
                          <input type="password" class="form-control" onchange="match()" name="confirm-password" id="exampleInputConfirm" required>
                        </div>

                    </fieldset>
                    <div class="d-flex justify-content-center mt-3">
                        <!-- <button type="button"  style="margin-top:18px ;">Log In</button> -->
                        <button type="submit" name="update" class="btn btn-secondary btn-sm">Update Password</button>
                    </div>
            </div>
          </div>
        </form>
    </div>
    <script type="text/javascript">
        function match(){
            var pw=document.getElementById('exampleInputPassword').value;
            var confirmPassword=document.getElementById('exampleInputConfirm').value;
            if(pw===confirmPassword){
                console.log(pw,confirmPassword);
                alert("Both Password Matching");
            
            }
            else{
                console.log(pw,confirmPassword);
                alert("Password Doesn't Match");
            }
            
        }
    </script>
</body>
</html>