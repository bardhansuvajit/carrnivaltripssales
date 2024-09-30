<?php 


include('db.php');
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


  $row1=mysqli_query($conn,"select * from carrrnivaltrips_package ");
  $row2=mysqli_num_rows($row1);


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>AdminLTE 3 | Blank Page</title> -->
  <title>CarrnivalTrips | Admin</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="dist/img/logo1.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">



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
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <?php 

      include_once 'navbar.php';

     ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php 

    include_once 'aside.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Page</li>
            </ol>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row mt-3">

              <!-- <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3><?php // echo $row2;?></h3>

                    <p>Total Package</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-map-marked"></i>
                  </div>
                  <a href="package/display_package_info.php" class="small-box-footer">
                    View <i class="fas fa-arrow-circle-right"></i>
                  </a>
                </div>
              </div> -->
              <!-- ./col -->



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
                                 
                                  <?php
                                  $product_1=mysqli_query($conn,"Select DISTINCT destination from carrnivaltrips_sightseeing order by id ");
                                  $cnt=1;
                                    $row_1=mysqli_num_rows($product_1);
                                    if($row_1>0)
                                    {
                                      while ($row_1=mysqli_fetch_array($product_1)) 
                                      {

                                    ?>
                                 

                                  <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle;  margin-right: 2px; "> 
                                    <input class="form-check-input" type="checkbox" name="destination_Categories" data-filter="destination_Categories" value="<?php echo $row_1['destination'];?>" id="destination_Categories_<?php echo $row_1['destination'];?>" >

                                    <label class="form-check-label" for="destination_Categories_<?php echo $row_1['destination'];?>"><?php  echo $row_1['destination'];?> </label>
                                  </span> 
                                


                                  

                                  <?php }} ?>       
                          </div>

                          <!-- <div class="card-header">
                            <h4>Status</h4> 
                          </div> -->

                          <div class="form-check card-body">
                                 
                                  <?php
                                  // $product_11=mysqli_query($conn,"Select DISTINCT status from carrnivaltrips_lead order by id ");
                                  // $cnt=1;
                                  //   $row_11=mysqli_num_rows($product_11);
                                  //   if($row_11>0)
                                  //   {
                                  //     while ($row_11=mysqli_fetch_array($product_11)) 
                                  //     {

                                    ?>
                                 

                                  <!-- <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin-right: 2px;"> 
                                    <input class="form-check-input" type="checkbox" name="status" data-filter="status" value="<?php //echo $row_11['status'];?>" id="status<?php //echo $row_11['status'];?>" >

                                    <label class="form-check-label" for="status<?php // echo $row_11['status'];?>"><?php // echo $row_11['status'];?> </label>
                                  </span>  -->
                                


                                  

                                  <?php // }} ?> 



                                  <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin-right: 2px; margin-bottom: 5px;"> 
                                    <input class="form-check-input" type="checkbox" name="status" data-filter="status" value="Connected" id="status_Connected" >

                                    <label class="form-check-label" for="status_Connected">Connected</label>
                                  </span> 




                                  <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin-right: 2px; margin-bottom: 5px; "> 
                                    <input class="form-check-input" type="checkbox" name="status" data-filter="status" value="Follow Up" id="status_FollowUp" >

                                    <label class="form-check-label" for="status_FollowUp">Follow Up</label>
                                  </span> 



                                  <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin-right: 2px; margin-bottom: 5px;"> 
                                    <input class="form-check-input" type="checkbox" name="status" data-filter="status" value="Pipeline" id="status_Pipeline" >

                                    <label class="form-check-label" for="status_Pipeline">Pipeline</label>
                                  </span> 




                                  <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin-right: 2px; margin-bottom: 5px; "> 
                                    <input class="form-check-input" type="checkbox" name="status" data-filter="status" value="Negotiation" id="status_Negotiation" >

                                    <label class="form-check-label" for="status_Negotiation">Negotiation</label>
                                  </span> 





                                  <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin-right: 2px; margin-bottom: 5px; "> 
                                    <input class="form-check-input" type="checkbox" name="status" data-filter="status" value="Confirmed" id="status_Confirmed" >

                                    <label class="form-check-label" for="status_Confirmed">Confirmed</label>
                                  </span> 



                                  <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin-right: 2px; margin-bottom: 5px; "> 
                                    <input class="form-check-input" type="checkbox" name="status" data-filter="status" value="Lost" id="status_Lost" >

                                    <label class="form-check-label" for="status_Lost">Lost</label>
                                  </span> 



                                  <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin-right: 2px; margin-bottom: 5px; "> 
                                    <input class="form-check-input" type="checkbox" name="status" data-filter="status" value="Hot" id="status_Hot" >

                                    <label class="form-check-label" for="status_Hot">Hot</label>
                                  </span> 



                                  <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin-right: 2px; margin-bottom: 5px; "> 
                                    <input class="form-check-input" type="checkbox" name="status" data-filter="status" value="Warm" id="status_Warm" >

                                    <label class="form-check-label" for="status_Warm">Warm</label>
                                  </span> 


                                  <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin-right: 2px; margin-bottom: 5px; "> 
                                    <input class="form-check-input" type="checkbox" name="status" data-filter="status" value="Cold" id="status_Cold" >

                                    <label class="form-check-label" for="status_Cold">Cold</label>
                                  </span> 
                          </div>
                        </div>
                      </div>
                    <!-- </div> -->
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header pb-0 card-no-border">
                          <h4>Leads Details</h4>
                        </div>
                        <div class="card-body">
                          <div class="dt-ext table-responsive theme-scrollbar">
                            <table class="display" id="export-button">
                              <thead>
                                <tr>
                                  <th style="width:5%;">Entries</th>
                                  <th style="width:5%;">Unique Id</th>
                                  <th style="width:15%; text-align: center;" >Name</th>
                                  <th style="width:15%; text-align: center;" >Contact</th>
                                  <th style="text-align: center;" >Package</th>
                                  <th style="width:10%;" >Status</th>                            

                                  <th >Action</th>
                                  <!-- <th>Activity</th> -->

                                </tr>
                              </thead>
                              <tbody id="Leads_Container">

                                                       

                              </tbody>
                             
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

                   
                  </div>
                </div>
            </div>
              <!-- Container-fluid Ends-->
        </div>
        


      </div>        

      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!-- footer -->
    <?php 

      include_once 'footer.php';

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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->






 <script src="assets/js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <script src="assets/js/scrollbar/simplebar.js"></script>
      <script src="assets/js/scrollbar/custom.js"></script>
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




      <script src="assets/js/prism/prism.min.js"></script>
      <script src="assets/js/clipboard/clipboard.min.js"></script>
      <script src="assets/js/custom-card/custom-card.js"></script>
      <script src="assets/js/custom-btn-ripple.js"></script>







<script type="text/javascript">
        $(document).ready(() =>{  


        

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
                const status = checkboxFilter('status');

                // const productType = checkboxFilter('productType');
                
                // console.log(sort);




                $.ajax({
                    url: "fetch_leads.php",
                    method: "POST",
                    data: {
                        page: page,
                        destination_Categories: destination_Categories,
                        status: status

                        
                    },
                    beforeSend:function () {
                        $("#Leads_Container").html(`<div class="card min-h-400px col-lg-12">
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
                            $("#Leads_Container").html(products);
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

        });
      </script>


      <script type="text/javascript">
        (() => { 


          setInterval(function(){

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
                const status = checkboxFilter('status');
                // const productType = checkboxFilter('productType');
                
                // console.log(sort);




                $.ajax({
                    url: "fetch_leads.php",
                    method: "POST",
                    data: {
                        page: page,
                        destination_Categories: destination_Categories,
                        status: status

                        
                    },
                    beforeSend:function () {
                        $("#Leads_Container").html(`<div class="card min-h-400px col-lg-12">
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
                            $("#Leads_Container").html(products);
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

          }, 20000); // Check every 20 seconds
        })();
      </script>


</body>
</html>

<?php 
  }
 ?>
