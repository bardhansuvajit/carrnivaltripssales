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




<?php 

                if(isset($_GET['id']))
                {
                  $id=$_GET['id'];

                  $eid = $_GET['id'];
                  $row = mysqli_query($conn, "select * from carrrnivaltrips_package where id='$id' ");

                  $data = $row->fetch_assoc();
                  
                  // echo '<pre>';
                  // print_r($data);
                  // echo '</pre>';

                }

                if(isset($_GET['day']))
                {
                  $day=$_GET['day'];
                }



                $package_img = mysqli_query($conn, "select * from carrrnivaltrips_package_itinerary_img where package_id='$eid' and day_no = '$day' ");
                $data_img_row=mysqli_num_rows($package_img);

                $data_img = $package_img->fetch_assoc();

                // echo $data_img_row;
                // echo "<br>Hi"

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
            <h1>Update Itinerary Day <?php echo $day; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Itinerary Day <?php echo $day; ?></li>
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
                <h3 class="card-title">Update Itinerary Day <?php echo $day; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form action="php_action/add_package_info.php" method="POST" enctype="multipart/form-data"> -->
                <div class="card-body">


                  <div class="form-group">
                    <label for="package_name" >Package Name</label>
                    <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Enter Package Name" value="<?php echo $data['package_name'] ?>" readonly >
                  </div>



                  <form action="php_action/package_itinerary_img.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body ">


                      <div class="form-group mb-2 ">
                        <label for=""   >Day Wise Itinerary Image</label><hr style="margin-top: 2px;">
                      </div>



                      <?php 
                      if ($data_img_row) {
                       ?>

                      <div class="row mb-2">
                          <div class="form-group col-4 mb-4">
                            <label for="img_1">Image 1</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img_1" name="img_1" >
                                <label class="custom-file-label" for="img_1">Choose Image</label>
                              </div> 
                            </div>
                             <img width="100" height="80" class="mt-3" id="disp_package_img_1" src="img/<?php echo $data_img['img_1'];?>">
                        </div>

                        <div class="form-group col-4 mb-4">
                            <label for="img_2">Image 2</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img_2" name="img_2" >
                                <label class="custom-file-label" for="img_2">Choose Image</label>
                              </div> 
                            </div>
                             <img width="100" height="80" class="mt-3" id="disp_package_img_2" src="img/<?php echo $data_img['img_2'];?>">
                        </div>

                        <div class="form-group col-4 mb-4">
                            <label for="img_3">Image 3</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img_3" name="img_3" >
                                <label class="custom-file-label" for="img_3">Choose Image</label>
                              </div> 
                            </div>
                             <img width="100" height="80" class="mt-3" id="disp_package_img_3" src="img/<?php echo $data_img['img_3'];?>">
                        </div>
                      </div>



                      <input type="hidden" class="form-control" id="img1" name="img1"  value="<?php echo $data_img['img_1'] ?>">
                      <input type="hidden" class="form-control" id="img2" name="img2"  value="<?php echo $data_img['img_2'] ?>">
                      <input type="hidden" class="form-control" id="img3" name="img3"  value="<?php echo $data_img['img_3'] ?>">


                      <?php 
                      }
                      else
                      {

                       ?>
                       <div class="row mb-2">

                          <div class="form-group col-4 mb-2">
                            <label for="img_1">Image 1</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img_1" name="img_1" >
                                <label class="custom-file-label" for="img_1">Choose Image</label>
                              </div> 
                            </div>
                             <img width="100" height="80" class="mt-3" id="disp_package_img_1" >
                        </div>

                        <div class="form-group col-4 mb-2">
                            <label for="img_2">Image 2</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img_2" name="img_2" >
                                <label class="custom-file-label" for="img_2">Choose Image</label>
                              </div> 
                            </div>
                             <img width="100" height="80" class="mt-3" id="disp_package_img_2" >
                        </div>

                        <div class="form-group col-4 mb-2">
                            <label for="img_3">Image 3</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="img_3" name="img_3" >
                                <label class="custom-file-label" for="img_3">Choose Image</label>
                              </div> 
                            </div>
                             <img width="100" height="80" class="mt-3" id="disp_package_img_3" >
                        </div>
                      </div>

                      <?php } ?>

                    


                    </div>
                    <!-- /.card-body -->
                      <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $data['id'] ?>">
                      <input type="hidden" class="form-control" id="day_no" name="day_no"  value="<?php echo $day ?>">

                    
                      

                     


                    <div class="card-footer mb-4">
                      <?php 
                      if ($data_img_row) {
                       ?>
                      <button type="submit" class="btn btn-primary" value="Submit" name="update_package_itinerary_img">Update Imgage</button> 
                    <?php }else{ ?>
                      <button type="submit" class="btn btn-primary" value="Submit" name="package_itinerary_img">Save Imgage</button> 
                    <?php } ?>
                    </div>
                  </form>




                  <form  method="POST" action="php_action/day.php" enctype="multipart/form-data">
                      <div class="card-body">

                                           

        
                              

                         <input type="hidden" name="package_id" value="<?php echo $id ?>">
                         <input type="hidden" name="day" value="<?php echo $day ?>">



                        <div class="row">
                          <div class="table-responsive">

                            <label><h3>Update Itinerary Day <?php echo $day; ?></h3></label>
                            <table class="table table-bordered table-hover" id="dynamic_field">
                                <tr>
                                    <th><label for="Size" class="form-label">Bullet Point</label></th>
                                    <th style="width:150px;"><label for="Size" class="form-label">Rank</label></th>
                                    
                                    <th style="width:100px;" ></th>
                                </tr>

                                <?php

                                      if($_GET['id'] !="")
                                      {

                                        $product = "SELECT * FROM carrrnivaltrips_package_itinerary WHERE  package_id='".$_GET['id']."'  AND  day_no='".$_GET['day']."'";
                                        $result_product = mysqli_query($conn, $product);
                                        if ($result_product->num_rows > 0) 
                                        {
                                          $i=1;
                                          while($row_product = $result_product->fetch_assoc())
                                          {

                                    ?>
                                            <tr id="row<?php echo $i-1;?>" class="row_item">
                                                <td>

                                                    <input type="text" class="form-control" id="validationCustom01"  value="<?php echo $row_product['name'];?>" name ="name[]"  required>
                                                
                                                </td>
                                                            
                                                <td>
                                                    <input  type="text" class="form-control" id="validationCustom02" value="<?php echo $row_product['rank_1'];?>" name="rank_1[]" >
                                                </td>     

                                                            

                                              



                                  <?php

                                      if($i==1)
                                  {?> 
                                              <td>
                                                <button type="button" name="add" style="margin-top: 27px;" id="add" class="btn btn-success"><i class=" fa fa-plus-square"></i></button>
                                              </td> 
                                  <?php 
                                  } 
                                  else 
                                  {?> 
                                            <td>
                                              <button type="button" name="remove" style="margin-top:27px;" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button>
                                            </td>

                                  <?php } ?>
                                                            

                                    </tr>

                                <?php 
                                $i++; } 
                              }
                              else 
                              {
                              ?>

                                  <tr id="" class="row_item">
                                        <td>
                                                             

                                              <input type="text" class="form-control" id="validationCustom01"   name ="name[]" placeholder="" required>
                                                              
                                        </td>
                                                            
                                        <td>
                                                
                                              <input  type="text" class="form-control" id="validationCustom02"  name="rank_1[]" >
                                        </td>     

                                                            

                                       


                                            <td>
                                                                  <button type="button" name="add" style="margin-top: 27px;" id="add" class="btn btn-success"><i class="fa fa-plus-square"></i></button>
                                            </td> 
                                                           
                                                                
                                                            

                                    </tr>



                                                  <?php

                                                  } }?>  


                            </table>
                          </div>
                        </div>

                      </div>

                    <div class="card-footer d-flex justify-content-between mt-3">
                        <div class="mr-5">
                       <?php
                          if($_GET['id'] !="")
                          { ?>
                              <!-- Save button div starts -->
                              <button type="submit"  name="activity_update" class="btn btn-primary p-3" value="Update"> Update Itinerary Day <?php echo $day; ?></button>
                              
                          <?php 
                          } 
                          else 
                          { ?>
                              <button type="submit"  name="activity_update" class="btn btn-primary p-3" value="Save">Save Itinerary Day <?php echo $day; ?></button>
                          <?php 
                          } ?>

                        </div>


                          <div class="form-group  ">
                            
                            <?php   

                                if($data['day'] > 0)
                                {
                                  for ($i=1; $i <= $data['day'] ; $i++) { 
                                 ?>    
                                    <a href="day.php?id=<?php echo $data['id'];?>&day=<?php echo $i; ?>" type="button" class="btn btn-primary mr-1 mb-1 p-2" value="Slide 4" name="edit_customer_info">Day <?php echo $i; ?> </a> 
                                <?php 
                                  }
                                }

                             ?>
                            

                          </div>
                    </div>

                </form>


                  






               

                 

                


                </div>
                <!-- /.card-body -->

                <!-- <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Submit" name="add_package_info">Submit</button>
                </div> -->
              <!-- </form> -->
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




<script type="text/javascript">
$(document).ready(function(){
  $("#addimage").click(function(){
    $('#information').modal('show');
  });
  
});
</script>


 <script>
        $(document).ready(function () {
            var i = <?php echo $i-2;?>;

            $('#add').click(function () {
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'"  class="row_item"><td><input type="text" class="form-control" id="validationCustom01"  value="" name ="name[]" placeholder="" required></div></td> <td><input  type="text" class="form-control" id="validationCustom02" value="" name="rank_1[]" ></td> <td><button type="button" name="remove" style="margin-top:27px;" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
            });

             $(document).on('click', '.btn_remove', function(){ 
                var button_id = $(this).attr("id"); 
                //alert('Please submit changes');
                $('#row'+button_id+'').remove(); 
            });

            
        });
    </script>



    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>

          function display1(input) {
           if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(event) {
                 $('#disp_package_img_1').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#img_1").change(function() {
           display1(this);
        });




        function display2(input) {
           if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(event) {
                 $('#disp_package_img_2').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#img_2").change(function() {
           display2(this);
        });




        function display3(input) {
           if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(event) {
                 $('#disp_package_img_3').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#img_3").change(function() {
           display3(this);
        });

       
    </script>




 


</body>
</html>

<?php
 } 
 ?>
