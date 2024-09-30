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



  <?php 

                if(isset($_GET['editid']))
                {
                  $id=$_GET['editid'];

                  $eid = $_GET['editid'];
                  
                  $row = mysqli_query($conn, "select * from carrnivaltrips_destination_wise_hotel_season where id='$eid' ");
                  $data = $row->fetch_assoc();
                  
                  // echo '<pre>';
                  // print_r($data);
                  // echo '</pre>';

                }

  ?> 




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update <?php echo $data['destination']; ?> Season</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Season </li>
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
                <h3 class="card-title">Update Season</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              


            <!-- update hotel -->
            <div class="mb-3">
              <form action="php_action/edit_season.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">


                  <!-- <div class="form-group">
                    <label for="destination" >Destination</label>
                    <input type="text" class="form-control" id="destination" name="destination" value="<?php echo $data['destination']; ?>"  readonly >
                  </div> -->


                  <div class="form-group">
                        <label for="destination">Destination</label>
                        <select class="form-control" id="destination" name="destination">  
                          <option value="<?php echo $data['destination']; ?>"><?php echo $data['destination']; ?></option>
                          <?php
                              $product=mysqli_query($conn,"Select distinct destination from carrnivaltrips_hotel_category order by id ");
                              $cnt=1;
                              $row=mysqli_num_rows($product);
                              if($row>0)
                              {
                                while ($row=mysqli_fetch_array($product)) 
                                {                                 

                              ?>
                              <option value="<?php echo $row['destination'] ?>"><?php echo $row['destination'] ?></option>
                            <?php }} ?>
                        </select>
                  </div> 


                  




                  <div class="row mb-3">
                    <div class="col-md-6">
                     <div class="form-group">
                      <label for="season_start_date" >Season Start Date</label>
                      <input type="date" class="form-control" id="season_start_date" name="season_start_date"  value="<?php  echo $data['season_start_date']; ?>" >
                    </div>
                   </div>

                   <div class="col-md-6">
                     <div class="form-group">
                      <label for="season_end_date" >Season End Date</label>
                      <input type="date" class="form-control" id="season_end_date" name="season_end_date" value="<?php  echo $data['season_start_date']; ?>" >
                    </div>
                   </div>
                     
                   </div>



                   <div class="row mb-3">
                    <div class="col-md-6">
                     <div class="form-group">
                      <label for="pick_season_start_date" >Pick Season Start Date</label>
                      <input type="date" class="form-control" id="pick_season_start_date" name="pick_season_start_date"   value="<?php  echo $data['pick_season_start_date']; ?>"  >
                    </div>
                   </div>

                   <div class="col-md-6">
                     <div class="form-group">
                      <label for="pick_season_end_date" >Pick Season End Date</label>
                      <input type="date" class="form-control" id="pick_season_end_date" name="pick_season_end_date"   value="<?php  echo $data['pick_season_end_date']; ?>"  >
                    </div>
                   </div>
                     
                   </div>


                   <div class="row mb-3">
                    <div class="col-md-6">
                     <div class="form-group">
                      <label for="off_season_start_date" >Off Season Start Date</label>
                      <input type="date" class="form-control" id="off_season_start_date" name="off_season_start_date"  value="<?php  echo $data['off_season_start_date']; ?>"   >
                    </div>
                   </div>

                   <div class="col-md-6">
                     <div class="form-group">
                      <label for="off_season_end_date" >Off Season End Date</label>
                      <input type="date" class="form-control" id="off_season_end_date" name="off_season_end_date"   value="<?php  echo $data['off_season_end_date']; ?>"  >
                    </div>
                   </div>
                     
                   </div>


                 
               



                      <!-- <div class="form-group">
                            <label for="status">Hotel Status</label>
                            <select class="form-control" id="status" name="status"> 
                              
                              <option value="Upcoming">Upcoming</option>
                              <option value="Active">Active</option>
                              <option value="Inactive">Inactive</option>



                                
                            </select>
                      </div>   -->         

                
                   <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $data['id'] ?>">
                
              


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Submit" name="update_season">Submit</button>
                </div>
              </form>
            </div>
            <!-- end update hotel -->



        
               



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



        function display2(input) {
           if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(event) {
                 $('#disp_img2').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#img2").change(function() {
           display2(this);
        });





        function display3(input) {
           if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(event) {
                 $('#disp_img3').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#img3").change(function() {
           display3(this);
        });

       

    </script>


   


    










<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 



 


  


</body>
</html>


<?php 
}
 ?>