<?php  
  session_start();
  require_once '../db.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Login | CarrnivalTrips </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card login-dark">
            <div>
              <div>
                <a class="logo" href="index.php">
                  <img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt="looginpage">
                  <img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage">
                  
                  <h2 class="pt-3">Telecaller Login</h2>
                </a>
              </div> 
              <div class="login-main"> 
                <form class="theme-form" method="POST" action="">
                  <h4>Sign in to account</h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" required="" placeholder="test@gmail.com" name="email">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" required="" placeholder="*********">
                      <div class="show-hide"><span class="show">                         </span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <!-- <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div><a class="link" href="forget-password.html">Forgot password?</a> -->
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit" name="admin_signin">Sign in</button>
                    </div>
                  </div>
                  <!-- <h6 class="text-muted mt-4 or">Or Sign in with</h6> -->
                  <!-- <div class="social mt-4">
                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login" target="_blank"><i class="txt-linkedin" data-feather="linkedin"></i> LinkedIn </a><a class="btn btn-light" href="https://twitter.com/login?lang=en" target="_blank"><i class="txt-twitter" data-feather="twitter"></i>twitter</a><a class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i class="txt-fb" data-feather="facebook"></i>facebook</a></div>
                  </div> -->
                  <!-- <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


      <?php

      // echo "php action";
        if(isset($_POST["admin_signin"]))
        {

            if(!empty($_POST['email']) && !empty($_POST['password']))
             {
                $email=$_POST['email'];
                $pass=$_POST['password'];
                // echo $user;
                // echo $pass;

                //$con=mysql_connect('localhost','root','') or die(mysql_error());
                //mysql_select_db('user_registration') or die("cannot select DB");
                //$con= mysqli_connect("localhost","root","","bikershoppe","3306") or die("Connection Failed");

                // echo "<br> before query";
                $query=$conn->query("SELECT * FROM carrnivaltrips_employee WHERE email='".$email."' AND password='".$pass."'  AND designation='Telecaller' ");
                $numrows=mysqli_num_rows($query);

                // echo "<br> after query";
                // echo $query;



                    if($numrows!=0)
                    {
                        while($row=mysqli_fetch_assoc($query))
                        {
                          $dbemail=$row['email'];
                          $dbpassword=$row['password'];
                          $name=$row['name'];
                        }

                        if($email == $dbemail && $pass == $dbpassword)
                        {
                         
                          $_SESSION['sess_admin_user']=$email;
                          $_SESSION['sess_name']=$name;

                          // echo $_SESSION['sess_admin_user'];

                          /* Redirect browser */
                          // header("Location: ../template/index.php");
                          echo "<script type='text/javascript'> window.location ='../index.php'; </script>";
                        }
                    } 
                    else 
                    {
                      echo "<script> alert('Invalid username or password!'); </script>";   
                    }

            }
            else 
            {
                echo "<script> alert('All fields are required!'); </script>";
            }
        }
        ?>


      <!-- latest jquery-->
      <script src="../assets/js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="../assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- calendar js-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="../assets/js/script.js"></script>
      <script src="../assets/js/script1.js"></script>
      <!-- Plugin used-->
    </div>
  </body>
</html>