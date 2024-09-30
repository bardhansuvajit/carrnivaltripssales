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
                  $row = mysqli_query($conn, "select * from carrnivaltrips_sightseeing where id='$id' ");

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

    $destination=$_POST['destination'];
    $location_wise=$_POST['location_wise'];


    // echo $img;

   







    // $fees_paid=$_POST['fees_paid'];


    if($_POST['package_id']!="") 
    {
        


        // Delete data
        $qys = "DELETE FROM carrrnivaltrips_destination_best_scenic_places where package_id='".$_POST['package_id']."'";
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






                 
            $query1="INSERT INTO carrrnivaltrips_destination_best_scenic_places (package_id,name, price, img,discount,rank_1 , destination, location_wise ) VALUES ('".$_POST['package_id']."', '".$_POST['name'][$key]."'  , '".$_POST['price'][$key]."'  ,  '$new_img1', '".$_POST['discount'][$key]."' , '".$_POST['rank_1'][$key]."' , '".$_POST['destination']."' , '".$_POST['location_wise']."' )";

                // var_dump($query1);
            
            $result1=mysqli_query($conn,$query1);

         
        }

            if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$package_id");
                 echo "<script>alert('Successfully Update');</script>";
                 // echo "<script>window.location='slide7.php?id=$package_id';</script>";

            
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




                 
            $query1="INSERT INTO carrrnivaltrips_destination_best_scenic_places (package_id,name, price, img,discount,rank_1 , destination, location_wise) VALUES ('".$_POST['package_id']."', '".$_POST['name'][$key]."'  , '".$_POST['price'][$key]."'   , '$new_img1', '".$_POST['discount'][$key]."' , '".$_POST['rank_1'][$key]."' , '".$_POST['destination']."' , '".$_POST['location_wise']."' )";
            
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
            <h1>Update Package Slide 7</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Package Slide 7</li>
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
                <h3 class="card-title">Update Package Slide 7</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- <form action="php_action/add_package_info.php" method="POST" enctype="multipart/form-data"> -->
                <div class="card-body">


                  


                  <form  method="POST" action="" enctype="multipart/form-data">
                      <div class="card-body">



                        <div class="form-group">
                          <label for="destination" >Destination Name</label>
                          <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter Destination Name" value="<?php echo $data['destination'] ?>" readonly >
                        </div>



                        <div class="form-group">
                          <label for="location_wise" >Location Name</label>
                          <input type="text" class="form-control" id="location_wise" name="location_wise" placeholder="" value="<?php echo $data['location_wise'] ?>" readonly >
                        </div>

                                           

        
                              

                         <input type="hidden" name="package_id" value="<?php echo $id ?>">


                        <div class="row">
                          <div class="table-responsive">

                            <label><h3> Best Scenic Places</h3></label>
                            <table class="table table-bordered table-hover" id="dynamic_field">
                                <tr>
                                    <th><label for="Size" class="form-label">Places Name</label></th>
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

                                        $product = "SELECT * FROM carrrnivaltrips_destination_best_scenic_places WHERE  package_id='".$_GET['id']."'";
                                        $result_product = mysqli_query($conn, $product);
                                        if ($result_product->num_rows > 0) 
                                        {
                                          $i=1;
                                          while($row_product = $result_product->fetch_assoc())
                                          {

                                    ?>
                                            <tr id="row<?php echo $i-1;?>" class="row_item">
                                                <td>

                                                    <input type="text" class="form-control" id="validationCustom01"  value="<?php echo $row_product['name'];?>" name ="name[]" maxlength="40"   required>
                                                
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
                                                             

                                              <input type="text" class="form-control" id="validationCustom01"   name ="name[]" placeholder="" maxlength="40"  required>
                                                              
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

                    <div class="card-footer d-flex justify-content-between mt-4">
                        <div class="mr-5">
                       <?php
                          if($_GET['id'] !="")
                          { ?>
                              <!-- Save button div starts -->
                              <button type="submit"  name="activity_update" class="btn btn-primary float-end" value="Update"> Update Scenic Places</button>
                              
                          <?php 
                          } 
                          else 
                          { ?>
                              <button type="submit"  name="activity_update" class="btn btn-primary float-end" value="Save">Save Scenic Places</button>
                          <?php 
                          } ?>
                    </div>
                    <div class="form-group  ">
                            
                              <?php
                                            $product_11=mysqli_query($conn,"Select * from carrnivaltrips_sightseeing where destination='".$data['destination']."' order by id ");
                                            $cnt=1;
                                            $row_11=mysqli_num_rows($product_11);
                                            if($row_11>0)
                                            {
                                              while ($row_11=mysqli_fetch_array($product_11)) 
                                              {

                                            ?>

                                            <span class="">
                                              <a type="submit" class="btn btn-primary m-1" value="Add Activity" href="slide4.php?id=<?php  echo $row_11['id'];?>" ><?php  echo $row_11['location_wise'];?></a>
                                            </span>


                              <?php }} ?>
                            

                        </div>
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
                $('#dynamic_field').append('<tr id="row'+i+'"  class="row_item"><td><input type="text" class="form-control" id="validationCustom01"  value="" name ="name[]" maxlength="40"  placeholder="" required></td> <td><input  type="text" class="form-control" id="validationCustom02" value="" name="price[]" ></td> <td><input  type="text" class="form-control" id="validationCustom02"  name="discount[]" ></td><td><input  type="text" class="form-control" id="validationCustom02"  name="rank_1[]" ></td> <td><input type="file" class="form-control" name="img[]" id="images" > <input type="hidden" class="form-control" name="img_1[]" value=""></td><td><img width="100" height="50" class="mt-3" src="activities_img/"></td><td><button type="button" name="remove" style="margin-top:27px;" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
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
