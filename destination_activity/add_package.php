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
            <h1>Add Package</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Add Package</li>
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
                <h3 class="card-title">Add Package</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="php_action/add_package_info.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <label for="package_name" >Package Name</label>
                    <input type="text" class="form-control" id="package_name" name="package_name" placeholder="" required>
                  </div>

                  <div class="form-group">
                    <label for="day" >No of Day</label>
                    <input type="text" class="form-control" id="day" name="day" placeholder="" required>
                  </div>

                  <div class="form-group">
                    <label for="night" >No of Night</label>
                    <input type="text" class="form-control" id="night" name="night" placeholder="" >
                  </div>



                  <div class="form-group mb-4">
                    <label for="package_img">Package Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="package_img" name="package_img" >
                        <label class="custom-file-label" for="package_img">Choose file</label>
                      </div>
                      
                    </div>

                     <img width="100" height="80" class="mt-3" id="disp_package_img" >

                  </div>



                  <div class="form-group">
                        <label for="package_status">Package Status</label>
                        <select class="form-control" id="package_status" name="package_status"> 
                          
                          <option value="Upcoming">Upcoming</option>
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>



                            
                        </select>
                  </div> 



                  <!-- <div class="form-group">
                        <label for="s1_text1" >Slider1 Text1</label>
                        <input type="text" class="form-control" id="s1_text1" name="s1_text1" placeholder="" >
                      </div>

                      <div class="form-group">
                        <label for="s1_anim_text2" >Slider1 Animation Text2</label>
                        <input type="text" class="form-control" id="s1_anim_text2" name="s1_anim_text2" placeholder="" >
                      </div>

                      <div class="form-group">
                        <label for="s1_text3" >Slider1 Text3</label>
                        <input type="text" class="form-control" id="s1_text3" name="s1_text3" placeholder="" >
                      </div>


                      <div class="form-group">
                        <label for="s1_squre_box_text" >Slider1 Squre Box Text</label>
                        <input type="text" class="form-control" id="s1_squre_box_text" name="s1_squre_box_text" placeholder="" >
                      </div>

                      <div class="form-group">
                        <label for="s1_btn1" >Slider1 Button 1</label>
                        <input type="text" class="form-control" id="s1_btn1" name="s1_btn1" placeholder="" >
                      </div>

                      <div class="form-group">
                        <label for="s1_btn2" >Slider1 Button 2</label>
                        <input type="text" class="form-control" id="s1_btn2" name="s1_btn2" placeholder="" >
                      </div>




                      <div class="form-group">
                        <label for="s1_img">Slider1 Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="s1_img" name="s1_img" required>
                            <label class="custom-file-label" for="image1">Choose file</label>
                          </div>
                          
                        </div>
                      </div>

                      <br><br>





                      <div class="form-group">
                        <label for="s2_text1" >Slider2 Text1</label>
                        <input type="text" class="form-control" id="s1_text2" name="s2_text1" placeholder="" >
                      </div>

                      <div class="form-group">
                        <label for="s1_anim_text2" >Slider2 Animation Text2</label>
                        <input type="text" class="form-control" id="s2_anim_text2" name="s2_anim_text2" placeholder="" >
                      </div>

                      <div class="form-group">
                        <label for="s2_text3" >Slider2 Text3</label>
                        <input type="text" class="form-control" id="s2_text3" name="s2_text3" placeholder="" >
                      </div>


                      <div class="form-group">
                        <label for="s2_squre_box_text" >Slider2 Squre Box Text</label>
                        <input type="text" class="form-control" id="s2_squre_box_text" name="s2_squre_box_text" placeholder="" >
                      </div>

                      <div class="form-group">
                        <label for="s2_btn1" >Slider2 Button 1</label>
                        <input type="text" class="form-control" id="s2_btn1" name="s2_btn1" placeholder="" >
                      </div>

                      <div class="form-group">
                        <label for="s2_btn2" >Slider2 Button 2</label>
                        <input type="text" class="form-control" id="s2_btn2" name="s2_btn2" placeholder="" >
                      </div>




                      <div class="form-group">
                        <label for="s2_img">Slider2 Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="s2_img" name="s2_img" required>
                            <label class="custom-file-label" for="s2_img">Choose file</label>
                          </div>
                          
                        </div>
                      </div>

                      <br><br>




                       <div class="form-group">
                        <label for="s3_text1" >Slider3 Text1</label>
                        <input type="text" class="form-control" id="s1_text2" name="s3_text1" placeholder="" >
                      </div>

                      <div class="form-group">
                        <label for="s3_anim_text2" >Slider3 Animation Text2</label>
                        <input type="text" class="form-control" id="s3_anim_text2" name="s3_anim_text2" placeholder="" >
                      </div>

                      <div class="form-group">
                        <label for="s3_text3" >Slider3 Text3</label>
                        <input type="text" class="form-control" id="s3_text3" name="s3_text3" placeholder="" >
                      </div>


                      <div class="form-group">
                        <label for="s3_squre_box_text" >Slider3 Squre Box Text</label>
                        <input type="text" class="form-control" id="s3_squre_box_text" name="s3_squre_box_text" placeholder="" >
                      </div>

                      <div class="form-group">
                        <label for="s3_btn1" >Slider3 Button 1</label>
                        <input type="text" class="form-control" id="s3_btn1" name="s3_btn1" placeholder="" >
                      </div>

                      <div class="form-group">
                        <label for="s3_btn2" >Slider2 Button 2</label>
                        <input type="text" class="form-control" id="s3_btn2" name="s3_btn2" placeholder="" >
                      </div>




                      <div class="form-group">
                        <label for="s3_img">Slider3 Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="s3_img" name="s3_img" required>
                            <label class="custom-file-label" for="s3_img">Choose file</label>
                          </div>
                          
                        </div>
                  </div> -->




                  








                  <!-- <div class="form-group">
                    <label for="image2">Customer Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image2" name="Customer_img" required>
                        <label class="custom-file-label" for="image2">Choose file</label>
                      </div>
                      
                    </div>
                  </div> -->

                 

                


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Submit" name="add_package_info">Submit</button>
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
                 $('#disp_package_img').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#package_img").change(function() {
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
