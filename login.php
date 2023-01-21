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
                <form method="post" action="./backend/auth.php">
                    <fieldset>
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
                          <input type="email" class="form-control" name="user-mail" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="hello@example.com" required>
                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                          <input type="password" class="form-control" name="user-password" id="exampleInputPassword" placeholder="***********" required>
                        </div>
                    <a href="user-verify.php" class="text-white">Forgot Password?</a>
                    </fieldset>
                    <div class="d-flex justify-content-center mt-3">
                        <!-- <button type="button"  style="margin-top:18px ;">Log In</button> -->
                        <button type="submit" name="login" class="btn btn-secondary btn-sm">Log in</button>
                    </div>
            </div>
          </div>
          <!-- <div class="form-group"> -->
            <div class="d-flex justify-content-center mt-5">
                <a href="./registration.php" class="btn btn-outline-light btn-sm">New here?Register</a>
               
            </div>
        <!-- </div> -->
        </form>
    </div>

</body>
</html>