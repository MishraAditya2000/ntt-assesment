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
            <div class="card-header text-center"><h3 class="h4">Update Password</h3></div>
            <div class="card-body">
                <form method="post" action="./backend/update-password.php">
                    <fieldset>
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="form-label mt-4">New Password</label>
                          <input type="password" class="form-control" name="user-password" onkeyup="match()" id="exampleInputPassword" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group has-success">
                            <label class="form-label mt-4" for="inputValid">Confirm Password</label>
                            <input type="password" name="confirm-password" onkeyup="match()" class="form-control" id="exampleInputConfirm">
                            <div class="feedback" id="feedback"></div>
                        </div>
                    </fieldset>
                    <div class="d-flex justify-content-center mt-3">
                        <!-- <button type="button"  style="margin-top:18px ;">Log In</button> -->
                        <button type="submit" id="update-password" name="update" class="btn btn-secondary btn-sm">Update Password</button>
                    </div>
            </div>
          </div>
        </form>
    </div>
    <script type="text/javascript">
        function match(){
            var pw=document.getElementById('exampleInputPassword').value;
            var confirmPassword=document.getElementById('exampleInputConfirm').value;
            if(pw.length==0 && confirmPassword==0 ){
                document.getElementById('feedback').innerText="";
                document.getElementById('exampleInputConfirm').className="form-control";

            }
            else if(confirmPassword.length==0 && pw.length>=0 ){
                document.getElementById('feedback').innerText="Confirm your password here";
            }
            else if(pw===confirmPassword){
                document.getElementById('exampleInputConfirm').className="form-control is-valid";
                document.getElementById('feedback').className="valid-feedback";
                document.getElementById('feedback').innerText="Both Password Matched";
                document.getElementById('update-password').className="btn btn-secondary btn-sm";
            }
            else {
                document.getElementById('exampleInputConfirm').className="form-control is-invalid";
                document.getElementById('feedback').className="invalid-feedback";
                document.getElementById('feedback').innerText="Password in not Matching";
                document.getElementById('update-password').className="btn btn-secondary btn-sm disabled";
            }
            
        }
    </script>
</body>
</html>