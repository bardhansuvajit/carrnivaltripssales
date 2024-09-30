<?php 
  require_once 'db.php';
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
    <title>TeleCaller Login</title>
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
          <h4 class="f-w-700">Dashboard</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="index.php"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Dashboard</li>
              <li class="breadcrumb-item f-w-400 active">Default</li>
            </ol>
          </nav>
        </div>


        <!-- Page Header Start-->
        <?php 
              require_once 'header.php';
        ?>
        <!-- Page Header Ends                              -->
      </div>


      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php 
              require_once 'aside_nav.php';
        ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard"> 
            <div class="row widget-grid">

              <!-- <div class="row g-3"> -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4>Destination</h4>
                      
                    </div>

                    <div class="form-check card-body">
                            <ul class="checkbox-wrapper mb-4">
                              <li style="border:1px solid #7A70BA; border-radius:5px;"> 
                                <input class="form-check-input checkbox-shadow" id="checkbox-icon1" type="checkbox" checked="">
                                <label class="form-check-label" for="checkbox-icon1"><span>All </span></label>
                              </li>
                            </ul>

                            <?php
                            $product_1=mysqli_query($conn,"Select DISTINCT destination from carrnivaltrips_sightseeing order by id ");
                            $cnt=1;
                              $row_1=mysqli_num_rows($product_1);
                              if($row_1>0)
                              {
                                while ($row_1=mysqli_fetch_array($product_1)) 
                                {

                              ?>
                              <!-- <li class="" style="border:1px solid #7A70BA; border-radius:5px;"> 
                                <input class="form-check-input checkbox-shadow destination_Categories" type="checkbox" name="destination_Categories" data-filter="destination_Categories" value="<?php echo $row_1['destination'];?>" id="destination_Categories_<?php echo $row_1['destination'];?>"  >

                                <label class="form-check-label" for="destination_Categories_<?php echo $row_1['destination'];?>"><span><?php  echo $row_1['destination'];?> </span></label>
                              </li> -->

                             <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px;"> 
                            <input class="form-check-input" type="checkbox" name="destination_Categories" data-filter="destination_Categories" value="<?php echo $row_1['destination'];?>" id="destination_Categories_<?php echo $row_1['destination'];?>" >

                            <label class="form-check-label" for="destination_Categories_<?php echo $row_1['destination'];?>"><?php  echo $row_1['destination'];?> </label>
                            </span> 
                          


                            

                            <?php }} ?>
                              
                            
                    </div>


                  
                  </div>
                </div>
              <!-- </div> -->

              <div class="col-12">
                  <div class="card" >
                    <div class="card-header">
                      <h4>Sightseeing Location</h4>
                      
                    </div>

                    <div class="form-check card-body"  id="sightseeing_location_Container">
                            <!-- <ul class="checkbox-wrapper mb-4" id="sightseeing_location_Container">
                                                    
                              
                              
                            </ul> -->
                    </div>


                  
                  </div>
                </div>

            



              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Sightseeing </h4>
                    
                    
                  </div>

                  
                  <div class="card-body toast-rtl">
                    
                    <?php

                            // $sightseeing_destination='MeghaLaya';
                            // $sightseeing_location='Guwahati';

                            $product_3=mysqli_query($conn,"Select * from carrnivaltrips_sightseeing_points order by id ");

                            $cnt=1;
                              $row_3=mysqli_num_rows($product_3);
                              if($row_3>0)
                              {
                                while ($row_3=mysqli_fetch_array($product_3)) 
                                {

                              ?>
                                <!-- <span class="toast default-show-toast align-items-center text-light bg-primary border-0 fade show w-auto mb-1 mr-2" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                                  <div class="d-flex justify-content-between">
                                    <div class="toast-body"><?php  // echo $row_3['name'];?></div>
                                    <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                                  </div>
                                </span> -->


                      <?php }} ?>

                      <div id="sightseeing_point_Container">
                        
                      </div>

                     



                    
                    
                  </div>
                </div>
              </div>



              <!-- <div class="col-xl-5 col-md-6 proorder-xl-1 proorder-md-1">  
                <div class="card profile-greeting p-0">
                  <div class="card-body">
                    <div class="img-overlay">
                      <h1>Good day, Lena Miller</h1>
                      <p>Welcome to the Mofi family! We are delighted that you have visited our dashboard.</p><a class="btn" href="index.html">Go Premium</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6 proorder-xl-2 proorder-md-2">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top">
                      <h4>Opening of leaflets</h4>
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="userdropdown17" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown17"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pb-0 opening-box">
                    <div class="d-flex align-items-center gap-2"> 
                      <h2>$ 12,463</h2>
                      <div class="d-flex">
                        <p class="mb-0 up-arrow"><i class="fa fa-arrow-up"></i></p><span class="f-w-500 font-success">+ 20.08%</span>
                      </div>
                    </div>
                    <div id="growthchart"> </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-5 proorder-xl-3 proorder-md-3"> 
                <div class="card shifts-char-box">
                  <div class="card-header card-no-border pb-0">
                    <div class="header-top"> 
                      <h4>Shifts Overview  </h4>
                      <div class="d-flex align-items-center gap-3"> 
                        <div class="location-menu dropdown">
                          <button class="btn dropdown-toggle" id="locationdropdown" data-bs-toggle="dropdown" aria-expanded="false">Location</button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown"><a class="dropdown-item" href="#">Address Selection</a><a class="dropdown-item" href="#">Geo-Menu</a><a class="dropdown-item" href="#">Place Picker</a></div>
                        </div>
                        <div class="dropdown icon-dropdown">
                          <button class="btn dropdown-toggle" id="userdropdown16" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown16"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row"> 
                      <div class="col-5"> 
                        <div class="overview" id="shifts-overview"></div>
                      </div>
                      <div class="col-7 shifts-overview">
                        <div class="d-flex gap-2"> 
                          <div class="flex-shrink-0"><span class="bg-primary"> </span></div>
                          <div class="flex-grow-1"> 
                            <h6>New</h6>
                          </div><span>86</span>
                        </div>
                        <div class="d-flex gap-2"> 
                          <div class="flex-shrink-0"><span class="bg-secondary"></span></div>
                          <div class="flex-grow-1"> 
                            <h6>Waiting for approval</h6>
                          </div><span>210</span>
                        </div>
                        <div class="d-flex gap-2"> 
                          <div class="flex-shrink-0"><span class="bg-warning"> </span></div>
                          <div class="flex-grow-1"> 
                            <h6>Assigned</h6>
                          </div><span>95</span>
                        </div>
                        <div class="d-flex gap-2"> 
                          <div class="flex-shrink-0"><span class="bg-tertiary"></span></div>
                          <div class="flex-grow-1"> 
                            <h6>Cancelled</h6>
                          </div><span>37</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->


              
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        
        <!-- footer start-->

       <?php 
              require_once 'footer.php';
        ?>
      </div>
    </div>
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
    <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
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








      <script type="text/javascript">
        (() => { 


            

            $('input[type=checkbox]').on("click", () => filterProduct(1));
            // $('category').on("click", () => filterProduct(1));

                  


            const checkboxFilter = selector => {
                const filter = [];
                $('[data-filter=' + selector + ']:checked').each(function () {
                    filter.push($(this).val());
                });
                return filter;
            }






            const filterProduct = page => 
            {
                

                const destination_Categories = checkboxFilter('destination_Categories');
                // const productType = checkboxFilter('productType');
                
                // console.log(sort);




                $.ajax({
                    url: "fetch_sightseeing_location.php",
                    method: "POST",
                    data: {
                        page: page,
                        destination_Categories: destination_Categories
                        
                    },
                    beforeSend:function () {
                        $("#sightseeing_location_Container").html(`<div class="card min-h-400px col-lg-12">
                                                    <div class="card-body justify-align-center">
                                                        <div class="spinner-border text-success" role="status">
                                                    </div>
                                                </div>`);
                        $("#pagination").html('');
                      },

                      success: function (res) {
                        try {
                             res = JSON.parse(res)
                            const products = res.products;
                            const pagination = res.pagination;
                            $("#sightseeing_location_Container").html(products);
                            $("#pagination").html(pagination);
                        } catch (e) {
                            alert(e);
                        }
                    },
                    error: function () {
                        alert("Error in sending request");
                    }
                })


            }



            filterProduct(1);


        })();
      </script>


      

      <script src="js/fetch_sightseeing.js"></script>




  </body>
</html>

<?php } ?>