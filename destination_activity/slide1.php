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
            <h1>Update Package Slide 1</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Package Slide 1</li>
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
                <h3 class="card-title">Update Package Slide 1</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php 

                if(isset($_GET['id']))
                {
                  $id=$_GET['id'];

                  $eid = $_GET['id'];

                  $row_1 = mysqli_query($conn, "select * from carrnivaltrips_sightseeing where id='$eid' ");
                  $data_1 = $row_1->fetch_assoc();
                  $destination_1=$data_1['destination'];

                  // echo $destination_1;


                  $row = mysqli_query($conn, "select * from carrrnivaltrips_destination_wise_silde1 where destination='$destination_1' ");
                  $num_rows = mysqli_num_rows($row); // Get the number of rows
                   $data = $row->fetch_assoc();
                  
                  // echo '<pre>';
                  // print_r($data);
                  // echo '</pre>';

                }

               ?> 




              <?php 
                if($num_rows > 0)
                {
               ?>

                  <form action="php_action/slide1.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">


                      

                      



                      <div class="form-group">
                        <label for="destination" >Destination Name</label>
                        <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter Destination Name" value="<?php echo $data['destination'] ?>"  readonly>
                      </div>


                    

                      <br>

                     

                      





                       <div class="form-group">
                        <label for="s1_text1" >Slider1 Text1</label>
                        <input type="text" class="form-control" id="s1_text1" name="s1_text1" placeholder=""   value="<?php echo $data['s1_text1'] ?>" maxlength="33" >
                      </div>

                      <div class="form-group">
                        <label for="s1_anim_text2" >Slider1 Animation Text2</label>
                        <input type="text" class="form-control" id="s1_anim_text2" name="s1_anim_text2" placeholder=""  value="<?php echo $data['s1_anim_text2'] ?>" maxlength="30" >
                      </div>

                      <div class="form-group">
                        <label for="s1_text3" >Slider1 Text3</label>
                        <input type="text" class="form-control" id="s1_text3" name="s1_text3" placeholder="" value="<?php echo $data['s1_text3'] ?>" maxlength="40">
                      </div>


                      <div class="form-group">
                        <label for="s1_squre_box_text" >Slider1 Squre Box Text</label>
                        <input type="text" class="form-control" id="s1_squre_box_text" name="s1_squre_box_text" placeholder=""  value="<?php echo $data['s1_squre_box_text'] ?>" maxlength="10" >
                      </div>

                      <div class="form-group">
                        <label for="s1_btn1" >Slider1 Button 1</label>
                        <input type="text" class="form-control" id="s1_btn1" name="s1_btn1" placeholder=""  value="<?php echo $data['s1_btn1'] ?>" maxlength="20" >
                      </div>

                      <div class="form-group">
                        <label for="s1_btn2" >Slider1 Button 2</label>
                        <input type="text" class="form-control" id="s1_btn2" name="s1_btn2" placeholder=""  value="<?php echo $data['s1_btn2'] ?>" maxlength="20" >
                      </div>




                      <div class="form-group mb-4">
                        <label for="s1_img">Slider1 Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="s1_img" name="s1_img" >
                            <label class="custom-file-label" for="image1">Choose file</label>
                          </div>
                          
                        </div>

                         <img width="100" height="80" class="mt-3" id="disp_s1_img" src="img/<?php echo $data['s1_img'];?>">

                      </div>

                      





                      <div class="form-group">
                        <label for="s2_text1" >Slider2 Text1</label>
                        <input type="text" class="form-control" id="s1_text2" name="s2_text1" placeholder=""   value="<?php echo $data['s2_text1'] ?>" maxlength="33" >
                      </div>

                      <div class="form-group">
                        <label for="s1_anim_text2" >Slider2 Animation Text2</label>
                        <input type="text" class="form-control" id="s2_anim_text2" name="s2_anim_text2" placeholder=""  value="<?php echo $data['s2_anim_text2'] ?>" maxlength="30"  >
                      </div>

                      <div class="form-group">
                        <label for="s2_text3" >Slider2 Text3</label>
                        <input type="text" class="form-control" id="s2_text3" name="s2_text3" placeholder=""  value="<?php echo $data['s2_text3'] ?>" maxlength="40" >
                      </div>


                      <div class="form-group">
                        <label for="s2_squre_box_text" >Slider2 Squre Box Text</label>
                        <input type="text" class="form-control" id="s2_squre_box_text" name="s2_squre_box_text" placeholder=""  value="<?php echo $data['s2_squre_box_text'] ?>"  maxlength="10" >
                      </div>

                      <div class="form-group">
                        <label for="s2_btn1" >Slider2 Button 1</label>
                        <input type="text" class="form-control" id="s2_btn1" name="s2_btn1" placeholder=""  value="<?php echo $data['s2_btn1'] ?>" maxlength="20" >
                      </div>

                      <div class="form-group">
                        <label for="s2_btn2" >Slider2 Button 2</label>
                        <input type="text" class="form-control" id="s2_btn2" name="s2_btn2" placeholder=""  value="<?php echo $data['s2_btn2'] ?>" maxlength="20" >
                      </div>




                      <div class="form-group mb-4">
                        <label for="s2_img">Slider2 Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="s2_img" name="s2_img" >
                            <label class="custom-file-label" for="s2_img">Choose file</label>
                          </div>
                          
                        </div>
                        <img width="100" height="80" class="mt-3" id="disp_s2_img" src="img/<?php echo $data['s2_img'];?>">
                      </div>

                    



                       <div class="form-group">
                        <label for="s3_text1" >Slider3 Text1</label>
                        <input type="text" class="form-control" id="s1_text2" name="s3_text1" placeholder=""  value="<?php echo $data['s3_text1'] ?>" maxlength="33" >
                      </div>

                      <div class="form-group">
                        <label for="s3_anim_text2" >Slider3 Animation Text2</label>
                        <input type="text" class="form-control" id="s3_anim_text2" name="s3_anim_text2" placeholder=""  value="<?php echo $data['s3_anim_text2'] ?>" maxlength="30" >
                      </div>

                      <div class="form-group">
                        <label for="s3_text3" >Slider3 Text3</label>
                        <input type="text" class="form-control" id="s3_text3" name="s3_text3" placeholder=""  value="<?php echo $data['s3_text3'] ?>"  maxlength="40">
                      </div>


                      <div class="form-group">
                        <label for="s3_squre_box_text" >Slider3 Squre Box Text</label>
                        <input type="text" class="form-control" id="s3_squre_box_text" name="s3_squre_box_text" placeholder=""  value="<?php echo $data['s3_squre_box_text'] ?>"  maxlength="10" >
                      </div>

                      <div class="form-group">
                        <label for="s3_btn1" >Slider3 Button 1</label>
                        <input type="text" class="form-control" id="s3_btn1" name="s3_btn1" placeholder=""  value="<?php echo $data['s3_btn1'] ?>" maxlength="20"  >
                      </div>

                      <div class="form-group">
                        <label for="s3_btn2" >Slider2 Button 2</label>
                        <input type="text" class="form-control" id="s3_btn2" name="s3_btn2" placeholder=""  value="<?php echo $data['s3_btn2'] ?>" maxlength="20"  >
                      </div>




                      <div class="form-group mb-4">
                        <label for="s3_img">Slider3 Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="s3_img" name="s3_img" >
                            <label class="custom-file-label" for="s3_img">Choose file</label>
                          </div>
                          
                        </div>

                        <img width="100" height="80" class="mt-3" id="disp_s3_img" src="img/<?php echo $data['s3_img'];?>">
                      </div>









                    </div>
                    <!-- /.card-body -->
                      <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $data['id'] ?>">
                      <input type="hidden" class="form-control" id="package_id" name="package_id"  value="<?php echo $data_1['id'] ?>">
                    
                      <input type="hidden" class="form-control" id="img1" name="img1"  value="<?php echo $data['s1_img'] ?>">
                      <input type="hidden" class="form-control" id="img2" name="img2"  value="<?php echo $data['s2_img'] ?>">
                      <input type="hidden" class="form-control" id="img3" name="img3"  value="<?php echo $data['s3_img'] ?>">
                      <!-- <input type="hidden" class="form-control" id="img4" name="img4"  value="<?php echo $data['img_agreement'] ?>"> -->


                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" value="Submit" name="edit_package_info_slide1">Update</button> 
                    </div>
                  </form>
                <?php }else{ ?>

                  <form action="php_action/add_slide1.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">


                      

                      



                      <div class="form-group">
                        <label for="destination" >Destination Name</label>
                        <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter Destination Name" value="<?php echo $data_1['destination'] ?>"  readonly>
                      </div>


                    

                      <br>

                     

                      





                       <div class="form-group">
                        <label for="s1_text1" >Slider1 Text1</label>
                        <input type="text" class="form-control" id="s1_text1" name="s1_text1" placeholder=""    maxlength="33" >
                      </div>

                      <div class="form-group">
                        <label for="s1_anim_text2" >Slider1 Animation Text2</label>
                        <input type="text" class="form-control" id="s1_anim_text2" name="s1_anim_text2" placeholder=""  maxlength="30" >
                      </div>

                      <div class="form-group">
                        <label for="s1_text3" >Slider1 Text3</label>
                        <input type="text" class="form-control" id="s1_text3" name="s1_text3" placeholder=""  maxlength="40">
                      </div>


                      <div class="form-group">
                        <label for="s1_squre_box_text" >Slider1 Squre Box Text</label>
                        <input type="text" class="form-control" id="s1_squre_box_text" name="s1_squre_box_text" placeholder=""   maxlength="10" >
                      </div>

                      <div class="form-group">
                        <label for="s1_btn1" >Slider1 Button 1</label>
                        <input type="text" class="form-control" id="s1_btn1" name="s1_btn1" placeholder=""  maxlength="20" >
                      </div>

                      <div class="form-group">
                        <label for="s1_btn2" >Slider1 Button 2</label>
                        <input type="text" class="form-control" id="s1_btn2" name="s1_btn2" placeholder=""  maxlength="20" >
                      </div>




                      <div class="form-group mb-4">
                        <label for="s1_img">Slider1 Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="s1_img" name="s1_img" >
                            <label class="custom-file-label" for="image1">Choose file</label>
                          </div>
                          
                        </div>

                         <img width="100" height="80" class="mt-3" id="disp_s1_img" >

                      </div>

                      





                      <div class="form-group">
                        <label for="s2_text1" >Slider2 Text1</label>
                        <input type="text" class="form-control" id="s1_text2" name="s2_text1" placeholder=""    maxlength="33" >
                      </div>

                      <div class="form-group">
                        <label for="s1_anim_text2" >Slider2 Animation Text2</label>
                        <input type="text" class="form-control" id="s2_anim_text2" name="s2_anim_text2" placeholder=""   maxlength="30"  >
                      </div>

                      <div class="form-group">
                        <label for="s2_text3" >Slider2 Text3</label>
                        <input type="text" class="form-control" id="s2_text3" name="s2_text3" placeholder=""   maxlength="40" >
                      </div>


                      <div class="form-group">
                        <label for="s2_squre_box_text" >Slider2 Squre Box Text</label>
                        <input type="text" class="form-control" id="s2_squre_box_text" name="s2_squre_box_text" placeholder=""    maxlength="10" >
                      </div>

                      <div class="form-group">
                        <label for="s2_btn1" >Slider2 Button 1</label>
                        <input type="text" class="form-control" id="s2_btn1" name="s2_btn1" placeholder=""   maxlength="20" >
                      </div>

                      <div class="form-group">
                        <label for="s2_btn2" >Slider2 Button 2</label>
                        <input type="text" class="form-control" id="s2_btn2" name="s2_btn2" placeholder=""  maxlength="20" >
                      </div>




                      <div class="form-group mb-4">
                        <label for="s2_img">Slider2 Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="s2_img" name="s2_img" >
                            <label class="custom-file-label" for="s2_img">Choose file</label>
                          </div>
                          
                        </div>
                        <img width="100" height="80" class="mt-3" id="disp_s2_img" >
                      </div>

                    



                       <div class="form-group">
                        <label for="s3_text1" >Slider3 Text1</label>
                        <input type="text" class="form-control" id="s1_text2" name="s3_text1" placeholder=""   maxlength="33" >
                      </div>

                      <div class="form-group">
                        <label for="s3_anim_text2" >Slider3 Animation Text2</label>
                        <input type="text" class="form-control" id="s3_anim_text2" name="s3_anim_text2" placeholder=""   maxlength="30" >
                      </div>

                      <div class="form-group">
                        <label for="s3_text3" >Slider3 Text3</label>
                        <input type="text" class="form-control" id="s3_text3" name="s3_text3" placeholder=""   maxlength="40">
                      </div>


                      <div class="form-group">
                        <label for="s3_squre_box_text" >Slider3 Squre Box Text</label>
                        <input type="text" class="form-control" id="s3_squre_box_text" name="s3_squre_box_text" placeholder=""   maxlength="10" >
                      </div>

                      <div class="form-group">
                        <label for="s3_btn1" >Slider3 Button 1</label>
                        <input type="text" class="form-control" id="s3_btn1" name="s3_btn1" placeholder=""  maxlength="20"  >
                      </div>

                      <div class="form-group">
                        <label for="s3_btn2" >Slider2 Button 2</label>
                        <input type="text" class="form-control" id="s3_btn2" name="s3_btn2" placeholder=""   maxlength="20"  >
                      </div>




                      <div class="form-group mb-4">
                        <label for="s3_img">Slider3 Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="s3_img" name="s3_img" >
                            <label class="custom-file-label" for="s3_img">Choose file</label>
                          </div>
                          
                        </div>

                        <img width="100" height="80" class="mt-3" id="disp_s3_img" >
                      </div>









                    </div>
                    <!-- /.card-body -->
                      <!-- <input type="hidden" class="form-control" id="id" name="id"  value="<?php // echo $data_1['id'] ?>"> -->
                      <input type="hidden" class="form-control" id="package_id" name="package_id"  value="<?php echo $data_1['id'] ?>">

                    
                      


                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" value="Submit" name="add_package_info_slide1">Update</button> 
                    </div>
                  </form>


                <?php } ?>

              <div class="card-body mt-3">
                        <div class="form-group mb-3 mt-2">
                          <label for=""   >Website Details</label><hr style="margin-top: 2px;">
                          <a href="slide2.php?id=<?php echo $data_1['id'] ?>" type="button" class="btn btn-primary m-2" value="Slide 2" name="edit_customer_info">Slide 2 <br>About Us</a> 

                          <a href="slide6.php?id=<?php echo $data_1['id'] ?>" type="button" class="btn btn-primary mr-2" value="Slide 6" name="edit_customer_info">Slide 6 <br> Payment Policy
                          </a> 



                          <a href="slide9.php?id=<?php echo $data_1['id'] ?>" type="button" class="btn btn-primary mr-2" value="Slide 6" name="edit_customer_info">Slide 9 <br> Connect With Us
                          </a> 
                          <a href="slide10.php?id=<?php echo $data_1['id'] ?>" type="button" class="btn btn-primary mr-2" value="Slide 6" name="edit_customer_info">Slide 10 <br> Review & Award
                          </a> 
                          <a href="slide11.php?id=<?php echo $data_1['id'] ?>" type="button" class="btn btn-primary mr-2" value="Slide 6" name="edit_customer_info">Slide 11 <br> Why Carrnival
                          </a> 
        
                        </div>

                        

                        <div class="form-group mb-3">
                          <label for="" >Slide ( Set Pre-Loaded Package )</label><hr style="margin-top: 2px;">

                          <a href="slide1.php?id=<?php echo $data_1['id'] ?>"  type="button" class="btn btn-primary m-2" value="Slide 1" name="edit_customer_info">Slide 1 <br>Slider</a> 
                          

                          <!-- <a href="#" type="button" class="btn btn-primary m-2" value="Slide 3" name="edit_customer_info">Slide 3 <br>Sample Itinerary</a> -->

                          <a href="package_inclusion.php?id=<?php echo $data_1['id'] ?>" type="button" class="btn btn-primary m-2" value="Slide 3" name="edit_customer_info">Slide 3 <br>Package Inclusion</a>
                          <a href="package_exclusion.php?id=<?php echo $data_1['id'] ?>" type="button" class="btn btn-primary m-2" value="Slide 3" name="edit_customer_info">Slide 3 <br>Package Exclusion</a>


                          <a href="slide4.php?id=<?php echo $data_1['id'] ?>" type="button" class="btn btn-primary mr-2" value="Slide 4" name="edit_customer_info">Slide 4 <br>Activity Details</a> 

                          <a href="slide5.php?id=<?php echo $data_1['id'] ?>" type="button" class="btn btn-primary m-2" value="Slide 5" name="edit_customer_info">Slide 5 <br>Special Experiences</a> 
                          

                          
                          <a href="slide7.php?id=<?php echo $data_1['id'] ?>" type="button" class="btn btn-primary m-2" value="Slide 7" name="edit_customer_info">Slide 7 <br> Best Scenic Places</a>

                           <a href="slide8.php?id=<?php echo $data_1['id'] ?>" type="button" class="btn btn-primary m-2" value="Slide 4" name="edit_customer_info">Slide 8 <br>Adventure Activities</a> 
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