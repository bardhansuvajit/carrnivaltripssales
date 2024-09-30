<?php

  require_once('../db.php');

  if(isset($_POST['submit1']))
  {
      // Individual Registration
      $farmer_name = $_POST['farmer_name'];
      $ph_no = $_POST['ph_no'];
      $email = $_POST['email'];
      $pan_card = $_POST['pan_card'];
      $gst_number = $_POST['gst_number'];
      // $product_category = $_POST['product_category'];
      $address = $_POST['address'];
      $pincode = $_POST['pincode'];
      $country = $_POST['country'];
      $state = $_POST['state'];
      $district = $_POST['district'];
      $privacy_policy = $_POST['privacy_policy'];
      $password = $_POST['password'];

      
      // $fileName = $_FILES['image']['name'];
      // $fileTmp = $_FILES['image']['tmp_name'];

      if (!file_exists('farmer_ac_image')) {
          mkdir('farmer_ac_image');
      }


      $valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF");
      // for image 1
      if($_FILES["image"]["name"] != '')
      {
        $image=$_FILES["image"]["name"];
        $extension_1=pathinfo($image,PATHINFO_EXTENSION);


        if(!in_array($extension_1,$valid_extensions))
        {
          echo "<script>alert('Invalid format Image 1. Only jpg / jpeg/ png /gif format allowed');</script>";
        }
        else
        {
          $new_img1= rand().".".$extension_1;
          $path1= "farmer_ac_image/".$new_img1;
          if(move_uploaded_file($_FILES["image"]["tmp_name"],$path1))
          {



            $sql=mysqli_query($conn, "SELECT * FROM fishokart_farmer_ac WHERE ph_no ='".$ph_no."'");
            $numrows=mysqli_num_rows($sql);
            if($numrows==0)
            {
               // Query for data insertion
              $query = mysqli_query($conn, "INSERT INTO fishokart_farmer_ac (farmer_role, farmer_name, ph_no, email, pan_card, gst_number,  address, pincode, country, state, district, privacy_policy, image, password, status) VALUES ('individual', '$farmer_name', '$ph_no', '$email', '$pan_card', '$gst_number',  '$address', '$pincode', '$country', '$state', '$district', '$privacy_policy', '$new_img1', '$password', 'Pending')");
              if ($query) 
              {
                  echo "<script>alert('You have successfully inserted the data');</script>";
                  header("Location:index.php");
              } 
              else 
              {
                  echo "<script>alert('Something Went Wrong. Please try again');</script>";
              }

            } 
            else 
            {
              echo "<script>alert('The Seller already exists! Please try again with another.');</script>";
            }

              

          }
          else
          {
              echo "<script>alert('Failed to upload image');</script>";
          }



        }

      }

    
     
  }








  if(isset($_POST['submit2']))
  {
      // Company Registration
      $society_name = $_POST['society_name'];
      $farmer_name = $_POST['farmer_name'];

      $ph_no = $_POST['ph_no'];
      $email = $_POST['email'];
      $pan_card = $_POST['pan_card'];
      $gst_number = $_POST['gst_number'];
      // $website_link = $_POST['website_link'];
      // $product_category = $_POST['product_category'];
      $address = $_POST['address'];
      $pincode = $_POST['pincode'];
      $country = $_POST['country'];
      $state = $_POST['state'];
      $district = $_POST['district'];
      $privacy_policy = $_POST['privacy_policy'];
      $password = $_POST['password'];

      
      // $fileName = $_FILES['image']['name'];
      // $fileTmp = $_FILES['image']['tmp_name'];

      if (!file_exists('farmer_ac_image')) {
          mkdir('farmer_ac_image');
      }


      $valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF");
      // for image 1
      if($_FILES["image"]["name"] != '')
      {
        $image=$_FILES["image"]["name"];
        $extension_1=pathinfo($image,PATHINFO_EXTENSION);


        if(!in_array($extension_1,$valid_extensions))
        {
          echo "<script>alert('Invalid format Image 1. Only jpg / jpeg/ png /gif format allowed');</script>";
        }
        else
        {
          $new_img1= rand().".".$extension_1;
          $path1= "farmer_ac_image/".$new_img1;
          if(move_uploaded_file($_FILES["image"]["tmp_name"],$path1))
          {


            $sql=mysqli_query($conn, "SELECT * FROM fishokart_farmer_ac WHERE ph_no ='".$ph_no."'");
            $numrows=mysqli_num_rows($sql);
            if($numrows==0)
            {
               // Query for data insertion
              $query = mysqli_query($conn, "INSERT INTO fishokart_farmer_ac (farmer_role, society_name, farmer_name, ph_no, email, pan_card, gst_number,  address, pincode, country, state, district, privacy_policy, image, password, status) VALUES ('society', '$society_name', '$farmer_name', '$ph_no', '$email', '$pan_card', '$gst_number',  '$address', '$pincode', '$country', '$state', '$district', '$privacy_policy', '$new_img1', '$password', 'Pending')");
              if ($query) {
                  echo "<script>alert('You have successfully inserted the data');</script>";
                  header("Location:index.php");
              } else {
                  echo "<script>alert('Something Went Wrong. Please try again');</script>";
              }

            } 
            else 
            {
              echo "<script>alert('The Seller already exists! Please try again with another.');</script>";
            }




          }
          else
          {
              echo "<script>alert('Failed to upload image');</script>";
          }



        }

      }


  }




