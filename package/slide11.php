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
            <h1>Update Slide 11</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Slide 11</li>
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
                <h3 class="card-title">Update WHY CARRNIVAL TRIPS Slide 11</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php 

                if(isset($_GET['id']))
                {
                  $id=$_GET['id'];

                  $eid = $_GET['id'];
                  $row = mysqli_query($conn, "select * from carrrnivaltrips_package where id='$eid' ");

                  $data = $row->fetch_assoc();
                  
                  // echo '<pre>';
                  // print_r($data);
                  // echo '</pre>';


                  

                }


                $row_2 = mysqli_query($conn, "select * from carrnivaltrips_details where id='1' ");

                  $data_2 = $row_2->fetch_assoc();

            ?> 






              <form action="php_action/slide11.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">






                   <div class="form-group">
                    <label for="why_carrnival_heading" >Why Carrnival Trips Heading</label>
                    <input type="text" class="form-control" id="why_carrnival_heading" name="why_carrnival_heading" placeholder=""  value="<?php echo $data_2['why_carrnival_heading'] ?>"  maxlength="100" >
                  </div>


                  <div class="form-group">
                    <label for="why_carrnival_title1" >Title 1</label>
                    <input type="text" class="form-control" id="why_carrnival_title1" name="why_carrnival_title1" placeholder=""  value="<?php echo $data_2['why_carrnival_title1'] ?>" maxlength="115" >
                  </div>

                  <div class="form-group mb-3">
                    <label for="why_carrnival_description1" >Description 1 </label>
                    <input type="text" class="form-control" id="why_carrnival_description1" name="why_carrnival_description1" placeholder="" value="<?php echo $data_2['why_carrnival_description1'] ?>" maxlength="200" >
                  </div>




                  <div class="form-group">
                    <label for="why_carrnival_title2" >Title 2</label>
                    <input type="text" class="form-control" id="why_carrnival_title2" name="why_carrnival_title2" placeholder=""  value="<?php echo $data_2['why_carrnival_title2'] ?>" maxlength="115" >
                  </div>

                  <div class="form-group mb-3">
                    <label for="why_carrnival_description2" >Description 2 </label>
                    <input type="text" class="form-control" id="why_carrnival_description2" name="why_carrnival_description2" placeholder="" value="<?php echo $data_2['why_carrnival_description2'] ?>" maxlength="200" >
                  </div2>





                  <div class="form-group">
                    <label for="why_carrnival_title3" >Title 3</label>
                    <input type="text" class="form-control" id="why_carrnival_title3" name="why_carrnival_title3" placeholder=""  value="<?php echo $data_2['why_carrnival_title3'] ?>" maxlength="115" >
                  </div>

                  <div class="form-group mb-3">
                    <label for="why_carrnival_description3" >Description 3 </label>
                    <input type="text" class="form-control" id="why_carrnival_description3" name="why_carrnival_description3" placeholder="" value="<?php echo $data_2['why_carrnival_description3'] ?>" maxlength="200" >
                  </div>


                  


                  <div class="form-group">
                    <label for="why_carrnival_title4" >Title 4</label>
                    <input type="text" class="form-control" id="why_carrnival_title4" name="why_carrnival_title4" placeholder=""  value="<?php echo $data_2['why_carrnival_title4'] ?>" maxlength="115" >
                  </div>

                  <div class="form-group mb-3">
                    <label for="why_carrnival_description4" >Description 4 </label>
                    <input type="text" class="form-control" id="why_carrnival_description4" name="why_carrnival_description4" placeholder="" value="<?php echo $data_2['why_carrnival_description4'] ?>" maxlength="200" >
                  </div>







                  <div class="form-group">
                    <label for="why_carrnival_title5" >Title 5</label>
                    <input type="text" class="form-control" id="why_carrnival_title5" name="why_carrnival_title5" placeholder=""  value="<?php echo $data_2['why_carrnival_title5'] ?>" maxlength="115" >
                  </div>

                  <div class="form-group mb-3">
                    <label for="why_carrnival_description5" >Description 5 </label>
                    <input type="text" class="form-control" id="why_carrnival_description5" name="why_carrnival_description5" placeholder="" value="<?php echo $data_2['why_carrnival_description5'] ?>" maxlength="200" >
                  </div>


                  


                  <div class="form-group">
                    <label for="why_carrnival_title6" >Title 6</label>
                    <input type="text" class="form-control" id="why_carrnival_title6" name="why_carrnival_title6" placeholder=""  value="<?php echo $data_2['why_carrnival_title6'] ?>" maxlength="115" >
                  </div>

                  <div class="form-group mb-3">
                    <label for="why_carrnival_description6" >Description 6 </label>
                    <input type="text" class="form-control" id="why_carrnival_description6" name="why_carrnival_description6" placeholder="" value="<?php echo $data_2['why_carrnival_description6'] ?>" maxlength="200" >
                  </div>



                  


      






                </div>
                <!-- /.card-body -->
                  <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $data_2['id'] ?>">
                  <input type="hidden" class="form-control" id="package_id" name="package_id"  value="<?php echo $data['id'] ?>">

                

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Submit" name="slide11_update">Update</button> 
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