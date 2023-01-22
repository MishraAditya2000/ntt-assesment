<?php
include('./backend/alert.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | NTT-Laundry Management</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <div class="content ">
        <div class="card text-white bg-primary mb-3" >
            <div class="card-header text-center"><h3 class="h3">Register</h3></div>
            <div class="card-body">
                <form method="post" action="./backend/signup.php">
                    <fieldset>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                  <label for="exampleInputEmail1" class="form-label mt-4">Name</label>
                                  <input type="text" class="form-control" id="exampleInputName" name="user-name" aria-describedby="emailHelp" placeholder="Jhon Hoe" required>
                                  
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail" name="user-mail" aria-describedby="emailHelp" placeholder="jhonhoe@gmail.com" required>
                                  </div>
                            </div>
                        </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label mt-4">Mobile No:</label>
                            <input type="text" class="form-control" id="exampleInputMob" name="user-mob" aria-describedby="emailHelp" placeholder="0836 426 6262" required>
                            
                          </div>
                          <div class="form-group has-success">
                            <label class="form-label mt-4" for="inputValid">Password</label>
                            <input type="password" onkeyup="regex()" class="form-control" id="exampleInputPassword" name="user-password" placeholder="*********">
                            <div class="feedback" id="feedback"></div>
                        </div>

                          <div class="form-group">
                            <label for="exampleTextarea" class="form-label mt-4">Address</label>
                            <textarea required class="form-control" placeholder="	1039/A, Lakshmi Narasimha Complex,2nd Main Road,Vijayanagar,Bangalore, PIN-560040" id="exampleTextarea" rows="2" name="user-address" spellcheck="false"></textarea>
                          </div>
                    </fieldset>
                    <div class="d-flex justify-content-center">
                        <button type="submit" id="sign-up" class="btn btn-secondary btn-sm disabled" name="signup" style="margin-top:18px ;">Sign Up</button>
                    </div>

            </div>
          </div>
          <div class="form-group">
            <div class="row">
                
              
            </div>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <!-- <a href="./registration.html" class="btn btn-outline-light btn-sm">New here?Register</a> -->
            <a href="./login.php" class="btn btn-outline-light btn-sm">Have an Account?Log In</a>
           
        </div>
        </form>
    </div>
    <script type="text/javascript">
        function regex(){
            var pw=document.getElementById('exampleInputPassword').value;
            console.log(pw);
            if(pw.length>=8){
                document.getElementById('exampleInputPassword').className="form-control is-valid";
                document.getElementById('feedback').className="valid-feedback";
                document.getElementById('feedback').innerText="";
                document.getElementById('sign-up').className="btn btn-secondary btn-sm";

              }
              else{
                document.getElementById('exampleInputPassword').className="form-control is-invalid";
                document.getElementById('feedback').className="invalid-feedback";
                document.getElementById('feedback').innerText="Password should be minimum 8 characters";
               
               

            }
            
        }
    </script>
</body>
</html>