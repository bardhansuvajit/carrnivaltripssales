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
            <h1>Update Slide 10</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Slide 10</li>
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
                <h3 class="card-title">Update Achievement,Review and Award Slide 10</h3>
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






              <form action="php_action/slide10.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">






                   <div class="form-group">
                    <label for="achievement_heading" >Achievement Heading</label>
                    <input type="text" class="form-control" id="achievement_heading" name="achievement_heading" placeholder=""  value="<?php echo $data_2['achievement_heading'] ?>"  maxlength="40" >
                  </div>


                  <div class="form-group">
                    <label for="achievement_description" >Achievement Description</label>
                    <input type="text" class="form-control" id="achievement_description" name="achievement_description" placeholder=""  value="<?php echo $data_2['achievement_description'] ?>" maxlength="200" >
                  </div>



                  <div class="form-group">
                    <label for="achievement_btn" >Achievement Button Text</label>
                    <input type="text" class="form-control" id="achievement_btn" name="achievement_btn" placeholder="" value="<?php echo $data_2['achievement_btn'] ?>" maxlength="40" >
                  </div>
                  <br>

                  <div class="form-group">
                    <label for="achievement_title1" >Achievement Title 1</label>
                    <input type="text" class="form-control" id="achievement_title1" name="achievement_title1" placeholder=""  value="<?php echo $data_2['achievement_title1'] ?>"  maxlength="40" >
                  </div>

                  <div class="form-group">
                    <label for="achievement_count1" >Achievement Count 1</label>
                    <input type="text" class="form-control" id="achievement_count1" name="achievement_count1" placeholder="" value="<?php echo $data_2['achievement_count1'] ?>" maxlength="40" >
                  </div>
                  <br>




                  <div class="form-group">
                    <label for="achievement_title2" >Achievement Title 2</label>
                    <input type="text" class="form-control" id="achievement_title2" name="achievement_title2" placeholder=""  value="<?php echo $data_2['achievement_title2'] ?>"  maxlength="40" >
                  </div>

                  <div class="form-group">
                    <label for="achievement_count2" >Achievement Count 2</label>
                    <input type="text" class="form-control" id="achievement_count2" name="achievement_count2" placeholder="" value="<?php echo $data_2['achievement_count2'] ?>" maxlength="40" >
                  </div>
                  <br>





                   <div class="form-group">
                    <label for="achievement_title3" >Achievement Title 3</label>
                    <input type="text" class="form-control" id="achievement_title3" name="achievement_title3" placeholder=""  value="<?php echo $data_2['achievement_title3'] ?>"  maxlength="40" >
                  </div>
                  
                  <div class="form-group">
                    <label for="achievement_count3" >Achievement Count 3</label>
                    <input type="text" class="form-control" id="achievement_count3" name="achievement_count3" placeholder="" value="<?php echo $data_2['achievement_count3'] ?>" maxlength="40" >
                  </div>
                  <br>




                  <div class="form-group">
                    <label for="achievement_title4" >Achievement Title 4</label>
                    <input type="text" class="form-control" id="achievement_title4" name="achievement_title4" placeholder=""  value="<?php echo $data_2['achievement_title4'] ?>"  maxlength="40" >
                  </div>

                  <div class="form-group">
                    <label for="achievement_count4" >Achievement Count 4</label>
                    <input type="text" class="form-control" id="achievement_count4" name="achievement_count4" placeholder="" value="<?php echo $data_2['achievement_count4'] ?>" maxlength="40" >
                  </div>
                  <br>






                </div>
                <!-- /.card-body -->
                  <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $data_2['id'] ?>">
                  <input type="hidden" class="form-control" id="package_id" name="package_id"  value="<?php echo $data['id'] ?>">

                

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Submit" name="slide10_update">Update</button> 
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