<?php 
  require_once '../db.php';
?>

 <?php 
  session_start();
  if(!isset($_SESSION["sess_admin_user"]))
  {
    // echo "adddminnnnn";
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
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>TeleCaller </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-range-picker/flatpickr.min.css">

    
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/datatable-extension.css">

    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

   
    
    <!-- Plugins css start2-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/prism.css">
    <!-- Plugins css Ends-->



    <style type="text/css">
      .red{
        background-color: red;
      }

      .green{
        background-color: green;
      }


      .round_shape{
        /*border: 1px solid gray;
        width: 20px;
        height: 20px;*/
      /* border-radius: 50%;*/
      }
    </style>
    

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
          <div class="logo-wrapper"><a href="index.php"><img class="img-fluid for-light" src="assets/images/logo/logo.png" alt=""/><img class="img-fluid for-dark" src="assets/images/logo/logo_light.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700">Timeline</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="index.php"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Dashboard</li>
              <li class="breadcrumb-item f-w-400 active">Timeline</li>
            </ol>
          </nav>
        </div>


        <!-- Page Header Start-->
        <?php 
              require_once '../semantic_element/header.php';
        ?>
        <!-- Page Header Ends                              -->
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
          <div class="container-fluid default-dashboard"> 
            <div class="row widget-grid">

                <div class="col-12">
                  <div class="card">
                    


                      <div class="col-xl-12 box-col-12 notification main-timeline">
                        <div class="card height-equal">
                          <div class="card-header"> 
                            <h4>Basic Timeline </h4>
                            <p class="f-m-light mt-1">
                               Use <code>timeline-dot-*</code> class to a square style timeline.</p>
                          </div>
                          <div class="card-body dark-timeline basic-timeline">
                            <ul> 
                              <li class="d-flex">
                                <div class="timeline-dot-primary"></div>
                                <div class="w-100 ms-3">
                                  <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">2 Feb 2024</span><span>7:00 AM </span></p>
                                  <h6 class="mb-0">Conference with client<span class="dot-notification"></span></h6>
                                  <p class="f-light">At noon today, there will be a meeting with a UK client.</p>
                                </div>
                              </li>
                              <li class="d-flex">
                                <div class="timeline-dot-secondary"></div>
                                <div class="w-100 ms-3">
                                  <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">22 March 2024</span><span>3:45 PM</span></p>
                                  <h6 class="mb-0">Discussion with marketing Team<span class="dot-notification"></span></h6>
                                  <p class="f-light">discussion with the marketing staff on the success of the most recent project</p>
                                </div>
                              </li>
                              <li class="d-flex">
                                <div class="timeline-dot-success"></div>
                                <div class="w-100 ms-3">
                                  <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">16 May 2024</span><span>1:22 AM</span></p>
                                  <h6 class="mb-0">Invest in a new hosting plan<span class="dot-notification"></span></h6>
                                  <p class="f-light">today at 2 pm AM, purchase a new hosting package as agreed upon with the management team.</p>
                                </div>
                              </li>
                              <li class="d-flex">
                                <div class="timeline-dot-warning"></div>
                                <div class="w-100 ms-3">
                                  <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">23 Nov 2024</span><span>6:56 AM</span></p>
                                  <h6 class="mb-0">Discussion with designer team<span class="dot-notification"></span></h6>
                                  <p class="f-light">discussion with the designer employee on the success of the most recent project.</p>
                                </div>
                              </li>
                              <li class="d-flex">
                                <div class="timeline-dot-info"></div>
                                <div class="w-100 ms-3">
                                  <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">12 Dec 2024</span><span>12:05 AM</span></p>
                                  <h6 class="mb-0">Discussion with new theme launch <span class="dot-notification"></span></h6>
                                  <p class="f-light">discussion with the how many themes made in our portfolio.</p>
                                </div>
                              </li>
                              <li class="d-flex">
                                <div class="timeline-dot-danger"></div>
                                <div class="w-100 ms-3">
                                  <p class="d-flex justify-content-between mb-2"><span class="date-content light-background">02 Jan 2024</span><span>6:56 AM</span></p>
                                  <h6 class="mb-0">Purchase new chairs for office <span class="dot-notification"></span></h6>
                                  <p class="f-light">online purchase new chairs for office                       </p>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                           

   
                            
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

      <script src="../assets/js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <script src="../assets/js/scrollbar/simplebar.js"></script>
      <script src="../assets/js/scrollbar/custom.js"></script>
      <!-- latest jquery-->
      <script src="assets/js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <script src="assets/js/scrollbar/simplebar.js"></script>
      <script src="assets/js/scrollbar/custom.js"></script>
      <!-- Sidebar jquery-->
      <script src="assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <script src="assets/js/sidebar-menu.js"></script>
      <script src="assets/js/sidebar-pin.js"></script>
      <script src="assets/js/slick/slick.min.js"></script>
      <script src="assets/js/slick/slick.js"></script>
      <script src="assets/js/header-slick.js"></script>
      <script src="assets/js/chart/apex-chart/apex-chart.js"></script>
      <script src="assets/js/chart/apex-chart/stock-prices.js"></script>
      <script src="assets/js/chart/apex-chart/moment.min.js"></script>
      <script src="assets/js/notify/bootstrap-notify.min.js"></script>
      <!-- calendar js-->
      <script src="assets/js/dashboard/default.js"></script>
      <script src="assets/js/notify/index.js"></script>
      <!-- <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script> -->
      <script src="assets/js/datatable/datatables/datatable.custom.js"></script>
      <script src="assets/js/datatable/datatables/datatable.custom1.js"></script>
      <script src="assets/js/datepicker/date-range-picker/moment.min.js"></script>
      <script src="assets/js/datepicker/date-range-picker/datepicker-range-custom.js"></script>
      <script src="assets/js/typeahead/handlebars.js"></script>
      <script src="assets/js/typeahead/typeahead.bundle.js"></script>
      <script src="assets/js/typeahead/typeahead.custom.js"></script>
      <script src="assets/js/typeahead-search/handlebars.js"></script>
      <script src="assets/js/typeahead-search/typeahead-custom.js"></script>
      <script src="assets/js/height-equal.js"></script>
      <script src="assets/js/animation/wow/wow.min.js"></script>
      <!-- Plugins JS Ends-->

        <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/jszip.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
      <script src="assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
      <script src="assets/js/datatable/datatable-extension/custom.js"></script>
      <script src="assets/js/tooltip-init.js"></script>
      <!-- Plugins JS Ends-->


      <!-- Theme js-->
      <script src="assets/js/script.js"></script>
      <script src="assets/js/script1.js"></script>
      <!-- <script src="assets/js/theme-customizer/customizer.js"></script> -->
      <!-- Plugin used-->
      <script>new WOW().init();</script>




      <script src="../assets/js/prism/prism.min.js"></script>
      <script src="../assets/js/clipboard/clipboard.min.js"></script>
      <script src="../assets/js/custom-card/custom-card.js"></script>
      <script src="../assets/js/custom-btn-ripple.js"></script>
      <!-- calendar js-->
      <script src="../assets/js/tooltip-init.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
   
      <script src="../assets/js/theme-customizer/customizer.js"></script>
      <!-- Plugin used-->



    




  </body>
</html>

<?php } ?>