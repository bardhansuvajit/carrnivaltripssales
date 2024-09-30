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
  <link rel="shortcut icon" type="image/x-icon" href="../dist/img/logo1.png">

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
            <h1>Update Package</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Package</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>





    <!-- Main content -->
    <section class="content" >

    

      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Package</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php 

                if(isset($_GET['editid']))
                {
                  $id=$_GET['editid'];

                  $eid = $_GET['editid'];
                  
                  $row = mysqli_query($conn, "select * from carrrnivaltrips_package where id='$eid' ");
                  $data = $row->fetch_assoc();
                  
                  // echo '<pre>';
                  // print_r($data);
                  // echo '</pre>';

                }

               ?> 






              <form action="php_action/edit_package_info.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group mb-3 mt-4">
                    <label for=""   >Website Details</label><hr style="margin-top: 2px;">
                    <a href="slide2.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary m-2" value="Slide 2" name="edit_customer_info">Slide 2 <br>About Us</a> 

                    <a href="slide6.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary mr-2" value="Slide 6" name="edit_customer_info">Slide 6 <br> Payment Policy
                    </a> 



                    <a href="slide9.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary mr-2" value="Slide 6" name="edit_customer_info">Slide 9 <br> Connect With Us
                    </a> 
                    <a href="slide10.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary mr-2" value="Slide 6" name="edit_customer_info">Slide 10 <br> Review & Award
                    </a> 
                    <a href="slide11.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary mr-2" value="Slide 6" name="edit_customer_info">Slide 11 <br> Why Carrnival
                    </a> 


                    
                  </div>

                  

                  <div class="form-group mb-3">
                    <label for="" >Slide ( Set Pre-Loaded Package )</label><hr style="margin-top: 2px;">

                    <a href="slide1.php?id=<?php echo $data['id'] ?>"  type="button" class="btn btn-primary m-2" value="Slide 1" name="edit_customer_info">Slide 1 <br>Slider</a> 
                    

                    <!-- <a href="#" type="button" class="btn btn-primary m-2" value="Slide 3" name="edit_customer_info">Slide 3 <br>Sample Itinerary</a> -->

                    <a href="package_inclusion.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary m-2" value="Slide 3" name="edit_customer_info">Slide 3 <br>Package Inclusion</a>
                    <a href="package_exclusion.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary m-2" value="Slide 3" name="edit_customer_info">Slide 3 <br>Package Exclusion</a>


                    <a href="slide4.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary mr-2" value="Slide 4" name="edit_customer_info">Slide 4 <br>Activity Details</a> 

                    <a href="slide5.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary m-2" value="Slide 5" name="edit_customer_info">Slide 5 <br>Special Experiences</a> 
                    

                    
                    <a href="slide7.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary m-2" value="Slide 7" name="edit_customer_info">Slide 7 <br> Best Scenic Places</a>

                     <a href="slide8.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary m-2" value="Slide 4" name="edit_customer_info">Slide 8 <br>Adventure Activities</a> 



                   

                    
                  </div>





                  <div class="form-group mb-5 mt-4">
                    <label for=""   >Day Wise Itinerary</label><hr style="margin-top: 2px;">
                    <?php   

                        if($data['day'] > 0)
                        {
                          for ($i=1; $i <= $data['day'] ; $i++) { 
                         ?>    
                            <a href="day.php?id=<?php echo $data['id'];?>&day=<?php echo $i; ?>" type="button" class="btn btn-primary mr-2 mb-2" value="Slide 4" name="edit_customer_info">Day <?php echo $i; ?> </a> 
                        <?php 
                          }
                        }

                     ?>
                    

                  </div>



                  <div class="form-group">
                    <label for="package_name" >Package Name</label>
                    <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Enter First Name" value="<?php echo $data['package_name'] ?>" required>
                  </div>


                  <div class="form-group">
                    <label for="day" >No of Day</label>
                    <input type="text" class="form-control" id="day" name="day" placeholder="" value="<?php echo $data['day'] ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="night" >No of Night</label>
                    <input type="text" class="form-control" id="night" name="night" placeholder="" value="<?php echo $data['night'] ?>">
                  </div>


                   <div class="form-group mb-4">
                    <label for="package_img">Package Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="package_img" name="package_img" >
                        <label class="custom-file-label" for="package_img">Choose file</label>
                      </div>
                      
                    </div>

                     <img width="100" height="80" class="mt-3" id="disp_package_img" src="img/<?php echo $data['package_img'];?>">

                  </div>


                 

                  <div class="form-group">
                        <label for="package_status">Package Status</label>
                        <select class="form-control" id="package_status" name="package_status"> 
                          <option value="<?php echo $data['package_status'] ?>"><?php echo $data['package_status'] ?></option>                     
                          
                          <option value="Upcoming">Upcoming</option>
                          <option value="Active">Active</option>
                          <option value="Inactive">Inactive</option>



                            
                        </select>
                  </div> 





                </div>
                <!-- /.card-body -->
                  <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $data['id'] ?>">
                
                  <input type="hidden" class="form-control" id="img1" name="img1"  value="<?php echo $data['package_img'] ?>">
                  <!-- <input type="hidden" class="form-control" id="img2" name="img2"  value="<?php echo $data['Customer_img'] ?>"> -->
                  <!-- <input type="hidden" class="form-control" id="img3" name="img3"  value="<?php echo $data['img_seller_photo'] ?>"> -->
                  <!-- <input type="hidden" class="form-control" id="img4" name="img4"  value="<?php echo $data['img_agreement'] ?>"> -->


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Submit" name="edit_package_info">Update</button> 
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





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
<script>
var x = document.getElementById("demo");

function getLocation() {
     x.innerHTML = "Please Wait.. We are loading your location";
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
  


    document.getElementById("verify_location").value ="Latitude: " + position.coords.latitude + 
    " Longitude: " + position.coords.longitude; 



       
       
  
  
}
</script>


 


  


</body>
</html>


<?php 
}
 ?>