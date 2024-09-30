<?php 


include('../db.php');
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
            <h1>Update Employee</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Employee</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <?php 

                if(isset($_GET['editid']))
                {
                  $id=$_GET['editid'];

                  $eid = $_GET['editid'];
                  
                  $row_1 = mysqli_query($conn, "select * from carrnivaltrips_employee where id='$eid' ");
                  $data_1 = $row_1->fetch_assoc();
                  
                  // echo '<pre>';
                  // print_r($data);
                  // echo '</pre>';

                }

    ?> 





    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Employee</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="php_action/edit_employee.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <label for="Employee_name" >Employee Name</label>
                    <input type="text" class="form-control" id="Employee_name" name="name" placeholder="" value="<?php echo $data_1['name'] ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="phone" >Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="" value="<?php echo $data_1['phone'] ?>" >
                  </div>

                  <div class="form-group">
                    <label for="email" >Email Id &nbsp;(Use Also as Login Id)*</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="" value="<?php echo $data_1['email'] ?>" required>
                  </div>


                  <div class="form-group">
                    <label for="designation" >Designation</label>
                    <!-- <input type="text" class="form-control" id="designation" name="designation" placeholder="" value="<?php // echo $data_1['designation'] ?>" required> -->

                        <select class="form-control" id="designation" name="designation">  
                          <option value="<?php echo $data_1['designation'] ?>"><?php echo $data_1['designation'] ?></option>   
                          <!-- <option value="">Select</option> -->
                          <option value="Telecaller">Telecaller</option>
                          <option value="Manager">Manager</option>                            
                        </select>


                  </div>


                  <div class="form-group">
                    <label for="password" >Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="" value="<?php echo $data_1['password'] ?>" required>
                  </div>



                  <div class="form-group mb-4">
                    <label for="img1">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="img1" name="img1" >
                        <label class="custom-file-label" for="img1">Choose file</label>
                      </div>
                      
                    </div>

                     <img width="100" height="80" class="mt-3" id="disp_img1" src="img/<?php echo $data_1['img1'];?>" >

                  </div>



                  <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">  
                          <option value="<?php echo $data_1['status'] ?>"><?php echo $data_1['status'] ?></option>   
                          <!-- <option value="">Select</option> -->
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>                            
                        </select>
                  </div> 



                             
                  <input type="hidden" name="id" value="<?php echo $data_1['id']; ?>">
                  <input type="hidden" name="img_1" value="<?php echo $data_1['img1']; ?>">

                


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Update" name="edit_employee">Update</button>
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


<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>

          function display1(input) {
           if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(event) {
                 $('#disp_img1').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#img1").change(function() {
           display1(this);
        });

        // function display2(input) {
        //    if (input.files && input.files[0]) {
        //       var reader = new FileReader();
        //       reader.onload = function(event) {
        //          $('#disp_s2_img').attr('src', event.target.result);
        //       }
        //       reader.readAsDataURL(input.files[0]);
        //    }
        // }

        // $("#s2_img").change(function() {
        //    display2(this);
        // });

        // function display3(input) {
        //    if (input.files && input.files[0]) {
        //       var reader = new FileReader();
        //       reader.onload = function(event) {
        //          $('#disp_s3_img').attr('src', event.target.result);
        //       }
        //       reader.readAsDataURL(input.files[0]);
        //    }
        // }

        // $("#s3_img").change(function() {
        //    display3(this);
        // });

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
