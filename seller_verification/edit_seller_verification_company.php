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
  // echo $_SESSION["sess_user_verifier"];
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

<body class="hold-transition sidebar-mini"  onload="getLocation()">
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
            <h1>Update Company Seller Verification</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Company Seller Verification</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>





    <!-- Main content -->
    <section class="content">


       <div class="card text-bg-info m-3" style="max-width: 18rem;">
                      <div class="card-header">Click the button to get your coordinates.</div>
                      <div class="card-body">
                        

                        <p class="card-text"> </p>

                          <button >Get My Location</button>

                          <div id="demo" class="card-text"></div>
                          <p id="location"></p>
                          <p id="mapurl"></p>

                      </div>
        </div>

        

      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Company Seller Verification</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <?php 

              if(isset($_GET['editid']))
              {
                $id=$_GET['editid'];

                $eid = $_GET['editid'];
                $row = mysqli_query($conn, "select * from fishfed_seller_ac_company where id='$eid' ");

                $data = $row->fetch_assoc();
                
                // echo '<pre>';
                // print_r($data);
                // echo '</pre>';

              }

               ?> 




              





              <form action="php_action/edit_seller_verification_company.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                    <label for="company_name" >Company Name</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" value="<?php echo $data['company_name'] ?>"   >
                  </div>

                  <div class="form-group">
                    <label for="owner_name" >Owner Name</label>
                    <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Owner Name" value="<?php echo $data['owner_name'] ?>"   >
                  </div>



                  
            
                  <div class="form-group">
                    <label for="ph_no">Phone Number</label>
                    <input type="number" class="form-control" id="ph_no" name="ph_no" placeholder="Phone Number" value="<?php echo $data['ph_no'] ?>" readonly>
                  </div>


                  <div class="form-group">
                    <label for="ph_no_request">Request to Change Phone Number</label>
                    <input type="number" class="form-control" id="ph_no_request" name="ph_no_request" placeholder="Phone Number" value="<?php echo $data['ph_no_request'] ?>">
                  </div>

                   <div class="form-group">
                    <label for="email">Email id</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email id" value="<?php echo $data['email'] ?>">
                  </div>


                  
                  <div class="form-group">
                    <label for="ph_no">Pan Card Number</label>
                    <input type="text" class="form-control" id="pan_card" name="pan_card" placeholder="Phone pan card" value="<?php echo $data['pan_card'] ?>">
                  </div>

                   <div class="form-group">
                    <label for="gst_number">GST Number</label>
                    <input type="text" class="form-control" id="gst_number" name="gst_number" placeholder="GST Number" value="<?php echo $data['gst_number'] ?>">
                  </div>



                  <div class="form-group">
                    <label for="trade_license_number" >Trade License Number </label>
                    <input type="text" class="form-control" id="trade_license_number" name="trade_license_number" placeholder="Trade License Number" value="<?php echo $data['trade_license_number'] ?>">
                  </div>


                  <div class="form-group">
                    <label for="incorporation_certificate_number" >Incorporation Certificate Number </label>
                    <input type="text" class="form-control" id="incorporation_certificate_number" name="incorporation_certificate_number" placeholder="Incorporation Certificate Number " value="<?php echo $data['incorporation_certificate_number'] ?>">
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
                    <label for="business_address">Address</label>
                    <textarea type="text" class="form-control" id="business_address" name="business_address" placeholder="Enter address" ><?php echo $data['business_address'] ?></textarea>
                  </div>
                 
                  
            
                  <!-- select -->
                 
                  


                 <div class="form-group">
                    <label for="img_pancard">Pancard Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="img_pancard" name="image1" value="<?php echo $data['img_pancard'] ?>" >
                        <label class="custom-file-label" for="img_pancard"><?php echo $data['img_pancard'] ?>  Choose file</label>
                      </div>
                    </div>
                    <img src="img/<?php echo $data['img_pancard'] ?>" alt="Pancard Image" width="80" height="80">
                  </div>

                  <div class="form-group">
                    <label for="img_trade_license">Trade License Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="img_trade_license" name="image2" value="<?php echo $data['img_trade_license'] ?>">
                        <label class="custom-file-label" for="img_trade_license" ><?php echo $data['img_trade_license'] ?>  Choose file</label>
                      </div>
                    </div>
                    <img src="img/<?php echo $data['img_trade_license'] ?>" alt="Trade License Image" width="80" height="80" >
                  </div>

                  <div class="form-group">
                    <label for="img_incorporation_certificate">Incorporation Certificate Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="img_incorporation_certificate" name="image5" value="<?php echo $data['img_incorporation_certificate'] ?>">
                        <label class="custom-file-label" for="img_incorporation_certificate" ><?php echo $data['img_incorporation_certificate'] ?>  Choose file</label>
                      </div>
                    </div>
                    <img src="img/<?php echo $data['img_incorporation_certificate'] ?>" alt="Incorporation Certificate Image" width="80" height="80" >
                  </div>



                  <div class="form-group">
                    <label for="img_seller_photo">Seller Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="img_seller_photo" name="image3" value="<?php echo $data['img_seller_photo'] ?>">
                        <label class="custom-file-label" for="img_seller_photo"><?php echo $data['img_seller_photo'] ?>  Choose file</label>
                      </div>
                    </div>
                    <img src="img/<?php echo $data['img_seller_photo'] ?>" alt="Seller Image" width="80" height="80">
                  </div>

                  <div class="form-group">
                    <label for="img_agreement">Agreement Image/PDF</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="img_agreement" name="image4" value="<?php echo $data['img_agreement'] ?>"> 
                        <label class="custom-file-label" for="img_agreement"><?php echo $data['img_agreement'] ?>   Choose file</label>
                      </div>
                    </div>
                    <img src="img/<?php echo $data['img_agreement'] ?>" alt="Agreement Image/PDF" width="80" height="80">
                  </div> 


                  <div class="form-group">
                    <label for="verify_location" >Verification Time Location</label><br>
                   

                    <input type="text" class="form-control" id="verify_location" name="verify_location" placeholder="Get Location" value="<?php echo $data['verify_location'] ?>"  readonly>
                  </div>  

                  </div>



                  <div class="form-group">
                        <label for="verfication_status">Verification Status</label>
                        <select class="form-control" id="verfication_status" name="verfication_status"> 
                          <option value="<?php echo $data['verfication_status'] ?>"><?php echo $data['verfication_status'] ?></option>                     
                          <option value="Complete">Complete</option>
                          <option value="Processing">Processing</option>
                          <option value="Pending">Pending</option>


                            
                        </select>
                  </div> 





                </div>
                <!-- /.card-body -->
                  <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $data['id'] ?>">
                
                  <input type="hidden" class="form-control" id="img1" name="img1"  value="<?php echo $data['img_pancard'] ?>">
                  <input type="hidden" class="form-control" id="img2" name="img2"  value="<?php echo $data['img_trade_license'] ?>">
                  <input type="hidden" class="form-control" id="img5" name="img5"  value="<?php echo $data['img_trade_license'] ?>">

                  <input type="hidden" class="form-control" id="img3" name="img3"  value="<?php echo $data['img_seller_photo'] ?>">
                  <input type="hidden" class="form-control" id="img4" name="img4"  value="<?php echo $data['img_agreement'] ?>">


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Submit" name="edit_seller_verification_company">Update</button> 
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 
<script>
var x = document.getElementById("demo");

function getLocation() {
     x.innerHTML = "Please Wait.. We are loading your location";
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
  


    document.getElementById("verify_location").value ="Latitude: " + position.coords.latitude + 
    " Longitude: " + position.coords.longitude; 



       
       
  
  
}
</script>




  


</body>
</html>


<?php 
}
 ?>