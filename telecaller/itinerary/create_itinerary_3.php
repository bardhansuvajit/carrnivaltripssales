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

  if($_GET['id'])
  {
    $getid=$_GET['id'];
  }

  $query_1=$conn->query("SELECT * FROM carrnivaltrips_lead WHERE id='".$getid."'" )  or die("query Failed");
  $lead_data=$query_1->fetch_assoc();

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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatable-extension.css">
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
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends--> 
    <div class="loader-wrapper"> 
      <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner-1"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <div class="page-header row">
        <div class="header-logo-wrapper col-auto">
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""/><img class="img-fluid for-dark" src="../assets/images/logo/logo_light.png" alt=""/></a></div>
        </div>
        <div class="col-4 col-xl-4 page-title">
          <h4 class="f-w-700">Autofill Datatables</h4>
          <nav>
            <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
              <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
              <li class="breadcrumb-item f-w-400">Extension Data Tables</li>
              <li class="breadcrumb-item f-w-400 active">Autofill Datatables</li>
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
              <div class="col-sm-7">
                  

                  <div class="row">
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-header pb-0 card-no-border">
                            <h4>Sightseeing Location</h4>
                            <p style="margin-top: 5px;"><strong>Destination : <?php echo $lead_data['destination']; ?></strong></p>
                          </div>
                          <div class="card-body">

                              <div class="mb-4" style="width:200px">
                                <input type="hidden" name="lead_id" id="lead_id" value="<?php echo $lead_data['id']; ?>">
                                <label for="day"><strong>Select Day:</strong></label>
                                <select class="form-select form-control" id="day" name="day" placeholder=""   required > 
                                  <!-- <option  class="" value="" selected disabled>Select Day...</option> -->
                                  <?php

                                    for ($i=1; $i <= $lead_data['no_of_day'] ; $i++) 
                                    { 
                                                                   
                                    ?>
                                      <option value="<?php echo $i ?>">Day <?php echo $i ?></option>

                                    <?php  } ?>
                                </select>

                                <div class="valid-feedback">Looks good!</div>
                              </div>
                              
                              <div> 

                                <!-- <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; "> 
                                      <input class="form-check-input" type="checkbox" name="destination_Categories" data-filter="destination_Categories" value="" id="destination_Categories_" >

                                      <label class="form-check-label" for="destination_Categories_">All</label>
                                    </span>  -->

                                    <?php
                                    $product_1=mysqli_query($conn,"Select DISTINCT location_wise from carrnivaltrips_sightseeing_points where destination='".$lead_data['destination']. "'order by id ");
                                    $cnt=1;
                                      $row_1=mysqli_num_rows($product_1);
                                      if($row_1>0)
                                      {
                                        while ($row_1=mysqli_fetch_array($product_1)) 
                                        {

                                      ?>
                                      <!-- <li class="" style="border:1px solid #7A70BA; border-radius:5px;"> 
                                        <input class="form-check-input checkbox-shadow destination_Categories" type="checkbox" name="destination_Categories" data-filter="destination_Categories" value="<?php echo $row_1['location_wise'];?>" id="destination_Categories_<?php echo $row_1['location_wise'];?>"  >

                                        <label class="form-check-label" for="destination_Categories_<?php echo $row_1['location_wise'];?>"><span><?php  echo $row_1['location_wise'];?> </span></label>
                                      </li> -->

                                    <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin: 3px 2px;"> 
                                      <input class="form-check-input" type="checkbox" name="sightseeing_loc_Categories" data-filter="sightseeing_loc_Categories" value="<?php echo $row_1['location_wise'];?>" id="sightseeing_loc_Categories<?php echo $row_1['location_wise'];?>" >

                                      <label class="form-check-label" for="sightseeing_loc_Categories<?php echo $row_1['location_wise'];?>"><?php  echo $row_1['location_wise'];?> </label>
                                    </span> 
                                  


                                    

                                    <?php }} ?>

                              </div>

                          </div>
                        </div>
                      </div>
                  </div>


                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header pb-0 card-no-border">
                          <h4>Sightseeing</h4>
                        </div>
                        <div class="card-body">
                            <div id="sightseeing_point_Container">
                            </div>
                        </div>


                        <div class="card-header pb-0 card-no-border">
                              <h4>Sightseeing Image</h4>
                        </div>
                        <div class="card-body">
                          <div id="sightseeing_img_Container">
                          </div>
                        </div>




                        <div class="card-header pb-0 card-no-border mt-3">
                              <h4>Hotel Type</h4>
                        </div>

                        <div class="card-body" > 

                                <!-- <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; "> 
                                      <input class="form-check-input" type="checkbox" name="destination_Categories" data-filter="destination_Categories" value="" id="destination_Categories_" >

                                      <label class="form-check-label" for="destination_Categories_">All</label>
                                    </span>  -->

                                    <?php
                                    $product_1=mysqli_query($conn,"Select DISTINCT category_wise from carrnivaltrips_hotel where destination='".$lead_data['destination']. "'order by id ");
                                    $cnt=1;
                                      $row_1=mysqli_num_rows($product_1);
                                      if($row_1>0)
                                      {
                                        while ($row_1=mysqli_fetch_array($product_1)) 
                                        {

                                      ?>
                                      <!-- <li class="" style="border:1px solid #7A70BA; border-radius:5px;"> 
                                        <input class="form-check-input checkbox-shadow destination_Categories" type="checkbox" name="destination_Categories" data-filter="destination_Categories" value="<?php echo $row_1['category_wise'];?>" id="destination_Categories_<?php echo $row_1['category_wise'];?>"  >

                                        <label class="form-check-label" for="destination_Categories_<?php echo $row_1['category_wise'];?>"><span><?php  echo $row_1['category_wise'];?> </span></label>
                                      </li> -->

                                    <span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin: 3px 2px;"> 
                                      <input class="form-check-input" type="checkbox" name="sightseeing_hotel_Categories" data-filter="sightseeing_hotel_Categories" value="<?php echo $row_1['category_wise'];?>" id="sightseeing_hotel_Categories<?php echo $row_1['category_wise'];?>" >

                                      <label class="form-check-label" for="sightseeing_hotel_Categories<?php echo $row_1['category_wise'];?>"><?php  echo $row_1['category_wise'];?> </label>
                                    </span>                              


                                    

                                    <?php }} ?>

                              </div>

                              



                              <!-- <div class="card-header pb-0 card-no-border mt-3">
                                    <h4>Hotel</h4>
                              </div>

                              <div class="card-body">
                                <div id="sightseeing_hotel_Container">
                                </div>
                              </div> -->


                              


                              <div class="card-header pb-0 card-no-border mt-3">
                                    <h4>Hotel Rooms</h4>
                              </div>

                              <div class="card-body">
                                <div id="sightseeing_hotel_rooms_Container">
                                </div>
                              </div>




                        <div class="card-footer">
                          <input type="submit" name="update_lead_itinerary" value="Add" class="btn btn-primary" onclick="update_lead_itinerary()">
                        </div>

                      </div>
                    </div>
                  </div>

              </div>


              <div class="col-sm-5">
                 <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header pb-0 card-no-border">
                          <h4>Output</h4>
                          <p style="margin-top: 5px;"><strong>Destination : <?php echo $lead_data['destination']; ?></strong></p>
                          <p ><strong>Package : <?php echo $lead_data['no_of_day']; ?>D/ <?php echo $lead_data['no_of_night']; ?>N</strong></p>
                        </div>
                        <div class="card-body">
                            
                            <div id="">
                              
                            </div>

                        </div>
                      </div>
                    </div>


                    <?php

                      for ($j=1; $j <= $lead_data['no_of_day'] ; $j++) 
                      { 
                                                                   
                      ?>

                        <div class="col-sm-12">
                          <div class="card">
                            <div class="card-header pb-0 card-no-border">
                              <h4>Day <?php echo $j ?></h4>
                            </div>
                            <div class="card-body">
                                
                                <div id="">
                                   <?php
                                    $product_2=mysqli_query($conn,"Select *  from carrnivaltrips_lead_itinerary where day_no =$j and lead_id=$getid order by id ");
                                    $cnt=1;
                                      $row_2=mysqli_num_rows($product_2);
                                      if($row_2>0)
                                      {
                                        while ($row_2=mysqli_fetch_array($product_2)) 
                                        {

                                      ?>
                                      

                                  
                                   <div class="form-check form-check-inline bg-primary  m-1"  style="padding:5px 15px 5px 15px; border-radius:5px" >
                                    <!-- <input class="form-check-input me-2" id="lead_sightseeing_point_<?php // echo $row_2['id'] ; ?>"  type="checkbox" data-filter="lead_sightseeing_point" value="<?php // echo $row_2['name'] ; ?>"> --><label class="form-check-label" for="lead_sightseeing_point_<?php echo $row_2['id'] ; ?>"><?php echo $row_2['name'] ; ?></label><span class=" bg-light " style="padding:2px 5px; border-radius:5px; margin-left: 10px; cursor: pointer;"><a  onclick="del_lead_sightseeing_point(<?php echo $row_2['id'] ; ?>)"><i class="icon-trash" style="color:red;"></i></a>
                                  </span>
                                  </div>



                                  

                                    <?php }} ?>
                                  
                                </div>

                            </div>

                            <!-- <p id="demo"></p> -->



                           




                            <div class="card-header pb-0 card-no-border">
                              <h4>Sightseeing Images</h4>
                            </div>
                            <div class="card-body mb-3">
                                
                                <div id="" class="row">
                                   <?php
                                    $product_3=mysqli_query($conn,"Select *  from carrnivaltrips_lead_itinerary_sightseeing_img where day_no =$j and lead_id=$getid order by id ");
                                    $cnt=1;
                                      $row_3=mysqli_num_rows($product_3);
                                      if($row_3>0)
                                      {
                                        while ($row_3=mysqli_fetch_array($product_3)) 
                                        {

                                      ?>
                                      

                                  
                                   <div class="form-check form-check-inline bg-primary  m-1 col-sm-4"  style="padding:5px 15px 5px 15px; border-radius:5px;" >
                                    <!-- <input class="form-check-input me-2" id="lead_sightseeing_img_<?php // echo $row_3['id'] ; ?>"  type="checkbox" data-filter="lead_sightseeing_img" value="<?php // echo $row_3['name'] ; ?>"> --><label class="form-check-label" for="lead_sightseeing_img_<?php echo $row_3['id'] ; ?>"><img src="../../sightseeing/sightseeing_img/<?php echo $row_3['name'] ; ?>" style="width: 100%; hight:100px; border-radius: 5px; margin-top:3px;" height="80px" ><span class="orm-check form-check-inline bg-light " style="padding:2px 5px; border-radius:5px;  cursor: pointer; position: relative; left: 105px; "><a  onclick="del_lead_sightseeing_img(<?php echo $row_3['id'] ; ?>)"><i class="icon-trash" style="color:red;"></i></a></span></label>
                                   </div>
                                   
                                    <?php }} ?>
                                  
                                </div>
                            </div>






                            <div class="card-header pb-0 card-no-border ">
                              <h4>Hotel</h4>
                            </div>
                            <div class="card-body mb-3">
                                
                                <div id="" class="row">

                                  

                                   <?php
                                    $product_4=mysqli_query($conn,"Select *  from carrnivaltrips_lead_itinerary_hotel where day_no =$j and lead_id=$getid order by id ");
                                    $cnt=1;
                                      $row_4=mysqli_num_rows($product_4);
                                      if($row_4>0)
                                      {

                                        ?>


                                        <table class="table table-bordered table-hover" id="dynamic_field">
                                          <tr class="bg-light" >
                                            <th  ><label  class="form-label">Location</label></th>
                                            <th  ><label  class="form-label">Hotel Name</label></th>

                                            <th  ><label  class="form-label">Room Name</label></th>
                                            <th  ><label  class="form-label">AC</label></th>
                                            <th  ><label  class="form-label">No of Bed</label></th>
                                            <th  ><label  class="form-label"></label></th>

                                              
                                          </tr>

                                        <?php
                                        while ($row_4=mysqli_fetch_array($product_4)) 
                                        {

                                      ?>
                                      

                                  
                                  <!--  <div class="form-check form-check-inline bg-primary  m-1 col-sm-4"  style="padding:5px 15px 5px 15px; border-radius:5px;" >
                                    <label class="form-check-label" for="lead_sightseeing_img_<?php echo $row_4['id'] ; ?>"><img src="../../hotel/img/<?php echo $row_4['img1'] ; ?>" style="width: 100%; hight:100px; border-radius: 5px; margin-top:3px;" height="80px" ><span class="orm-check form-check-inline bg-light " style="padding:2px 5px; border-radius:5px;  cursor: pointer; position: relative; left: 105px; "><a  onclick="del_lead_sightseeing_img(<?php echo $row_4['id'] ; ?>)"><i class="icon-trash" style="color:red;"></i></a></span></label>
                                   </div> -->


                                   <label class="form-check-label" for="sightseeing_hotel_rooms'. $id .'">
                                    <tr id="row'.$id.'" class="row_item">
                                      <td><?php echo $row_4['location_wise'] ; ?></td>
                                      <td><?php echo $row_4['hotel_name'] ; ?></td>

                                      <td><?php echo $row_4['room_name'] ; ?></td>
                                      <td><?php echo $row_4['ac_type'] ; ?></td>
                                      <td><?php echo $row_4['bed'] ; ?></td>
                                      <td>
                                        <span class="orm-check form-check-inline bg-light " style="padding:2px 5px; border-radius:5px;  cursor: pointer; position: relative;  "><a  onclick="del_lead_sightseeing_hotel(<?php echo $row_4['id'] ; ?>)"><i class="icon-trash" style="color:red;"></i></a></span>

                                      </td>

                                      
                                    </tr></label></table>
                                   
                                    <?php }} ?>
                                  
                                </div>
                            </div>




                          </div>
                        </div>


                    <?php  } ?>


                  </div>
              </div>         

            </div>
            









            <!-- <div class="row">
              
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0 card-no-border">
                    <h4>Product Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="dt-ext table-responsive theme-scrollbar">
                      <table class="display" id="export-button">
                        <thead>
                          <tr>
                            <th>Entries</th>
                            <th>Seller Name</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Discription</th>

                            <th>Img1</th>
                            <th>Img2</th>
                            <th>Img3</th>

                            <th>Action</th>
                          </tr> 
                        </thead>
                        <tbody> -->

                           <?php
                            // $blog=mysqli_query($conn,"Select * from fishfed_seller_product where seller_role='admin' ");
                            // $cnt=1;
                            // $row=mysqli_num_rows($blog);
                            // if($row>0)
                            // {
                            //   while ($row=mysqli_fetch_array($blog)) 
                            //   {

                            ?>

                            <!--  <tr>
                                    <td><?php echo $cnt;?></td>
                                    
                                    <td><?php  echo $data['name'];?></td>
                                    <td><?php  echo $row['p_name'];?></td>
                                    <td><?php  echo $row['p_price'];?></td>
                                    <td><?php  echo $row['p_category'];?></td>
                                    <td><?php  echo $row['p_description'];?></td>

                                    <td> <img class="img-fluid table-avtar" src="../../img/<?php echo $row['p_img1'];?>" alt="Product Image1"></td>
                                    <td> <img class="img-fluid table-avtar" src="../../img/<?php echo $row['p_img2'];?>" alt="Product Image2"></td>
                                    <td> <img class="img-fluid table-avtar" src="../../img/<?php echo $row['p_img3'];?>" alt="Product Image3"></td>

                                   
                                    
                                    <td>
                                       <ul class="action"> 
                                          <li class="edit"> <a href="edit_blog.php?editid=<?php echo htmlentities($row['id']);?>"><i class="icon-pencil-alt"></i></a></li>
                                          <li class="delete" ><a href="php_action/delete_product.php?delid=<?php echo htmlentities($row['id']);?>" onclick="return confirm('Do you really want to Delete ?');"><i class="icon-trash"></i></a></li>
                                      </ul>
                                    </td>  
                                </tr> -->

                                <?php 
                                //   $cnt=$cnt+1;
                                //   } 
                                // } 
                                // else 
                                // {
                                  ?>
                                    <!-- <tr>
                                        <th style="text-align:center; color:red;" colspan="11">No Record Found</th>
                                    </tr> -->
                                  
                                <?php 
                                // } 
                                ?> 


                          

                       <!--  </tbody>
                       
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->


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
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/jszip.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
    <script src="../assets/js/datatable/datatable-extension/custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/script1.js"></script>
    <!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->
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



            // const classFilter = className => {
            //       const filter = [];
            //       $('.' + sightseeing_hotel + ':checked').each(function () {
            //           filter.push($(this).val());
            //       });
            //       return filter;
            //   }


         



            const filterProduct = page => 
            {
                

                // const destination_Categories_1 = checkboxFilter('destination_Categories');
                const sightseeing_loc_Categories = checkboxFilter('sightseeing_loc_Categories');
                const sightseeing_hotel_Categories = checkboxFilter('sightseeing_hotel_Categories');
                const sightseeing_hotel = checkboxFilter('sightseeing_hotel');
                // const sightseeing_hotel = classFilter('sightseeing_hotel');



                // const productType = checkboxFilter('productType');
                
                // console.log(destination_Categories_1);
                console.log(sightseeing_loc_Categories);
                console.log(sightseeing_hotel_Categories);
                console.log(sightseeing_hotel);







                $.ajax({
                    url: "fetch_sightseeing_point.php",
                    method: "POST",
                    data: {
                        page: page,
                        // destination_Categories: destination_Categories_1,
                        sightseeing_loc_Categories: sightseeing_loc_Categories

                        
                    },
                    beforeSend:function () {
                        $("#sightseeing_point_Container").html(`<div class="card min-h-400px col-lg-12">
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
                            $("#sightseeing_point_Container").html(products);
                            $("#pagination").html(pagination);
                        } catch (e) {
                            alert(e);
                        }
                    },
                    error: function () {
                        alert("Error in sending request");
                    }
                })


                $.ajax({
                    url: "fetch_sightseeing_img.php",
                    method: "POST",
                    data: {
                        page: page,
                        // destination_Categories: destination_Categories_1,
                        sightseeing_loc_Categories: sightseeing_loc_Categories

                        
                    },
                    beforeSend:function () {
                        $("#sightseeing_img_Container").html(`<div class="card min-h-400px col-lg-12">
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
                            $("#sightseeing_img_Container").html(products);
                            $("#pagination").html(pagination);
                        } catch (e) {
                            alert(e);
                        }
                    },
                    error: function () {
                        alert("Error in sending request");
                    }
                })




                $.ajax({
                    url: "fetch_sightseeing_hotel.php",
                    method: "POST",
                    data: {
                        page: page,
                        sightseeing_loc_Categories: sightseeing_loc_Categories,
                        sightseeing_hotel_Categories: sightseeing_hotel_Categories

                        
                    },
                    beforeSend:function () {
                        $("#sightseeing_hotel_Container").html(`<div class="card min-h-400px col-lg-12">
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
                            $("#sightseeing_hotel_Container").html(products);
                            $("#pagination").html(pagination);
                        } catch (e) {
                            alert(e);
                        }
                    },
                    error: function () {
                        alert("Error in sending request");
                    }
                })



                $.ajax({
                    url: "fetch_sightseeing_hotel_rooms.php",
                    method: "POST",
                    data: {
                        page: page,
                        sightseeing_loc_Categories: sightseeing_loc_Categories,
                        sightseeing_hotel_Categories: sightseeing_hotel_Categories,
                        sightseeing_hotel: sightseeing_hotel


                        
                    },
                    beforeSend:function () {
                        $("#sightseeing_hotel_rooms_Container").html(`<div class="card min-h-400px col-lg-12">
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
                            $("#sightseeing_hotel_rooms_Container").html(products);
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




    <script type="text/javascript">
      

      function update_lead_itinerary()
      {

        (() => { 

          
           

            $('input[type=checkbox]').on("click", () => filterProduct(1));
            // $('category').on("click", () => filterProduct(1));

            $("#day").change(function () 
                {
                    day= $(this).val();
                    // console.log($(this).val());

                    filterProduct(1);

                });


            const checkboxFilter = selector => {
                const filter = [];
                $('[data-filter=' + selector + ']:checked').each(function () {
                    filter.push($(this).val());
                });
                return filter;
            }






            const filterProduct = page => 
            {
                

                // const destination_Categories_1 = checkboxFilter('destination_Categories');sightseeing_img
                const sightseeing_point = checkboxFilter('sightseeing_point');
                const sightseeing_img = checkboxFilter('sightseeing_img');
                // const sightseeing_hotel = checkboxFilter('sightseeing_hotel');
                const sightseeing_hotel_rooms = checkboxFilter('sightseeing_hotel_rooms');



                var day =$('#day').val();
                var lead_id =$('#lead_id').val();


                // const productType = checkboxFilter('productType');
                
                // console.log(destination_Categories_1);
                // console.log(sightseeing_point);







                $.ajax({
                    url: "update_lead_itinerary.php",
                    method: "POST",
                    data: {
                        page: page,
                        // destination_Categories: destination_Categories_1,
                        day: day,
                        lead_id : lead_id,
                        sightseeing_point: sightseeing_point

                        
                    },
                    beforeSend:function () {
                        $("#update_lead_itinerary").html(`<div class="card min-h-400px col-lg-12">
                                                    <div class="card-body justify-align-center">
                                                        <div class="spinner-border text-success" role="status">
                                                    </div>
                                                </div>`);
                        $("#pagination").html('');
                      },

                      success: function (res) {
                        try {

                            location.reload();
                            
                            // alert("Data successfully Update");

                        } catch (e) {
                            alert(e);
                            location.reload();
                        }
                    },
                    error: function () {
                        alert("Error in sending request");
                    }
                })



                 $.ajax({
                    url: "update_lead_itinerary_sightseeing_img.php",
                    method: "POST",
                    data: {
                        page: page,
                        // destination_Categories: destination_Categories_1,
                        day: day,
                        lead_id : lead_id,
                        sightseeing_img: sightseeing_img

                        
                    },
                    

                      success: function (res) {
                        try {

                            location.reload();
                            
                            // alert("Data successfully Update");

                        } catch (e) {
                            alert(e);
                            location.reload();
                        }
                    },
                    error: function () {
                        alert("Error in sending request");
                    }
                })



                  $.ajax({
                    url: "update_lead_itinerary_hotel.php",
                    method: "POST",
                    data: {
                        page: page,
                        day: day,
                        lead_id : lead_id,
                        sightseeing_hotel_rooms : sightseeing_hotel_rooms

                        
                    },
                      success: function (res) {
                        try {

                            location.reload();
                            
                            // alert("Data successfully Update");

                        } catch (e) {
                            alert(e);
                            location.reload();
                        }
                    },
                    error: function () {
                        alert("Error in sending request");
                    }
                })



            }



            filterProduct(1);
        })();

      }
    </script>



    <script>
        function del_lead_sightseeing_point(sightseeing_point_id) {
          let text = "Do you really want to Delete ?";
          if (confirm(text) == true) {


             $.ajax({
                    url: "delete_lead_sightseeing_point.php",
                    method: "POST",
                    data: {
                       
                        sightseeing_point_id: sightseeing_point_id

                        
                    },
                   
                      success: function (res) {
                        try {

                            location.reload();
                            
                            // alert("Data successfully Update");

                        } catch (e) {
                            alert(e);
                            location.reload();
                        }
                    },
                    error: function () {
                        alert("Error in sending request");
                    }
                })




            text = id;
          } else {
            
          }
          // document.getElementById("demo").innerHTML = text;
        }
    </script>


    <script>
        function del_lead_sightseeing_img(sightseeing_img_id) {
          let text = "Do you really want to Delete ?";
          if (confirm(text) == true) {


             $.ajax({
                    url: "delete_lead_sightseeing_img.php",
                    method: "POST",
                    data: {
                       
                        sightseeing_img_id: sightseeing_img_id

                        
                    },
                   
                      success: function (res) {
                        try {

                            location.reload();
                            
                            // alert("Data successfully Update");

                        } catch (e) {
                            alert(e);
                            location.reload();
                        }
                    },
                    error: function () {
                        alert("Error in sending request");
                    }
                })




            text = id;
          } else {
            
          }
          // document.getElementById("demo").innerHTML = text;
        }
    </script>


    <script>
        function del_lead_sightseeing_hotel(sightseeing_hotel_id) {
          let text = "Do you really want to Delete ?";
          if (confirm(text) == true) {


             $.ajax({
                    url: "delete_lead_sightseeing_hotel.php",
                    method: "POST",
                    data: {
                       
                        sightseeing_hotel_id: sightseeing_hotel_id

                        
                    },
                   
                      success: function (res) {
                        try {

                            location.reload();
                            
                            // alert("Data successfully Update");

                        } catch (e) {
                            alert(e);
                            location.reload();
                        }
                    },
                    error: function () {
                        alert("Error in sending request");
                    }
                })




            text = id;
          } else {
            
          }
          // document.getElementById("demo").innerHTML = text;
        }
    </script>



  </body>
</html>

<?php } ?>