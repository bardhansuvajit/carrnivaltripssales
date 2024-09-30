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





<?php


extract($_POST);

if(isset($_POST['activity_update']))
{

    
    $package_id=$_POST['package_id'];
    $price=$_POST['price'];
    $name=$_POST['name'];
    // $img=$_POST['img'];
    $img_1=$_POST['img_1'];

    // echo $img;

   







    // $fees_paid=$_POST['fees_paid'];


    if($_POST['package_id']!="") 
    {
        


        // Delete data
        $qys = "DELETE FROM carrrnivaltrips_package_adventure_activities where package_id='".$_POST['package_id']."'";
        mysqli_query($conn,$qys);
  
    

        // var_dump($_POST['work_name']);

        //Update data
        foreach($_POST['name'] as $key=>$value) 
        {
            # code...


            // $sourcePath = $_FILES['img']['tmp_name'][$key];
            // $image=$_FILES['img']['name'][$key];
            // $targetPath = "../activities_img/" .basename($image);
            // move_uploaded_file($sourcePath, $targetPath);
            // $IMAGE=$_FILES['img']['name'][$key];
            // if(empty($IMAGE))
            // {
            //     $IMAGE=$_POST['img_1'][$key];
            // }



            $valid_extensions= array("jpg","jpeg","png","gif","JPG","JPEG","PNG","GIF","webp","WEBP");


            // for image 1
            if($_FILES["img"]["tmp_name"][$key] != '')
            {
                $img=$_FILES["img"]["name"][$key];
                $extension_1=pathinfo($img,PATHINFO_EXTENSION);


                if(!in_array($extension_1,$valid_extensions))
                {
                    echo "<script>alert('Invalid Image format. Only jpg / jpeg/ png /gif format allowed');</script>";
                }
                else
                {
                    $new_img1= rand().".".$extension_1;
                    $path1= "activities_img/".$new_img1;
                    move_uploaded_file($_FILES["img"]["tmp_name"][$key],$path1);

                }

            }
            else
            {
                    $new_img1=$_POST['img_1'][$key];
            }






                 
            $query1="INSERT INTO carrrnivaltrips_package_adventure_activities (package_id,name, price, img,discount,rank_1 ) VALUES ('".$_POST['package_id']."', '".$_POST['name'][$key]."'  , '".$_POST['price'][$key]."'  ,  '$new_img1', '".$_POST['discount'][$key]."' , '".$_POST['rank_1'][$key]."' )";

                // var_dump($query1);
            
            $result1=mysqli_query($conn,$query1);

         
        }

            if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$package_id");
                 echo "<script>alert('Successfully Update');</script>";
                 // echo "<script>window.location='slide8.php?id=$package_id';</script>";

            
            }
     


    }
    else
    {

      

         foreach($_POST['name'] as $key=>$value) 
        {
            # code...



            // $sourcePath = $_FILES['img']['tmp_name'][$key];
            // $image=$_FILES['img']['name'][$key];
            // $targetPath = "../activities_img/" .basename($image);
            // move_uploaded_file($sourcePath, $targetPath);
            // $IMAGE=$_FILES['img']['name'][$key];
            // if(empty($IMAGE))
            // {
            //     $IMAGE=$_POST['img_1'][$key];
            // }



            $valid_extensions= array("jpg","jpeg","png","gif","JPG","JPEG","PNG","GIF","webp","WEBP");


            // for image 1
            if($_FILES["img"]["tmp_name"][$key] != '')
            {
                $img=$_FILES["img"]["name"][$key];
                $extension_1=pathinfo($img,PATHINFO_EXTENSION);


                if(!in_array($extension_1,$valid_extensions))
                {
                    echo "<script>alert('Invalid Image format. Only jpg / jpeg/ png /gif format allowed');</script>";
                }
                else
                {
                    $new_img1= rand().".".$extension_1;
                    $path1= "activities_img/".$new_img1;
                    move_uploaded_file($_FILES["img"]["tmp_name"][$key],$path1);

                }

            }
            else
            {
                    $new_img1=$_POST['img_1'][$key];
            }




                 
            $query1="INSERT INTO carrrnivaltrips_package_adventure_activities (package_id,name, price, img,discount,rank_1) VALUES ('".$_POST['package_id']."', '".$_POST['name'][$key]."'  , '".$_POST['price'][$key]."'   , '$new_img1' , '".$_POST['discount'][$key]."' , '".$_POST['rank_1'][$key]."')";
            
            $result1=mysqli_query($conn,$query1);

           
         
        }

         if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$package_id");
                echo "<script>alert('Successfully Update');</script>";
                // echo "<script>window.location='slide7.php?id=$package_id';</script>";
            
            }

    }



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
            <h1>Update Package Slide 8</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Package Slide 8</li>
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
                <h3 class="card-title">Update Package Slide 8</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form action="php_action/add_package_info.php" method="POST" enctype="multipart/form-data"> -->
                <div class="card-body">


                  <div class="form-group">
                    <label for="package_name" >Package Name</label>
                    <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Enter Package Name" value="<?php echo $data['package_name'] ?>" readonly >
                  </div>


                  <form  method="POST" action="" enctype="multipart/form-data">
                      <div class="card-body">

                                           

        
                              

                         <input type="hidden" name="package_id" value="<?php echo $id ?>">


                        <div class="row">
                          <div class="table-responsive">

                            <label><h3>Adventure Activity</h3></label>
                            <table class="table table-bordered table-hover" id="dynamic_field">
                                <tr>
                                    <th><label for="Size" class="form-label">Activity Name</label></th>
                                    <th style="width:150px;"><label for="Size" class="form-label">Price</label></th>
                                    <th style="width:100px;"><label for="Size" class="form-label">Discount</label></th>
                                    <th style="width:100px;"><label for="Size" class="form-label">Rank</label></th>

                                    <th style="width:200px;"><label for="Size" class="form-label">Upload Img</label></th>
                                    <th style="width:120px;"><label for="Size" class="form-label">Image</label></th>
                                    

                                    <th style="width:100px;"></th>
                                </tr>

                                <?php

                                      if($_GET['id'] !="")
                                      {

                                        $product = "SELECT * FROM carrrnivaltrips_package_adventure_activities WHERE  package_id='".$_GET['id']."'";
                                        $result_product = mysqli_query($conn, $product);
                                        if ($result_product->num_rows > 0) 
                                        {
                                          $i=1;
                                          while($row_product = $result_product->fetch_assoc())
                                          {

                                    ?>
                                            <tr id="row<?php echo $i-1;?>" class="row_item">
                                                <td>

                                                    <input type="text" class="form-control" id="validationCustom01"  value="<?php echo $row_product['name'];?>" name ="name[]" maxlength="60"   required>
                                                
                                                </td>
                                                            
                                                <td>
                                                    <input  type="text" class="form-control" id="validationCustom02" value="<?php echo $row_product['price'];?>" name="price[]" >
                                                </td> 


                                                 <td>
                                                    <input  type="text" class="form-control" id="validationCustom02" value="<?php echo $row_product['discount'];?>" name="discount[]" >
                                                </td>

                                                <td>
                                                    <input  type="text" class="form-control" id="validationCustom02" value="<?php echo $row_product['rank_1'];?>" name="rank_1[]" >
                                                </td>    
    

                                                            

                                                <td>
                                                                
                                                      <?php if(isset($row_product['img']))
                                                      {?>

                                                                    
                                                          <input type="file" class="form-control" name="img[]" >

                                                          <input type="hidden" class="form-control" name="img_1[]" value="<?php echo $row_product['img'];?>">


                                                      <?php }
                                                      ?>
                                                </td>

                                                <td>
                                                      <img width="100" height="50" class="mt-3" src="activities_img/<?php echo $row_product['img'];?>">
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
                                                             

                                              <input type="text" class="form-control" id="validationCustom01"   name ="name[]" placeholder="" maxlength="60"  required>
                                                              
                                        </td>
                                                            
                                        <td>
                                                
                                              <input  type="text" class="form-control" id="validationCustom02"  name="price[]" >
                                        </td>   

                                        <td>
                                                
                                              <input  type="text" class="form-control" id="validationCustom02"  name="discount[]" >
                                        </td>   

                                        <td>
                                                
                                              <input  type="text" class="form-control" id="validationCustom02"  name="rank_1[]" >
                                        </td>     

                                                            

                                        <td>    
                                                                                                                            
                                                  <input type="file" class="form-control" name="img[]">
                                                  <input type="hidden" class="form-control" name="img_1[]" value="">

                                                                
                                        </td>

                                        <td>  
                                                  <img width="100" height="50" class="mt-3" src="activities_img/">
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
                              <button type="submit"  name="activity_update" class="btn btn-primary float-end" value="Update"> Update Activity</button>
                              
                          <?php 
                          } 
                          else 
                          { ?>
                              <button type="submit"  name="activity_update" class="btn btn-primary float-end" value="Save">Save Activity</button>
                          <?php 
                          } ?>
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
                $('#dynamic_field').append('<tr id="row'+i+'"  class="row_item"><td><input type="text" class="form-control" id="validationCustom01"  value="" name ="name[]" placeholder="" maxlength="60"  required></td> <td><input  type="text" class="form-control" id="validationCustom02" value="" name="price[]" ><td><input  type="text" class="form-control" id="validationCustom02"  name="discount[]" ></td><td><input  type="text" class="form-control" id="validationCustom02"  name="rank_1[]" ></td> <td><input type="file" class="form-control" name="img[]" id="images" > <input type="hidden" class="form-control" name="img_1[]" value=""></td><td><img width="100" height="50" class="mt-3" src="activities_img/"></td><td><button type="button" name="remove" style="margin-top:27px;" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
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
