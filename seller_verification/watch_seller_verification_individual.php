<?php 


require_once('../db.php');
session_start();


 ?>


<?php 
  if(!isset($_SESSION["sess_user_verifier"]))
  {
    header("location:login/index.php");
  } 
  else 
  {
  // echo $_SESSION["sess_user_farmer"];
  $ph_no=$_SESSION["sess_user_verifier"];

  
  $query=$conn->query("SELECT * FROM fishfed_seller_verification_team WHERE ph_no='".$ph_no."'" )  or die("query Failed");

  $data=$query->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>AdminLTE 3 | Blank Page</title> -->
  <title>Fishfed | Verifier Admin</title>

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
            <h1>Update Individual Seller Verification</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Individual Seller Verification</li>
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
                <h3 class="card-title">Update Individual Seller Verification</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php 

              if(isset($_GET['editid']))
              {
                $id=$_GET['editid'];

                $eid = $_GET['editid'];
                $row = mysqli_query($conn, "select * from fishfed_seller_ac_individual where id='$eid' ");

                $data = $row->fetch_assoc();
                
                // echo '<pre>';
                // print_r($data);
                // echo '</pre>';

              }

               ?> 




              





              <form action="php_action/edit_product.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <label for="farmer_name" >Name</label>
                    <input type="text" class="form-control" id="farmer_name" name="farmer_name" placeholder="Enter Name" value="<?php echo $data['farmer_name'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="ph_no">Phone Number</label>
                    <input type="number" class="form-control" id="ph_no" name="ph_no" placeholder="Phone Number" value="<?php echo $data['ph_no'] ?>">
                  </div>

                   <div class="form-group">
                    <label for="email">Email id</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email id" value="<?php echo $data['email'] ?>">
                  </div>




                  <div class="form-group">
                    <label for="farmer_name" >Aadhar Card Number </label>
                    <input type="text" class="form-control" id="aadhar_card" name="aadhar_card" placeholder="Enter Aadhar Card Number" value="<?php echo $data['aadhar_card'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="ph_no">Pan Card Number</label>
                    <input type="text" class="form-control" id="pan_card" name="pan_card" placeholder="Phone pan card" value="<?php echo $data['pan_card'] ?>">
                  </div>

                   <div class="form-group">
                    <label for="email">GST Number</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="GST Number" value="<?php echo $data['gst_number'] ?>">
                  </div>




                  <div class="form-group">
                    <label for="pincode" >Pin Code</label>
                    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter Name" value="<?php echo $data['pincode'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="country">country</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="country" value="<?php echo $data['country'] ?>">
                  </div>

                   <div class="form-group">
                    <label for="state">state</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="Enter state" value="<?php echo $data['state'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="district">district</label>
                    <input type="text" class="form-control" id="district" name="district" placeholder="District" value="<?php echo $data['district'] ?>">
                  </div>



                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea type="text" class="form-control" id="address" name="address" placeholder="Enter address" ><?php echo $data['address'] ?></textarea>
                  </div>




                  

                   <div class="form-group">
                    <label for="privacy_policy">Privacy policy</label>
                    <input type="text" class="form-control" id="privacy_policy" name="privacy_policy" placeholder="Privacy policy" value="<?php echo $data['privacy_policy'] ?>">
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