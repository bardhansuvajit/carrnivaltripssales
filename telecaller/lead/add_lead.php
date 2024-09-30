<?php 
  require_once '../db.php';
?>

 <?php 
  session_start();
  if(!isset($_SESSION["sess_admin_user"]))
  {
    header("location: login/index.php");
  } 
  else 
  {
  // echo $_SESSION["sess_admin_user"];
  $user=$_SESSION["sess_admin_user"];

  
  $query=$conn->query("SELECT * FROM carrnivaltrips_employee WHERE email='".$user."'" )  or die("query Failed");

  $data=$query->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>CarrnivalTrips</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/select2.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/dropzone.min.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body> 
    <div class="loader-wrapper"> 
      <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner-1"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <div class="page-header row">
        <div class="header-logo-wrapper col-auto">
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""/><img class="img-fluid for-dark" src="../assets/images/logo/logo_light.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700">Add Lead</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Lead</li>
              <li class="breadcrumb-item f-w-400 active">Add Lead</li>
            </ol>
          </nav>
        </div>
        <!-- Page Header Start-->
        
        <?php 
              require_once '../semantic_element/header.php';
        ?>


        <!-- Page Header Ends     -->
      </div>
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        

        <?php 
              require_once '../semantic_element/aside_nav.php';
        ?>


        <!-- Page Sidebar Ends-->

        
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add Lead</h4>
                  </div>
                  <div class="card-body add-post">
                    <form class="row needs-validation" novalidate="" method="POST"  action="php_action/add_lead.php" enctype="multipart/form-data">
                      <div class="col-sm-12">

                        <div class="mb-4">
                          <label for="name">Name:</label>
                          <input class="form-control" id="name" type="text" placeholder="" required="" name="name">
                          <div class="valid-feedback">Looks good!</div>
                        </div>

                        <div class="mb-4">
                          <label for="ph_no">Phone Number:</label>
                          <input class="form-control" id="ph_no" type="number" placeholder="" required="" name="ph_no">
                          <div class="valid-feedback">Looks good!</div>
                        </div>

                        <div class="mb-4">
                          <label for="whatsapp_no">Whatsapp Number:</label>
                          <input class="form-control" id="whatsapp_no" type="number" placeholder=""  name="whatsapp_no">
                          <div class="valid-feedback">Looks good!</div>
                        </div>


                        <div class="mb-4">
                          <label for="email">Email:</label>
                          <input class="form-control" id="email" type="email" placeholder=""  name="email">
                          <div class="valid-feedback">Looks good!</div>
                        </div>



                        <div class="mb-4">
                          <label for="lead_date">Lead Date</label>
                          <input class="form-control" id="lead_date" type="date" placeholder="" required="" name="lead_date">
                          <div class="valid-feedback">Looks good!</div>
                        </div>





                        <div class="mb-4">
                          <label for="destination">Select Destination:</label>
                          <select class="form-select form-control" id="destination" name="destination" placeholder=""   required> 
                            <option  class="" value="" selected disabled>Select Category...</option>
                            <?php
                              $destination=mysqli_query($conn,"Select DISTINCT destination from carrnivaltrips_sightseeing");
                              $row=mysqli_num_rows($destination);
                              if($row>0)
                              {
                                while ($row=mysqli_fetch_array($destination)) 
                                {

                              ?>
                                <option value="<?php echo $row['destination'] ?>"><?php echo $row['destination'] ?></option>

                              <?php }} ?>
                          </select>

                          <div class="valid-feedback">Looks good!</div>
                        </div>

                        
                        <div class="mb-4">
                          <label for="travel_date">Expected Date of Travel:</label>
                          <input class="form-control" id="travel_date" type="date" placeholder="" required="" name="travel_date">
                          <div class="valid-feedback">Looks good!</div>
                        </div>



                         <div class="mb-4">
                          <label for="no_of_day">Number of Day:</label>
                          <input class="form-control" id="no_of_day" type="text" placeholder="" required="" name="no_of_day">
                          <div class="valid-feedback">Looks good!</div>
                        </div>


                        <div class="mb-4">
                          <label for="no_of_night">Number Of Night:</label>
                          <input class="form-control" id="no_of_night" type="text" placeholder=""  name="no_of_night">
                          <div class="valid-feedback">Looks good!</div>
                        </div>



                        <div class="mb-4">
                          <label for="note">Notes:</label>
                          <!-- <input class="form-control" id="note" type="text" placeholder=""  name="note"> -->
                          <textarea class="form-control" id="note" type="text" placeholder=""  name="note"></textarea>
                          <div class="valid-feedback">Looks good!</div>
                        </div>






                        <div class="mb-4">
                          <label for="status">Select Stage:</label>
                          <select class="form-select form-control" id="status" name="status" placeholder=""   required> 
                            <option  class="" value="" selected disabled>Select Category...</option>
                            
                                <option value="Connected">Connected</option>
                                <option value="Follow Up">Follow Up</option>
                                <option value="Pipeline">Pipeline</option>
                                <option value="Negotiation">Negotiation</option>
                                <option value="Confirmed">Confirmed</option>
                                <option value="Lost">Lost</option>
                                <option value="Hot">Hot</option>
                                <option value="Warm">Warm</option>
                                <option value="Cold">Cold</option>
                              
                          </select>

                          <div class="valid-feedback">Looks good!</div>
                        </div>



                      
                        
                      </div>
                    
                   

                    <div class="btn-showcase text-end">
                      <input class="btn btn-primary" type="submit" value="Add" name="submit_add_lead">
                      <input class="btn btn-light" type="reset" value="Discard">
                    </div>

                  </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->


        <?php 
              require_once '../semantic_element/footer.php';
        ?>



      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/sidebar-pin.js"></script>
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <script src="../assets/js/header-slick.js"></script>
    <!-- calendar js-->
    <script src="../assets/js/dropzone/dropzone.js"></script>
    <script src="../assets/js/dropzone/dropzone-script.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
    <script src="../assets/js/editors/quill.js"></script>
    <script src="../assets/js/custom-add-product4.js"></script>
    <script src="../assets/js/form-validation-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/script1.js"></script>
    <!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->
    <!-- Plugin used-->
  </body>
</html>

<?php } ?>