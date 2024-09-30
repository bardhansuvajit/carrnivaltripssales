
<?php


require_once('../db.php');
session_start();




if(isset($_POST["login"]))
{

  if(!empty($_POST['ph_no']) && !empty($_POST['password'])) 
  {
      $ph_no=$_POST['ph_no'];
      $password=$_POST['password'];



      // $query=$conn->query(" SELECT *  FROM carrnivaltrips_admin WHERE  ph_no='".$ph_no."' AND password='".$password."'");
      // $numrows=mysqli_num_rows($query);
      // if($numrows!=0)
      // {
      $query1=$conn->query(" SELECT * FROM carrnivaltrips_admin WHERE ph_no='".$ph_no."' AND password='".$password."' AND  status='Active' ");
        $numrows1=mysqli_num_rows($query1);
        if($numrows1!=0)
        {
          while($row=mysqli_fetch_assoc($query1))
          {
            $dbusername=$row['ph_no'];
            $dbpassword=$row['password'];
            $id=$row['id'];
            $name=$row['name'];
            
            //$name=$row['name'];
            //$address=$row['address'];
          }

          if($ph_no == $dbusername && $password == $dbpassword)
          {
            $_SESSION['sess_user_admin']=$ph_no;
            $_SESSION['id']=$id;
            $_SESSION['sess_admin_name']=$name;


           
            /* Redirect browser */
            header("Location:../index.php");
          }
           else 
          {
            echo '<script>alert("Invalid Phone Number or password!");</script>';
          }

          
        } 
        else 
        {
          echo '<script>alert("Tnvalid Phone Number or password!");</script>';
        }
  
      // } 
      // else 
      // {
      //   echo '<script>alert("Invalid Phone Number or password!");</script>';
      // }

  } 
  else 
  {
      echo '<script>alert("All fields are required!");</script>';
  }
}









?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CarrnivalTrips| CRM Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="index.php" class="h1"><b>CarrnivalTrips</b> Admin</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        






        <div id="">
          <form action="" method="post" >

            <!-- <h5>Verifier Login</h5> -->


            <div class="input-group mb-3">
              <input type="Number" class="form-control" placeholder="Phone Number" name="ph_no">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <!-- <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div> -->
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block" name="login">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
          
        </div>


       





        <!-- <div class="social-auth-links text-center mt-2 mb-3">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
          </a>
        </div> -->
        <!-- /.social-auth-links -->

        <!-- <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p> -->
        <p class="mb-0">
          <!-- <a href="farmer_registration.php" class="text-center">Register a new membership</a> -->
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>


   


</body>

</html>