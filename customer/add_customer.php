<?php 


require_once('../db.php');
session_start();


 ?>


<?php 
  if(!isset($_SESSION["sess_user_admin"]))
  {
    header("location:login/index.php");
  } 
  else 
  {
  // echo $_SESSION["sess_user_admin"];
  $ph_no=$_SESSION["sess_user_admin"];
  

  
  $query=$conn->query("SELECT * FROM carrnivaltrips_admin WHERE ph_no='".$ph_no."'" )  or die("query Failed");

  $data=$query->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>AdminLTE 3 | Blank Page</title> -->
  <title>CarrnivalTrips |  Admin</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="dist/img/logo1.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <?php 

      include_once '../sementic_element/navbar.php';

     ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php 

    include_once '../sementic_element/aside.php';
   ?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Add Customer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>





    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Customer</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="php_action/add_customer_info.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <label for="FirstName" >First Name</label>
                    <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="Enter First Name" required>
                  </div>


                  <div class="form-group">
                    <label for="LastName" >Last Name</label>
                    <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Enter Last Name" >
                  </div>



                  
                  <div class="form-group">
                    <label for="Phone">Phone</label>
                    <input type="number" class="form-control" id="Phone" name="Phone" placeholder="Phone" required> 
                  </div>


                   <div class="form-group">
                    <label for="Email" >Email</label>
                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter Email " >
                  </div>


                  <div class="form-group">
                    <label for="DateOfBirth" >Date Of Birth</label>
                    <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth" placeholder="Select Date Of Birth" >
                  </div>



                  <div class="form-group">
                    <label for="Address">Address </label>
                    <textarea type="text" class="form-control" id="Address" name="Address" placeholder="Enter Address" ></textarea>
                  </div>




                  <div class="form-group">
                    <label for="Pincode">ZipCode</label>
                     <input type="Number" class="form-control" placeholder="Pincode" name="ZipCode"  required  maxlength="6"  oninput="handlePincodeInput()" id="pincode">
                    <!-- <input type="number" class="form-control" id="ZipCode" name="ZipCode" placeholder="ZipCode" required>  -->
                  </div>



                  <div class="form-group">
                    <label for="Country" >Country </label>
                    <input type="text" class="form-control" id="Country" name="Country" placeholder="Country " >
                  </div>

                  <div class="form-group">
                    <label for="State" >State </label>
                    <input type="text" class="form-control" id="State" name="State" placeholder="State" >
                  </div>

                  <div class="form-group">
                    <label for="District" >District </label>
                    <input type="text" class="form-control" id="District" name="District" placeholder="District " >
                  </div>



                  <div class="form-group">
                    <label for="Document_number" >Document Number </label>
                    <input type="text" class="form-control" id="Document_number" name="Document_number" placeholder="Enter Document_number " >
                  </div>






                






                   

                


                  <div class="form-group">
                    <label for="image1">Document Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image1" name="Document_img" required>
                        <label class="custom-file-label" for="image1">Choose file</label>
                      </div>
                      
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="image2">Customer Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image2" name="Customer_img" required>
                        <label class="custom-file-label" for="image2">Choose file</label>
                      </div>
                      
                    </div>
                  </div>

                 

                


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Submit" name="add_customer_info">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
   


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



   <!-- footer -->
    <?php 

      include_once '../sementic_element/footer.php';

     ?>
  <!-- /.footer -->




  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->

<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
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
            document.getElementById('District').value = postOffice.District;
            document.getElementById('State').value = postOffice.State;
            document.getElementById('Country').value = postOffice.Country;
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
      document.getElementById('District').value = '';
      document.getElementById('State').value = '';
      document.getElementById('Country').value = '';
    }
  </script>


</body>
</html>

<?php
 } 
 ?>
