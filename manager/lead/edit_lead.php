<?php 
  require_once '../db.php';
?>

<?php 
  session_start();
  if(!isset($_SESSION["sess_manager_user"]))
  {
    header("location: login/index.php");
  } 
  else 
  {
  // echo $_SESSION["sess_admin_user"];
  $user=$_SESSION["sess_manager_user"];

  
  $query=$conn->query("SELECT * FROM carrnivaltrips_employee WHERE email='".$user."'" )  or die("query Failed");

  $data=$query->fetch_assoc();



    // Fetch the unique ID from the URL
    $id = $_GET['id'];

    // Fetch the lead information from the database
    $lead_query = "SELECT * FROM carrnivaltrips_lead WHERE id='$id'";
    $lead_result = $conn->query($lead_query);


    if ($lead_result->num_rows > 0) {
        $lead_data = $lead_result->fetch_assoc();
    } else {
        echo "<script>alert('Lead not found!'); window.location.href='../index.php';</script>";
        exit();
    }



    if (isset($_POST['submit_edit_lead'])) {
        $name = $_POST['name'];
        $ph_no = $_POST['ph_no'];
        $whatsapp_no = $_POST['whatsapp_no'];
        $email = $_POST['email'];
        $destination = $_POST['destination'];
        $no_of_day = $_POST['no_of_day'];
        $no_of_night = $_POST['no_of_night'];
        $status = $_POST['status'];

        // Update the lead information in the database
        $update_query = "UPDATE carrnivaltrips_lead SET 
            name='$name', 
            ph_no='$ph_no', 
            whatsapp_no='$whatsapp_no', 
            email='$email', 
            destination='$destination', 
            no_of_day='$no_of_day', 
            no_of_night='$no_of_night', 
            status='$status' 
            WHERE id='$id'";

        if ($conn->query($update_query) === TRUE) {
            echo "<script>alert('Lead successfully updated!'); window.location.href='../index.php';</script>";
        } else {
            echo "<script>alert('Error while updating lead: " . $conn->error . "');</script>";
        }
    }

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
          <h4 class="f-w-700">Edit Lead</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Lead</li>
              <li class="breadcrumb-item f-w-400 active">Edit Lead</li>
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
                    <h4>Edit Lead</h4>
                  </div>
                  <div class="card-body Edit-post">
                    <form class="row needs-validation" novalidate="" method="POST"  action="php_action/edit_lead.php" enctype="multipart/form-data">
                      <div class="col-sm-12">

                        <div class="mb-4">
                          <label for="name">Name:</label>
                          <input class="form-control" id="name" type="text" placeholder="" required="" name="name" value="<?php echo $lead_data['name']; ?>" >
                          <div class="valid-feedback">Looks good!</div>
                        </div>

                        <div class="mb-4">
                          <label for="ph_no">Phone Number:</label>
                          <input class="form-control" id="ph_no" type="number" placeholder="" required="" name="ph_no" value="<?php echo $lead_data['ph_no']; ?>" >
                          <div class="valid-feedback">Looks good!</div>
                        </div>

                        <div class="mb-4">
                          <label for="whatsapp_no">Whatsapp Number:</label>
                          <input class="form-control" id="whatsapp_no" type="number" placeholder=""  name="whatsapp_no" value="<?php echo $lead_data['whatsapp_no']; ?>" >
                          <div class="valid-feedback">Looks good!</div>
                        </div>


                        <div class="mb-4">
                          <label for="email">Email:</label>
                          <input class="form-control" id="email" type="email" placeholder=""  name="email" value="<?php echo $lead_data['email']; ?>" >
                          <div class="valid-feedback">Looks good!</div>
                        </div>

                         <div class="mb-4">
                          <label for="lead_date">Lead Date</label>
                          <input class="form-control" id="lead_date" type="date" placeholder=""  name="lead_date"  value="<?php echo $lead_data['lead_date']; ?>"  >
                          <div class="valid-feedback">Looks good!</div>
                        </div>



                        <div class="mb-4">
                          <label for="destination">Destination:</label>
                          <input class="form-control" id="destination" type="email" placeholder=""  name="destination" value="<?php echo $lead_data['destination']; ?>" readonly >
                          <div class="valid-feedback">Looks good!</div>
                        </div>

                        <!-- <div class="mb-4">
                          <label for="destination">Select Destination:</label>
                          <select class="form-select form-control" id="destination" name="destination" placeholder=""   required> 
                            <?php
                                $destination_query = "SELECT DISTINCT destination FROM carrnivaltrips_sightseeing";
                                $destination_result = $conn->query($destination_query);
                                while ($row = $destination_result->fetch_assoc()) {
                                    $selected = ($row['destination'] == $lead_data['destination']) ? 'selected' : '';
                                    // echo "<option value='" . $row['destination'] . "' $selected>" . $row['destination'] . "</option>";
                                }
                            ?>
                          </select>

                          <div class="valid-feedback">Looks good!</div>
                        </div> -->



                         <div class="mb-4">
                          <label for="travel_date">Expected Date of Travel:</label>
                          <input class="form-control" id="travel_date" type="date" placeholder="" required="" name="travel_date" value="<?php echo $lead_data['travel_date']; ?>" >
                          <div class="valid-feedback">Looks good!</div>
                        </div>



                         <div class="mb-4">
                          <label for="no_of_day">Number of Day:</label>
                          <input class="form-control" id="no_of_day" type="text" placeholder="" required="" name="no_of_day" value="<?php echo $lead_data['no_of_day']; ?>" >
                          <div class="valid-feedback">Looks good!</div>
                        </div>


                        <div class="mb-4">
                          <label for="no_of_night">Number Of Night:</label>
                          <input class="form-control" id="no_of_night" type="text" placeholder=""  name="no_of_night" value="<?php echo $lead_data['no_of_night']; ?>" >
                          <div class="valid-feedback">Looks good!</div>
                        </div>



                        <div class="mb-4">
                          <label for="note">Notes:</label>
                          <!-- <input class="form-control" id="note" type="text" placeholder=""  name="note"> -->
                          <textarea class="form-control" id="note" type="text" placeholder=""  name="note" value="<?php echo $lead_data['note']; ?>"><?php echo $lead_data['note']; ?></textarea>
                          <div class="valid-feedback">Looks good!</div>
                        </div>






                        <div class="mb-4">
                          <label for="status">Select Status:</label>
                          <select class="form-select form-control" id="status" name="status" placeholder=""   required> 

                            <option value="Connected" <?php if ($lead_data['status'] == 'Connected') echo 'selected'; ?>>Connected</option>
                            <option value="Follow Up" <?php if ($lead_data['status'] == 'Follow Up') echo 'selected'; ?>>Follow Up</option>
                            <option value="Pipeline" <?php if ($lead_data['status'] == 'Pipeline') echo 'selected'; ?>>Pipeline</option>
                            <option value="Negotiation" <?php if ($lead_data['status'] == 'Negotiation') echo 'selected'; ?>>Negotiation</option>
                            <option value="Confirmed" <?php if ($lead_data['status'] == 'Confirmed') echo 'selected'; ?>>Confirmed</option>
                            <option value="Lost" <?php if ($lead_data['status'] == 'Lost') echo 'selected'; ?>>Lost</option>
                            <option value="Hot" <?php if ($lead_data['status'] == 'Hot') echo 'selected'; ?>>Hot</option>
                            <option value="Warm" <?php if ($lead_data['status'] == 'Warm') echo 'selected'; ?>>Warm</option>
                            <option value="Cold" <?php if ($lead_data['status'] == 'Cold') echo 'selected'; ?>>Cold</option>
                            
                                <!-- <option value="Connected">Connected</option>
                                <option value="Follow Up">Follow Up</option>
                                <option value="Pipeline">Pipeline</option>
                                <option value="Negotiation">Negotiation</option>
                                <option value="Confirmed">Confirmed</option>
                                <option value="Lost">Lost</option>
                                <option value="Hot">Hot</option>
                                <option value="Warm">Warm</option>
                                <option value="Cold">Cold</option> -->
                              
                          </select>

                          <div class="valid-feedback">Looks good!</div>
                        </div>


                        <input class="form-control" id="id" type="hidden" placeholder=""  name="id" value="<?php echo $lead_data['id']; ?>" >
                      
                        
                      </div>
                    
                   

                    <div class="btn-showcase text-end">
                      <input class="btn btn-primary" type="submit" value="Update" name="submit_edit_lead">
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
    <script src="../assets/js/custom-Edit-product4.js"></script>
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
