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
            <h1>Update Package Inclusion</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Package Inclusion</li>
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
                <h3 class="card-title">Update Package Inclusion</h3>
              </div>
              <!-- /.card-header -->
              
                <div class="card-body">


                  <div class="form-group">
                    <label for="package_name" >Package Name</label>
                    <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Enter Package Name" value="<?php echo $data['package_name'] ?>" readonly >
                  </div>


                  <form  method="POST" action="php_action/package_inclusion.php" enctype="multipart/form-data">
                      <div class="card-body">

                                           

        
                              

                         <input type="hidden" name="package_id" value="<?php echo $id ?>">


                        <div class="row">
                          <div class="table-responsive">

                            <label><h3> Package Inclusion</h3></label>
                            <table class="table table-bordered table-hover" id="dynamic_field">
                                <tr>
                                    <th style="width:400px;"><label for="Size" class="form-label">Include Name</label></th>
                                    <th style="width:100px;"><label for="Size" class="form-label">Price</label></th>
                                    <th style="width:100px;"><label for="Size" class="form-label">Rank</label></th>
                                    <th style="width:100px;"><label for="Size" class="form-label">Status</label></th>

                                   

                                    <th style="width:100px;"></th>
                                </tr>

                                <?php

                                      if($_GET['id'] !="")
                                      {

                                        $product = "SELECT * FROM carrrnivaltrips_package_inclusion WHERE  package_id='".$_GET['id']."'";
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
                                                    <input  type="text" class="form-control" id="validationCustom02" value="<?php echo $row_product['price'];?>" name="price[]" >
                                                </td> 


                                                <td>
                                                    <input  type="text" class="form-control" id="validationCustom02" value="<?php echo $row_product['rank_1'];?>" name="rank_1[]" >
                                                </td> 


                                                <td>
                                                    <!-- <input  type="text" class="form-control" id="validationCustom02" value="<?php echo $row_product['status'];?>" name="status[]" > -->

                                                   
                                                      <select class="form-control" id="status" name="status[]"> 
                                                        <option value="<?php echo $row_product['status'] ?>"><?php echo $row_product['status'] ?></option>
                                                        <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option>                                                        
                                                      </select>
                                                 


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
                                              <input  type="text" class="form-control" id="validationCustom02"  name="price[]" >
                                        </td>  
                                        <td>
                                              <input  type="text" class="form-control" id="validationCustom02"  name="rank_1[]" >
                                        </td>  
                                        <td>
                                              <!-- <input  type="text" class="form-control" id="validationCustom02"  name="status[]" > -->


                                                      <select class="form-control" id="status" name="status[]"> 
                                                        <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option>
                                                      </select>

                                                                                                      
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

                    <div class="card-footer">
                       <?php
                          if($_GET['id'] !="")
                          { ?>
                              <!-- Save button div starts -->
                              <button type="submit"  name="activity_update" class="btn btn-primary float-end" value="Update"> Update Inclusion</button>
                              
                          <?php 
                          } 
                          else 
                          { ?>
                              <button type="submit"  name="activity_update" class="btn btn-primary float-end" value="Save">Save Inclusion</button>
                          <?php 
                          } ?>
                    </div>

                  </form>


      

                </div>
                <!-- /.card-body -->

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
                $('#dynamic_field').append('<tr id="row'+i+'"  class="row_item"><td><input type="text" class="form-control" id="validationCustom01"  value="" name ="name[]" placeholder="" required></td> <td><input  type="text" class="form-control" id="validationCustom02" value="" name="price[]" ></td> <td><input  type="text" class="form-control" id="validationCustom02" value="" name="rank_1[]" ></td> <td><select class="form-control" id="status" name="status[]"> <option value="Active">Active</option> <option value="Inactive">Inactive</option> </select></td> <td><button type="button" name="remove" style="margin-top:27px;" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
            });

             $(document).on('click', '.btn_remove', function(){ 
                var button_id = $(this).attr("id"); 
                //alert('Please submit changes');
                $('#row'+button_id+'').remove(); 
            });

            
        });
    </script>




 


</body>
</html>

<?php
 } 
 ?>