?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fishokart | Registration</title>

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

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="index.php" class="h1"><b>Fishokart</b>Farmer</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Register as a Farmer Membership</p>



        <div class="row">
                <div class="input-field sel-wrap col s8 ">
                  <select id="reg" class="validate">
                    <option value="SR" selected>Society Registration</option>
                    <option value="IR">Individual Registration</option>
                  </select>
                </div>
        </div>


        


        <div id="IR_drop">
          <form method="POST" enctype="multipart/form-data">
            <h5 class="title">Individual Registration</h5>

            

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Farmer Name" name="farmer_name" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="Number" class="form-control" placeholder="Phone Number" name="ph_no" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" name="email" >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>



            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Pan Card Number" name="pan_card">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="GST Number" name="gst_number">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Business Address" name="address">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>



            <div class="input-group mb-3">
              <input type="Number" class="form-control" placeholder="Pincode" name="pincode"  required  maxlength="6"  oninput="handlePincodeInput()" id="pincode">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Country" name="country" id="country">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="State" name="state" id="state">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="District" name="district" id="district" >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="file"  id="image" class="validate" name="image" required >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
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

            <!-- <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Retype password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div> -->

            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="privacy_policy" name="privacy_policy"  required>
                  <label for="privacy_policy">
                    I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block" name="submit1">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>



        <div id="SR_drop">
          <form method="POST" enctype="multipart/form-data">
            <h5 class="title">Society Registration</h5>

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Society name" name="society_name" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Farmer Name" name="farmer_name" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="Number" class="form-control" placeholder="Phone Number" name="ph_no" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" name="email" >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>



            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Pan Card Number" name="pan_card">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="GST Number" name="gst_number">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Business Address" name="address">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>



            <div class="input-group mb-3">
              <input type="Number" class="form-control" placeholder="Pincode" name="pincode"  required  maxlength="6"  oninput="handlePincode_1_Input()" id="pincode_1">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Country" name="country" id="country_1">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="State" name="state" id="state_1">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="District" name="district" id="district_1" >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>


            <div class="input-group mb-3">
              <input type="file"  id="image_1" class="validate" name="image" required >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
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

            <!-- <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Retype password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div> -->

            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="privacy_policy_1" name="privacy_policy"  required >
                  <label for="privacy_policy_1">
                    I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block" name="submit2">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
        </div>


        



        <!-- <div class="social-auth-links text-center">
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Sign up using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Sign up using Google+
          </a>
        </div> -->

        <a href="index.php" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>









  <script>
  document.getElementById('privacy_policy').addEventListener('change', function() {
      if (this.checked) {
          this.value = 'Agree';
      } else {
          this.value = '';
      }
  });
  </script>


  <script>
    document.getElementById('privacy_policy_1').addEventListener('change', function() {
        if (this.checked) {
            this.value = 'Agree';
        } else {
            this.value = '';
        }
    });
  </script>




  <script>
       
      $("#IR_drop").hide();

           $("#reg").change(function () {
            console.log($(this).val());

          if ($(this).val() == "SR"){ 
                $("#SR_drop").show();
                $("#IR_drop").hide();
          }      
         else { 
                $("#IR_drop").show(); 
                $("#SR_drop").hide(); 

      }




          

        });
           
  </script>




    <!-- pincode handle funtion -->
  <script type="text/javascript">
    // script.js

    function handlePincodeInput() {
      const pincodeInput = document.getElementById('pincode');
      const pincodeValue = pincodeInput.value.trim();

      if (pincodeValue.length === 6 && /^\d+$/.test(pincodeValue)) {
        fetchPincodeInfo(pincodeValue);
      } else {
        resetFields();
      }
    }

    function fetchPincodeInfo(pincode) {
      const apiUrl = `https://api.postalpincode.in/pincode/${pincode}`;

      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          const postOffice = data[0].PostOffice[0];

          if (postOffice) {
            document.getElementById('district').value = postOffice.District;
            document.getElementById('state').value = postOffice.State;
            document.getElementById('country').value = postOffice.Country;
          } else {
            resetFields();
            alert('Invalid Pincode. Please enter a valid pincode.');
          }
        })
        .catch(error => {
          console.error('Error fetching pincode information:', error);
          resetFields();
          alert('Error fetching pincode information. Please try again.');
        });
    }

    function resetFields() {
      document.getElementById('district').value = '';
      document.getElementById('state').value = '';
      document.getElementById('country').value = '';
    }
  </script>



<script type="text/javascript">
    // script.js

    function handlePincode_1_Input() {
      const pincodeInput = document.getElementById('pincode_1');
      const pincodeValue = pincodeInput.value.trim();

      if (pincodeValue.length === 6 && /^\d+$/.test(pincodeValue)) {
        fetchPincodeInfo_1(pincodeValue);
      } else {
        resetFields();
      }
    }

    function fetchPincodeInfo_1(pincode) {
      const apiUrl = `https://api.postalpincode.in/pincode/${pincode}`;

      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          const postOffice = data[0].PostOffice[0];

          if (postOffice) {
            document.getElementById('district_1').value = postOffice.District;
            document.getElementById('state_1').value = postOffice.State;
            document.getElementById('country_1').value = postOffice.Country;
          } else {
            resetFields();
            alert('Invalid Pincode. Please enter a valid pincode.');
          }
        })
        .catch(error => {
          console.error('Error fetching pincode information:', error);
          resetFields();
          alert('Error fetching pincode information. Please try again.');
        });
    }

    function resetFields() {
      document.getElementById('district_1').value = '';
      document.getElementById('state_1').value = '';
      document.getElementById('country_1').value = '';
    }
</script>












</body>

</html>