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
            <h1>Update Package Slide 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Package Slide 2</li>
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
                <h3 class="card-title">Update Package Slide 2</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php 

                if(isset($_GET['id']))
                {
                  $id=$_GET['id'];

                  $eid = $_GET['id'];
                  $row = mysqli_query($conn, "select * from carrnivaltrips_sightseeing where id='$eid' ");

                  $data = $row->fetch_assoc();
                  
                  // echo '<pre>';
                  // print_r($data);
                  // echo '</pre>';

                }

                 $row_2 = mysqli_query($conn, "select * from carrnivaltrips_details where id='1' ");

                  $data_2 = $row_2->fetch_assoc();

            ?> 






              <form action="php_action/slide2.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">



                  <br>

                 

                  





                   <div class="form-group">
                    <label for="exp_details" >Slide2 Experience Description</label>
                    <textarea type="text" class="form-control" id="exp_details" name="exp_details" placeholder=""   value="<?php echo $data_2['exp_details'] ?>" maxlength="152" ><?php echo $data_2['exp_details'] ?>
                    </textarea>
                  </div>

                  <div class="form-group">
                    <label for="exp_media_link" >Experience Media Link</label>
                    <input type="text" class="form-control" id="exp_media_link" name="exp_media_link" placeholder=""  value="<?php echo $data_2['exp_media_link'] ?>"  >
                  </div>



                  <div class="form-group">
                    <label for="exp_p1_heading" >Point 1 Heading</label>
                    <input type="text" class="form-control" id="exp_p1_heading" name="exp_p1_heading" placeholder="" value="<?php echo $data_2['exp_p1_heading'] ?>" maxlength="38" >
                  </div>


                  <div class="form-group">
                    <label for="exp_p1_details" >Point 1 Details</label>
                    <input type="text" class="form-control" id="exp_p1_details" name="exp_p1_details" placeholder=""  value="<?php echo $data_2['exp_p1_details'] ?>"  maxlength="56" >
                  </div>



                  <div class="form-group">
                    <label for="exp_p2_heading" >Point 2 Heading</label>
                    <input type="text" class="form-control" id="exp_p2_heading" name="exp_p2_heading" placeholder="" value="<?php echo $data_2['exp_p2_heading'] ?>" maxlength="38" >
                  </div>


                  <div class="form-group">
                    <label for="exp_p2_details" >Point 2 Details</label>
                    <input type="text" class="form-control" id="exp_p2_details" name="exp_p2_details" placeholder=""  value="<?php echo $data_2['exp_p2_details'] ?>"  maxlength="56" >
                  </div>




                  <div class="form-group">
                    <label for="exp_p3_heading" >Point 3 Heading</label>
                    <input type="text" class="form-control" id="exp_p3_heading" name="exp_p3_heading" placeholder="" value="<?php echo $data_2['exp_p3_heading'] ?>" maxlength="38" >
                  </div>


                  <div class="form-group">
                    <label for="exp_p3_details" >Point 3 Details</label>
                    <input type="text" class="form-control" id="exp_p3_details" name="exp_p3_details" placeholder=""  value="<?php echo $data_2['exp_p3_details'] ?>"  maxlength="56" >
                  </div>

                  





                    <div class="form-group">
                    <label for="exp_p4_heading" >Point 4 Heading</label>
                    <input type="text" class="form-control" id="exp_p4_heading" name="exp_p4_heading" placeholder="" value="<?php echo $data_2['exp_p4_heading'] ?>" maxlength="38" >
                  </div>


                  <div class="form-group">
                    <label for="exp_p4_details" >Point 4 Details</label>
                    <input type="text" class="form-control" id="exp_p4_details" name="exp_p4_details" placeholder=""  value="<?php echo $data_2['exp_p4_details'] ?>"  maxlength="56" >
                  </div>



                  <div class="form-group">
                    <label for="exp_p5_heading" >Point 5 Heading</label>
                    <input type="text" class="form-control" id="exp_p5_heading" name="exp_p5_heading" placeholder="" value="<?php echo $data_2['exp_p5_heading'] ?>" maxlength="38" >
                  </div>


                  <div class="form-group">
                    <label for="exp_p5_details" >Point 5 Details</label>
                    <input type="text" class="form-control" id="exp_p5_details" name="exp_p5_details" placeholder=""  value="<?php echo $data_2['exp_p5_details'] ?>"  maxlength="56" >
                  </div>




                  <div class="form-group">
                    <label for="exp_p6_heading" >Point 6 Heading</label>
                    <input type="text" class="form-control" id="exp_p6_heading" name="exp_p6_heading" placeholder="" value="<?php echo $data_2['exp_p6_heading'] ?>" maxlength="38" >
                  </div>


                  <div class="form-group">
                    <label for="exp_p6_details" >Point 6 Details</label>
                    <input type="text" class="form-control" id="exp_p6_details" name="exp_p6_details" placeholder=""  value="<?php echo $data_2['exp_p6_details'] ?>"  maxlength="56" >
                  </div>










                </div>
                <!-- /.card-body -->
                  <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $data_2['id'] ?>">
                  <input type="hidden" class="form-control" id="package_id" name="package_id"  value="<?php echo $data['id'] ?>">

                

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Submit" name="slide2_update">Update</button> 
                </div>
              </form>




              <div class="card-body mt-3">
                        <div class="form-group mb-3 mt-2">
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
                  </div>



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
                 $('#disp_s1_img').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#s1_img").change(function() {
           display1(this);
        });

        function display2(input) {
           if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(event) {
                 $('#disp_s2_img').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#s2_img").change(function() {
           display2(this);
        });

        function display3(input) {
           if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(event) {
                 $('#disp_s3_img').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#s3_img").change(function() {
           display3(this);
        });

    </script>

 


  


</body>
</html>


<?php 
}
 ?>