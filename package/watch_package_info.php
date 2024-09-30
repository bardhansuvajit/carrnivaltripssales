<?php 


require_once('../db.php');
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
            <h1>Client Information </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Client Information</li>
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
                <h3 class="card-title">Client Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php 

              if(isset($_GET['editid']))
              {
                $id=$_GET['editid'];

                $eid = $_GET['editid'];
                $row = mysqli_query($conn, "select * from carrnivaltrips_customer where id='$eid' ");

                $data = $row->fetch_assoc();
                
                // echo '<pre>';
                // print_r($data);
                // echo '</pre>';

              }

               ?> 




              





              <form action="php_action/edit_product.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <label for="FirstName" >First Name</label>
                    <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="Enter First Name" value="<?php echo $data['FirstName'] ?>" required>
                  </div>


                  <div class="form-group">
                    <label for="LastName" >Last Name</label>
                    <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Enter Last Name" value="<?php echo $data['LastName'] ?>" >
                  </div>



                  
                  <div class="form-group">
                    <label for="Phone">Phone</label>
                    <input type="number" class="form-control" id="Phone" name="Phone" placeholder="Phone" value="<?php echo $data['Phone'] ?>" required> 
                  </div>


                   <div class="form-group">
                    <label for="Email" >Email</label>
                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter Email "  value="<?php echo $data['Email'] ?>">
                  </div>


                  <div class="form-group">
                    <label for="DateOfBirth" >Date Of Birth</label>
                    <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth" placeholder="Select Date Of Birth"  value="<?php echo $data['DateOfBirth'] ?>">
                  </div>



                  <div class="form-group">
                    <label for="Address">Address </label>
                    <textarea type="text" class="form-control" id="Address" name="Address" placeholder="Enter Address"  > <?php echo $data['Address'] ?> </textarea>
                  </div>




                  <div class="form-group">
                    <label for="Pincode">ZipCode</label>
                     <input type="Number" class="form-control" placeholder="Pincode" name="ZipCode"  required  maxlength="6"  oninput="handlePincodeInput()" id="pincode"  value="<?php echo $data['ZipCode'] ?>" >
                    <!-- <input type="number" class="form-control" id="ZipCode" name="ZipCode" placeholder="ZipCode" required>  -->
                  </div>



                  <div class="form-group">
                    <label for="Country" >Country </label>
                    <input type="text" class="form-control" id="Country" name="Country" placeholder="Country " value="<?php echo $data['Country'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="State" >State </label>
                    <input type="text" class="form-control" id="State" name="State" placeholder="State" value="<?php echo $data['State'] ?>" >
                  </div>

                  <div class="form-group">
                    <label for="District" >District </label>
                    <input type="text" class="form-control" id="District" name="District" placeholder="District " value="<?php echo $data['District'] ?>" >
                  </div>



                  <div class="form-group">
                    <label for="Document_number" >Document Number </label>
                    <input type="text" class="form-control" id="Document_number" name="Document_number" placeholder="Enter Document_number " value="<?php echo $data['Document_number'] ?>" >
                  </div>






                   <div class="form-group">
                        <label for="travel_status">Verification Status</label>
                        <select class="form-control" id="travel_status" name="travel_status"> 
                          <option value="<?php echo $data['travel_status'] ?>"><?php echo $data['travel_status'] ?></option>                     
                                                      
                        </select>
                  </div> 
                  

                   





                  












                  <!-- select -->
                 
                 <!--  <div class="form-group">
                        <label for="category">Product Category</label>
                        <select class="form-control" id="category" name="category"> 
                          <option value="<?php echo $data['category'] ?>"><?php echo $data['category'] ?></option>                     

                        <?php
                            $category=mysqli_query($conn,"Select * from fishokart_farmer_product_category");
                            $row1=mysqli_num_rows($category);
                            if($row1>0)
                            {
                              while ($row1=mysqli_fetch_array($category)) 
                              {

                            ?>
                              <option value="<?php echo $row1['category_name'] ?>"><?php echo $row1['category_name'] ?></option>

                            <?php }} ?>
                        </select>
                  </div> -->


                  <!-- <div class="form-group">
                    <label for="image1">Image 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image1" name="image1" value="<?php echo $data['image1'] ?>" >
                        <label class="custom-file-label" for="image1"><?php echo $data['image1'] ?>  Choose file</label>
                      </div>
                    </div>
                    <img src="img/<?php echo $data['image1'] ?>" alt="image1" width="80" height="80">
                  </div>

                  <div class="form-group">
                    <label for="image2">Image 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image2" name="image2" value="<?php echo $data['image2'] ?>">
                        <label class="custom-file-label" for="image2" ><?php echo $data['image2'] ?>  Choose file</label>
                      </div>
                    </div>
                    <img src="img/<?php echo $data['image2'] ?>" alt="image2" width="80" height="80" >
                  </div>

                  <div class="form-group">
                    <label for="image3">Image 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image3" name="image3" value="<?php echo $data['image4'] ?>">
                        <label class="custom-file-label" for="image3"><?php echo $data['image3'] ?>  Choose file</label>
                      </div>
                    </div>
                    <img src="img/<?php echo $data['image3'] ?>" alt="image3" width="80" height="80">
                  </div>

                  <div class="form-group">
                    <label for="image4">Image 4</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image4" name="image4" value="<?php echo $data['image4'] ?>"> 
                        <label class="custom-file-label" for="image4"><?php echo $data['image4'] ?>   Choose file</label>
                      </div>
                    </div>
                    <img src="img/<?php echo $data['image4'] ?>" alt="image4" width="80" height="80">
                  </div> -->

                </div>
                <!-- /.card-body -->
                  <!-- <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $data['id'] ?>"> -->
                
                  <!-- <input type="hidden" class="form-control" id="img1" name="img1"  value="<?php echo $data['image1'] ?>">
                  <input type="hidden" class="form-control" id="img2" name="img2"  value="<?php echo $data['image2'] ?>">
                  <input type="hidden" class="form-control" id="img3" name="img3"  value="<?php echo $data['image3'] ?>">
                  <input type="hidden" class="form-control" id="img4" name="img4"  value="<?php echo $data['image4'] ?>"> -->


                <div class="card-footer">
                  <!-- <button type="submit" class="btn btn-primary" value="Submit" name="edit_product_update">Update</button> -->
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


  


</body>
</html>


<?php 
}
 ?>