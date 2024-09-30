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
                                      <input class="form-check-input sightseeing_loc_Categories" type="checkbox" name="sightseeing_loc_Categories" data-filter="sightseeing_loc_Categories" value="<?php echo $row_1['location_wise'];?>" id="sightseeing_loc_Categories<?php echo $row_1['location_wise'];?>" >

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
                                      <input class="form-check-input sightseeing_hotel_Categories" type="checkbox" name="sightseeing_hotel_Categories" data-filter="sightseeing_hotel_Categories" value="<?php echo $row_1['category_wise'];?>" id="sightseeing_hotel_Categories<?php echo $row_1['category_wise'];?>" >

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
                        </div>
                         -->



                        <div class="card-header pb-0 card-no-border mt-3">
                                    <h4>Hotel</h4>
                              </div>

                              <div class="card-body">
                                <div id="sightseeing_hotel_Container_new">
                                </div>
                        </div>


                              


                       <!--  <div class="card-header pb-0 card-no-border mt-3">
                                    <h4>Hotel Rooms</h4>
                        </div>

                        <div class="card-body">
                                <div id="sightseeing_hotel_rooms_Container">
                                </div>
                        </div> -->


                        <div class="card-header pb-0 card-no-border mt-3">
                                    <h4>Hotel Rooms</h4>
                        </div>

                        <div class="card-body">
                              <table class="table table-bordered table-hover" id="dynamic_field">
                                <thead id="sightseeing_hotel_rooms_Container_new_thead">
                                  
                                </thead>
                                <tbody id="sightseeing_hotel_rooms_Container_new">
                                </tbody>
                              </table>
                        </div>





                        <div class="card-header pb-0 card-no-border mt-3">
                                    <h4>Activity</h4>
                        </div>

                        <div class="card-body">
                              <table class="table table-bordered table-hover" id="dynamic_field">
                                <thead id="sightseeing_Activity_Container_thead">
                                  
                                </thead>
                                <tbody id="sightseeing_Activity_Container">
                                </tbody>
                              </table>
                        </div>



                        <div class="card-header pb-0 card-no-border mt-3">
                                    <h4>Special Experiences</h4>
                        </div>

                        <div class="card-body">
                              <table class="table table-bordered table-hover" id="dynamic_field">
                                <thead id="sightseeing_Special_Experiences_Container_thead">
                                  
                                </thead>
                                <tbody id="sightseeing_Special_Experiences_Container">
                                </tbody>
                              </table>
                        </div>



                        <div class="card-header pb-0 card-no-border mt-3">
                                    <h4>Best Scenic Places</h4>
                        </div>

                        <div class="card-body">
                              <table class="table table-bordered table-hover" id="dynamic_field">
                                <thead id="sightseeing_Best_Scenic_Places_Container_thead">
                                  
                                </thead>
                                <tbody id="sightseeing_Best_Scenic_Places_Container">
                                </tbody>
                              </table>
                        </div>


                        <div class="card-header pb-0 card-no-border mt-3">
                                    <h4>Adventure Activity</h4>
                        </div>

                        <div class="card-body">
                              <table class="table table-bordered table-hover" id="dynamic_field">
                                <thead id="sightseeing_Adventure_Activity_Container_thead">
                                  
                                </thead>
                                <tbody id="sightseeing_Adventure_Activity_Container">
                                </tbody>
                              </table>
                        </div>




                        <div class="card-header pb-0 card-no-border mt-3">
                                    <h4>Car</h4>
                        </div>

                        <div class="card-body">
                              <table class="table table-bordered table-hover" id="dynamic_field">
                                <thead id="sightseeing_car_Container_thead">
                                  
                                </thead>
                                <tbody id="sightseeing_car_Container">
                                </tbody>
                              </table>
                                
                        </div>





                        <div class="card-header pb-0 card-no-border mt-3">
                                    <h4>Ferry</h4>
                        </div>

                        <div class="card-body">
                              <table class="table table-bordered table-hover" id="dynamic_field">
                                <thead id="sightseeing_Ferry_Container_thead">
                                  
                                </thead>
                                <tbody id="sightseeing_Ferry_Container">
                                </tbody>
                              </table>
                                
                        </div>






                        <div class="card-footer">
                          <input type="submit" name="update_lead_itinerary" value="Add" class="btn btn-primary" onclick="update_lead_itinerary()">
                        </div>

                      </div>
                    </div>
                  </div>

              </div>





                <!-- OUTPUT -->

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

                                    <!-- sightseeing point -->
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

                           



                                    <!-- Sightseeing Images -->
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





                                    <!-- Hotel -->
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
                                            

                                        
                                      

                                          <tr id="row'.$id.'" class="row_item">
                                            <td><?php echo $row_4['location_wise'] ; ?></td>
                                            <td><?php echo $row_4['hotel_name'] ; ?></td>

                                            <td><?php echo $row_4['room_name'] ; ?></td>
                                            <td><?php echo $row_4['ac_type'] ; ?></td>
                                            <td><?php echo $row_4['bed'] ; ?></td>
                                            <td>
                                              <span class="orm-check form-check-inline bg-light " style="padding:2px 5px; border-radius:5px;  cursor: pointer; position: relative;  "><a  onclick="del_lead_sightseeing_hotel(<?php echo $row_4['id'] ; ?>)"><i class="icon-trash" style="color:red;"></i></a></span>

                                            </td>

                                            
                                          </tr>
                                         
                                          <?php }} ?>

                                          </table>
                                        
                                      </div>
                                  </div>





                                   <!-- car -->      
                                  <?php
                                            $product_12=mysqli_query($conn,"Select *  from carrnivaltrips_lead_car_rent where day_no =$j and lead_id=$getid order by id ");
                                            $cnt=1;
                                              $row_12=mysqli_num_rows($product_12);
                                              if($row_12>0)
                                              {

                                                ?>
                                                <div class="card-header pb-0 card-no-border ">
                                                  <h4>Car</h4>
                                                </div>
                                                <div class="card-body mb-3">
                                                    
                                                <div id="" class="row">


                                                <table class="table table-bordered table-hover" id="dynamic_field">
                                                  <tr class="bg-light" >
                                                    <th  ><label  class="form-label">Car</label></th>
                                                    <th  ><label  class="form-label">Pickup location</label></th>
                                                    <th  ><label  class="form-label">Drop Location</label></th>
                                                    <th  ><label  class="form-label">price</label></th>
                                                    <th  ><label  class="form-label"></label></th>

                                                      
                                                  </tr>

                                                <?php
                                                while ($row_12=mysqli_fetch_array($product_12)) 
                                                {

                                              ?>
                                              

                                          
                                        

                                            <tr id="row'.$id.'" class="row_item">
                                              <td><?php echo $row_12['car_type'] ; ?></td>
                                              <td><?php echo $row_12['sightseeing_point'] ; ?>&nbsp;(&nbsp;<?php echo $row_12['location_wise'] ; ?>&nbsp;)</td>

                                              <td><?php echo $row_12['drop_sightseeing_point'] ; ?>&nbsp;(&nbsp;<?php echo $row_12['drop_location_wise'] ; ?>&nbsp; )</td>
                                              <td><?php echo $row_12['price'] ; ?></td>
                                              <td>
                                                <span class="orm-check form-check-inline bg-light " style="padding:2px 5px; border-radius:5px;  cursor: pointer; position: relative;  "><a  onclick="del_lead_sightseeing_car(<?php echo $row_12['id'] ; ?>)"><i class="icon-trash" style="color:red;"></i></a></span>

                                              </td>

                                              
                                            </tr>
                                           
                                            <?php }?>

                                            </table>
                                          
                                        </div>
                                    </div>

                                  <?php } ?>



                                  <!-- Ferry -->      
                                  <?php
                                            $product_13=mysqli_query($conn,"Select *  from carrnivaltrips_lead_ferry_rent where day_no =$j and lead_id=$getid order by id ");
                                            $cnt=1;
                                              $row_13=mysqli_num_rows($product_13);
                                              if($row_13>0)
                                              {

                                                ?>
                                                <div class="card-header pb-0 card-no-border ">
                                                  <h4>Ferry</h4>
                                                </div>
                                                <div class="card-body mb-3">
                                                    
                                                <div id="" class="row">


                                                <table class="table table-bordered table-hover" id="dynamic_field">
                                                  <tr class="bg-light" >
                                                    <th  ><label  class="form-label">Ferry</label></th>
                                                    <th  ><label  class="form-label">Pickup location</label></th>
                                                    <th  ><label  class="form-label">Drop Location</label></th>
                                                    <th  ><label  class="form-label">price</label></th>
                                                    <th  ><label  class="form-label"></label></th>

                                                      
                                                  </tr>

                                                <?php
                                                while ($row_13=mysqli_fetch_array($product_13)) 
                                                {

                                              ?>
                                              

                                          
                                        

                                            <tr id="row'.$id.'" class="row_item">
                                              <td><?php echo $row_13['ferry_type'] ; ?></td>
                                              <td><?php echo $row_13['sightseeing_point'] ; ?>&nbsp;(&nbsp;<?php echo $row_13['location_wise'] ; ?>&nbsp;)</td>

                                              <td><?php echo $row_13['drop_sightseeing_point'] ; ?>&nbsp;(&nbsp;<?php echo $row_13['drop_location_wise'] ; ?>&nbsp; )</td>
                                              <td><?php echo $row_13['price'] ; ?></td>
                                              <td>
                                                <span class="orm-check form-check-inline bg-light " style="padding:2px 5px; border-radius:5px;  cursor: pointer; position: relative;  "><a  onclick="del_lead_sightseeing_ferry(<?php echo $row_13['id'] ; ?>)"><i class="icon-trash" style="color:red;"></i></a></span>

                                              </td>

                                              
                                            </tr>
                                           
                                            <?php }?>

                                            </table>
                                          
                                        </div>
                                    </div>

                                  <?php } ?>





                                  <!-- activities -->      
                                  <?php
                                            $product_14=mysqli_query($conn,"Select *  from carrnivaltrips_lead_destination_activities where day_no =$j and lead_id=$getid order by id ");
                                            $cnt=1;
                                              $row_14=mysqli_num_rows($product_14);
                                              if($row_14>0)
                                              {

                                                ?>
                                                <div class="card-header pb-0 card-no-border ">
                                                  <h4>Activity</h4>
                                                </div>
                                                <div class="card-body mb-3">
                                                    
                                                <div id="" class="row">


                                                <table class="table table-bordered table-hover" id="dynamic_field">
                                                  <tr class="bg-light" >
                                                    <th  ><label  class="form-label">name</label></th>
                                                    <th  ><label  class="form-label">location_wise</label></th>
                                                    <th  ><label  class="form-label">price</label></th>
                                                    <th  ><label  class="form-label"></label></th>

                                                      
                                                  </tr>

                                                <?php
                                                while ($row_14=mysqli_fetch_array($product_14)) 
                                                {

                                              ?>
                                              

                                          
                                        

                                            <tr id="row'.$id.'" class="row_item">
                                              <td><?php echo $row_14['name'] ; ?></td>
                                              <td><?php echo $row_14['location_wise'] ; ?></td>
                                              <td><?php echo $row_14['price'] ; ?></td>

                                              <td>
                                                <span class="orm-check form-check-inline bg-light " style="padding:2px 5px; border-radius:5px;  cursor: pointer; position: relative;  "><a  onclick="del_lead_sightseeing_activities(<?php echo $row_14['id'] ; ?>)"><i class="icon-trash" style="color:red;"></i></a></span>

                                              </td>

                                              
                                            </tr>
                                           
                                            <?php }?>

                                            </table>
                                          
                                        </div>
                                    </div>

                                  <?php } ?>




                                  <!-- Special_Experiences -->      
                                  <?php
                                            $product_15=mysqli_query($conn,"Select *  from carrnivaltrips_lead_destination_special_experiences where day_no =$j and lead_id=$getid order by id ");
                                            $cnt=1;
                                              $row_15=mysqli_num_rows($product_15);
                                              if($row_15>0)
                                              {

                                                ?>
                                                <div class="card-header pb-0 card-no-border ">
                                                  <h4>Special_Experiences</h4>
                                                </div>
                                                <div class="card-body mb-3">
                                                    
                                                <div id="" class="row">


                                                <table class="table table-bordered table-hover" id="dynamic_field">
                                                  <tr class="bg-light" >
                                                    <th  ><label  class="form-label">name</label></th>
                                                    <th  ><label  class="form-label">location_wise</label></th>
                                                    <th  ><label  class="form-label">price</label></th>
                                                    <th  ><label  class="form-label"></label></th>

                                                      
                                                  </tr>

                                                <?php
                                                while ($row_15=mysqli_fetch_array($product_15)) 
                                                {

                                              ?>
                                              

                                          
                                        

                                            <tr id="row'.$id.'" class="row_item">
                                              <td><?php echo $row_15['name'] ; ?></td>
                                              <td><?php echo $row_15['location_wise'] ; ?></td>
                                              <td><?php echo $row_15['price'] ; ?></td>

                                              <td>
                                                <span class="orm-check form-check-inline bg-light " style="padding:2px 5px; border-radius:5px;  cursor: pointer; position: relative;  "><a  onclick="del_lead_sightseeing_special_experiences(<?php echo $row_15['id'] ; ?>)"><i class="icon-trash" style="color:red;"></i></a></span>

                                              </td>

                                              
                                            </tr>
                                           
                                            <?php }?>

                                            </table>
                                          
                                        </div>
                                    </div>

                                  <?php } ?>





                                  <!-- Best_Scenic_Places -->      
                                  <?php
                                            $product_16=mysqli_query($conn,"Select *  from carrnivaltrips_lead_destination_best_scenic_places where day_no =$j and lead_id=$getid order by id ");
                                            $cnt=1;
                                              $row_16=mysqli_num_rows($product_16);
                                              if($row_16>0)
                                              {

                                                ?>
                                                <div class="card-header pb-0 card-no-border ">
                                                  <h4>Best_Scenic_Places</h4>
                                                </div>
                                                <div class="card-body mb-3">
                                                    
                                                <div id="" class="row">


                                                <table class="table table-bordered table-hover" id="dynamic_field">
                                                  <tr class="bg-light" >
                                                    <th  ><label  class="form-label">name</label></th>
                                                    <th  ><label  class="form-label">location_wise</label></th>
                                                    <th  ><label  class="form-label">price</label></th>
                                                    <th  ><label  class="form-label"></label></th>

                                                      
                                                  </tr>

                                                <?php
                                                while ($row_16=mysqli_fetch_array($product_16)) 
                                                {

                                              ?>
                                              

                                          
                                        

                                            <tr id="row'.$id.'" class="row_item">
                                              <td><?php echo $row_16['name'] ; ?></td>
                                              <td><?php echo $row_16['location_wise'] ; ?></td>
                                              <td><?php echo $row_16['price'] ; ?></td>

                                              <td>
                                                <span class="orm-check form-check-inline bg-light " style="padding:2px 5px; border-radius:5px;  cursor: pointer; position: relative;  "><a  onclick="del_lead_sightseeing_best_scenic_places(<?php echo $row_16['id'] ; ?>)"><i class="icon-trash" style="color:red;"></i></a></span>

                                              </td>

                                              
                                            </tr>
                                           
                                            <?php }?>

                                            </table>
                                          
                                        </div>
                                    </div>

                                  <?php } ?>






                                  <!-- Adventure_Activity -->      
                                  <?php
                                            $product_17=mysqli_query($conn,"Select *  from carrnivaltrips_lead_destination_adventure_activities where day_no =$j and lead_id=$getid order by id ");
                                            $cnt=1;
                                              $row_17=mysqli_num_rows($product_17);
                                              if($row_17>0)
                                              {

                                                ?>
                                                <div class="card-header pb-0 card-no-border ">
                                                  <h4>Adventure_Activity</h4>
                                                </div>
                                                <div class="card-body mb-3">
                                                    
                                                <div id="" class="row">


                                                <table class="table table-bordered table-hover" id="dynamic_field">
                                                  <tr class="bg-light" >
                                                    <th  ><label  class="form-label">name</label></th>
                                                    <th  ><label  class="form-label">location_wise</label></th>
                                                    <th  ><label  class="form-label">price</label></th>
                                                    <th  ><label  class="form-label"></label></th>

                                                      
                                                  </tr>

                                                <?php
                                                while ($row_17=mysqli_fetch_array($product_17)) 
                                                {

                                              ?>
                                              

                                          
                                        

                                            <tr id="row'.$id.'" class="row_item">
                                              <td><?php echo $row_17['name'] ; ?></td>
                                              <td><?php echo $row_17['location_wise'] ; ?></td>
                                              <td><?php echo $row_17['price'] ; ?></td>

                                              <td>
                                                <span class="orm-check form-check-inline bg-light " style="padding:2px 5px; border-radius:5px;  cursor: pointer; position: relative;  "><a  onclick="del_lead_sightseeing_adventure_activities(<?php echo $row_17['id'] ; ?>)"><i class="icon-trash" style="color:red;"></i></a></span>

                                              </td>

                                              
                                            </tr>
                                           
                                            <?php }?>

                                            </table>
                                          
                                        </div>
                                    </div>

                                  <?php } ?>




                          </div>
                        </div>


                    <?php  } ?>


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




    <!-- sightseeing_hotel -->
    <script type="text/javascript">
       // Load hotel when hotel_location and hotel type is selected
            $(document).on('change', '.sightseeing_loc_Categories, .sightseeing_hotel_Categories', function() 
            {
                const sightseeing_loc_Categories = $('.sightseeing_loc_Categories:checked').map(function() {
                    return $(this).val();
                }).get();

                const sightseeing_hotel_Categories = $('.sightseeing_hotel_Categories:checked').map(function() {
                    return $(this).val();
                }).get();

                
                    $.ajax({
                        type: 'POST',
                        url: 'fetch_sightseeing_hotel_new.php',
                        data: { 
                          sightseeing_loc_Categories: sightseeing_loc_Categories , 
                          sightseeing_hotel_Categories: sightseeing_hotel_Categories 
                        },
                        dataType: 'json',
                        success: function(response) {
                          console.log(response);


                            $('#sightseeing_hotel_Container_new').empty();
                            $.each(response, function(index, item) {
                                $('#sightseeing_hotel_Container_new').append(
                                    `<span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin: 3px 2px;"><input class="form-check-input sightseeing_hotel" type="checkbox" name="sightseeing_hotel" data-filter="sightseeing_hotel" value="${item.name}" id="sightseeing_hotel${item.name}" ><label class="form-check-label" for="sightseeing_hotel${item.name}">${item.name}</label></span>`                               
                                  );
                            });
                        },
                        error: function() {
                          // console.log(response);

                            $('#sightseeing_hotel_Container_new').html(`<p>An error has occurred "${response}"</p>`);
                        }
                    });
               
            });
    </script>



    <!-- sightseeing_hotel_rooms -->
    <script type="text/javascript">
       // Load hotel when hotel_location and hotel type is selected
            $(document).on('change', '.sightseeing_loc_Categories, .sightseeing_hotel_Categories, .sightseeing_hotel', function() 
            {
                const sightseeing_loc_Categories = $('.sightseeing_loc_Categories:checked').map(function() {
                    return $(this).val();
                }).get();

                const sightseeing_hotel_Categories = $('.sightseeing_hotel_Categories:checked').map(function() {
                    return $(this).val();
                }).get();


                const sightseeing_hotel = $('.sightseeing_hotel:checked').map(function() {
                    return $(this).val();
                }).get();

                
                    $.ajax({
                        type: 'POST',
                        url: 'fetch_sightseeing_hotel_rooms_new.php',
                        data: { 
                          sightseeing_loc_Categories: sightseeing_loc_Categories , 
                          sightseeing_hotel_Categories: sightseeing_hotel_Categories ,                           
                          sightseeing_hotel: sightseeing_hotel 
                        },
                        dataType: 'json',
                        success: function(response) {
                          // console.log(response);


                            $('#sightseeing_hotel_rooms_Container_new_thead').html('<tr class="bg-light" ><th>Select</th><th style="width:10%" ><label  class="form-label">AC</label></th><th style="width:20%" ><label  class="form-label">Room Name</label></th><th style="width:10%" ><label  class="form-label">Capacity</label></th><th style="width:10%" ><label  class="form-label">No of Bed</label></th><th style="width:10%" ><label  class="form-label">Season Price</label></th><th style="width:10%" ><label  class="form-label">Pick Season Price</label></th><th style="width:10%" ><label  class="form-label">Off Season Price</label></th></tr>');



                            $('#sightseeing_hotel_rooms_Container_new').empty();

                            // Check if response is empty
                            if (response.length === 0) {
                                $('#sightseeing_hotel_rooms_Container_new').html('<tr><td colspan="8" style="color: red; text-align: center;">room Not available</td></tr>');
       
                            } else {
                            $.each(response, function(index, item) {
                                $('#sightseeing_hotel_rooms_Container_new').append(
                                    `<tr id="row${item.id}" class="row_item"><td><span class="form-check form-check-inline bg-primary  m-1"  style="padding:5px 5px 8px 30px; border-radius:5px" ><input class="form-check-input me-2" id="sightseeing_hotel_rooms${item.id}"  type="checkbox" data-filter="sightseeing_hotel_rooms" value="${item.id}"></span></td><td>${item.ac_type}</td><td>${item.name}</td><td>${item.bed}</td><td>${item.capacity}</td><td>${item.price}</td><td>${item.pick_season_price}</td><td>${item.off_season_price}</td></tr>` 

                                  );
                            });

                          }
                        },
                        error: function() {
                          // console.log(response);

                            $('#sightseeing_hotel_rooms_Container_new').html(`<p>An error has occurred "${response}"</p>`);
                        }
                    });
               
            });
    </script>



    <!-- car -->
    <script type="text/javascript">
       // Load hotel when hotel_location and hotel type is selected
            $(document).on('change', '.sightseeing_loc_Categories', function() 
            {
                const sightseeing_loc_Categories = $('.sightseeing_loc_Categories:checked').map(function() {
                    return $(this).val();
                }).get();

                const destination = $('#destination').val();
               

             

                     $.ajax({
                        type: 'POST',
                        url: 'fetch_sightseeing_car.php',
                        data: { 
                          sightseeing_loc_Categories: sightseeing_loc_Categories , 
                          destination: destination 
                        },
                        dataType: 'json',
                        success: function(response) {
                          // console.log(response);


                            $('#sightseeing_car_Container_thead').html('<tr class="bg-light" ><th>Select</th><th style="width:10%" ><label  class="form-label">Car</label></th><th style="width:20%" ><label  class="form-label">Location</label></th><th style="width:10%" ><label  class="form-label">Sightseeing Point</label></th><th style="width:10%" ><label  class="form-label">Drop Location</label></th><th style="width:10%" ><label  class="form-label">Drop point</label></th><th style="width:10%" ><label  class="form-label">Price</label></th></tr>');



                            $('#sightseeing_car_Container').empty();

                            // Check if response is empty
                            if (response.length === 0) {
                                $('#sightseeing_car_Container').html('<tr><td colspan="8" style="color: red; text-align: center;">Car Not available</td></tr>');
       
                            } else {
                            $.each(response, function(index, item) {
                                $('#sightseeing_car_Container').append(
                                    `<tr id="row${item.id}" class="row_item"><td><span class="form-check form-check-inline bg-primary  m-1"  style="padding:5px 5px 8px 30px; border-radius:5px" ><input class="form-check-input me-2" id="sightseeing_car${item.id}"  type="checkbox" data-filter="sightseeing_car" value="${item.id}"></span></td><td>${item.car_type}</td><td>${item.location_wise}</td><td>${item.sightseeing_point}</td><td>${item.drop_location_wise}</td><td>${item.drop_sightseeing_point}</td><td>${item.price}</td></tr>` 

                                  );
                            });

                          }
                        },
                        error: function() {
                          // console.log(response);

                            $('#sightseeing_car_Container').html(`<p>An error has occurred "${response}"</p>`);
                        }
                    });
               
            });
    </script>


       <!-- Ferry -->
    <script type="text/javascript">
       // Load hotel when hotel_location and hotel type is selected
            $(document).on('change', '.sightseeing_loc_Categories', function() 
            {
                const sightseeing_loc_Categories = $('.sightseeing_loc_Categories:checked').map(function() {
                    return $(this).val();
                }).get();

                const destination = $('#destination').val();
               

             

                     $.ajax({
                        type: 'POST',
                        url: 'fetch_sightseeing_Ferry.php',
                        data: { 
                          sightseeing_loc_Categories: sightseeing_loc_Categories , 
                          destination: destination 
                        },
                        dataType: 'json',
                        success: function(response) {
                          // console.log(response);


                            $('#sightseeing_Ferry_Container_thead').html('<tr class="bg-light" ><th>Select</th><th style="width:10%" ><label  class="form-label">Car</label></th><th style="width:20%" ><label  class="form-label">Location</label></th><th style="width:10%" ><label  class="form-label">Sightseeing Point</label></th><th style="width:10%" ><label  class="form-label">Drop Location</label></th><th style="width:10%" ><label  class="form-label">Drop point</label></th><th style="width:10%" ><label  class="form-label">Price</label></th></tr>');



                            $('#sightseeing_Ferry_Container').empty();

                            // Check if response is empty
                            if (response.length === 0) {
                                $('#sightseeing_Ferry_Container').html('<tr><td colspan="8" style="color: red; text-align: center;">Ferry Not available</td></tr>');
       
                            } else {
                            $.each(response, function(index, item) {
                                $('#sightseeing_Ferry_Container').append(
                                    `<tr id="row${item.id}" class="row_item"><td><span class="form-check form-check-inline bg-primary  m-1"  style="padding:5px 5px 8px 30px; border-radius:5px" ><input class="form-check-input me-2" id="sightseeing_car${item.id}"  type="checkbox" data-filter="sightseeing_Ferry" value="${item.id}"></span></td><td>${item.ferry_type}</td><td>${item.location_wise}</td><td>${item.sightseeing_point}</td><td>${item.drop_location_wise}</td><td>${item.drop_sightseeing_point}</td><td>${item.price}</td></tr>` 

                                  );
                            });

                          }
                        },
                        error: function() {
                          // console.log(response);

                            $('#sightseeing_Ferry_Container').html(`<p>An error has occurred "${response}"</p>`);
                        }
                    });
               
            });
    </script>



    <!-- Activity -->
    <script type="text/javascript">
       // Load hotel when hotel_location and hotel type is selected
            $(document).on('change', '.sightseeing_loc_Categories', function() 
            {
                const sightseeing_loc_Categories = $('.sightseeing_loc_Categories:checked').map(function() {
                    return $(this).val();
                }).get();

                const destination = $('#destination').val();
               

             

                     $.ajax({
                        type: 'POST',
                        url: 'fetch_sightseeing_Activity.php',
                        data: { 
                          sightseeing_loc_Categories: sightseeing_loc_Categories , 
                          destination: destination 
                        },
                        dataType: 'json',
                        success: function(response) {
                          // console.log(response);


                            $('#sightseeing_Activity_Container_thead').html('<tr class="bg-light" ><th>Select</th><th  ><label  class="form-label">Name</label></th><th  ><label  class="form-label">Price</label></th></tr>');



                            $('#sightseeing_Activity_Container').empty();

                            // Check if response is empty
                            if (response.length === 0) {
                                $('#sightseeing_Activity_Container').html('<tr><td colspan="4" style="color: red; text-align: center;">Activity Not available</td></tr>');
       
                            } else {
                            $.each(response, function(index, item) {
                                $('#sightseeing_Activity_Container').append(
                                    `<tr id="row${item.id}" class="row_item"><td><span class="form-check form-check-inline bg-primary  m-1"  style="padding:5px 5px 8px 30px; border-radius:5px" ><input class="form-check-input me-2" id="sightseeing_car${item.id}"  type="checkbox" data-filter="sightseeing_Activity" value="${item.id}"></span></td><td>${item.name}</td><td>${item.price}</td></tr>` 

                                  );
                            });

                          }
                        },
                        error: function() {
                          // console.log(response);

                            $('#sightseeing_Activity_Container').html(`<p>An error has occurred "${response}"</p>`);
                        }
                    });
               
            });
    </script>



    <!-- Special_Experiences -->
    <script type="text/javascript">
       // Load hotel when hotel_location and hotel type is selected
            $(document).on('change', '.sightseeing_loc_Categories', function() 
            {
                const sightseeing_loc_Categories = $('.sightseeing_loc_Categories:checked').map(function() {
                    return $(this).val();
                }).get();

                const destination = $('#destination').val();
               

             

                     $.ajax({
                        type: 'POST',
                        url: 'fetch_sightseeing_Special_Experiences.php',
                        data: { 
                          sightseeing_loc_Categories: sightseeing_loc_Categories , 
                          destination: destination 
                        },
                        dataType: 'json',
                        success: function(response) {
                          // console.log(response);


                            $('#sightseeing_Special_Experiences_Container_thead').html('<tr class="bg-light" ><th>Select</th><th  ><label  class="form-label">Name</label></th><th  ><label  class="form-label">Price</label></th></tr>');



                            $('#sightseeing_Special_Experiences_Container').empty();

                            // Check if response is empty
                            if (response.length === 0) {
                                $('#sightseeing_Special_Experiences_Container').html('<tr><td colspan="4" style="color: red; text-align: center;">Special Experiences Not available</td></tr>');
       
                            } else {
                            $.each(response, function(index, item) {
                                $('#sightseeing_Special_Experiences_Container').append(
                                    `<tr id="row${item.id}" class="row_item"><td><span class="form-check form-check-inline bg-primary  m-1"  style="padding:5px 5px 8px 30px; border-radius:5px" ><input class="form-check-input me-2" id="sightseeing_car${item.id}"  type="checkbox" data-filter="sightseeing_Special_Experiences" value="${item.id}"></span></td><td>${item.name}</td><td>${item.price}</td></tr>` 

                                  );
                            });

                          }
                        },
                        error: function() {
                          // console.log(response);

                            $('#sightseeing_Special_Experiences_Container').html(`<p>An error has occurred "${response}"</p>`);
                        }
                    });
               
            });
    </script>





    <!-- Best_Scenic_Places -->
    <script type="text/javascript">
       // Load hotel when hotel_location and hotel type is selected
            $(document).on('change', '.sightseeing_loc_Categories', function() 
            {
                const sightseeing_loc_Categories = $('.sightseeing_loc_Categories:checked').map(function() {
                    return $(this).val();
                }).get();

                const destination = $('#destination').val();
               

             

                     $.ajax({
                        type: 'POST',
                        url: 'fetch_sightseeing_Best_Scenic_Places.php',
                        data: { 
                          sightseeing_loc_Categories: sightseeing_loc_Categories , 
                          destination: destination 
                        },
                        dataType: 'json',
                        success: function(response) {
                          // console.log(response);


                            $('#sightseeing_Best_Scenic_Places_Container_thead').html('<tr class="bg-light" ><th>Select</th><th  ><label  class="form-label">Name</label></th><th  ><label  class="form-label">Price</label></th></tr>');



                            $('#sightseeing_Best_Scenic_Places_Container').empty();

                            // Check if response is empty
                            if (response.length === 0) {
                                $('#sightseeing_Best_Scenic_Places_Container').html('<tr><td colspan="4" style="color: red; text-align: center;">Best Scenic Places Not available</td></tr>');
       
                            } else {
                            $.each(response, function(index, item) {
                                $('#sightseeing_Best_Scenic_Places_Container').append(
                                    `<tr id="row${item.id}" class="row_item"><td><span class="form-check form-check-inline bg-primary  m-1"  style="padding:5px 5px 8px 30px; border-radius:5px" ><input class="form-check-input me-2" id="sightseeing_car${item.id}"  type="checkbox" data-filter="sightseeing_Best_Scenic_Places" value="${item.id}"></span></td><td>${item.name}</td><td>${item.price}</td></tr>` 

                                  );
                            });

                          }
                        },
                        error: function() {
                          // console.log(response);

                            $('#sightseeing_Best_Scenic_Places_Container').html(`<p>An error has occurred "${response}"</p>`);
                        }
                    });
               
            });
    </script>





    <!-- Adventure_Activity -->
    <script type="text/javascript">
       // Load hotel when hotel_location and hotel type is selected
            $(document).on('change', '.sightseeing_loc_Categories', function() 
            {
                const sightseeing_loc_Categories = $('.sightseeing_loc_Categories:checked').map(function() {
                    return $(this).val();
                }).get();

                const destination = $('#destination').val();
               

             

                     $.ajax({
                        type: 'POST',
                        url: 'fetch_sightseeing_Adventure_Activity.php',
                        data: { 
                          sightseeing_loc_Categories: sightseeing_loc_Categories , 
                          destination: destination 
                        },
                        dataType: 'json',
                        success: function(response) {
                          // console.log(response);


                            $('#sightseeing_Adventure_Activity_Container_thead').html('<tr class="bg-light" ><th>Select</th><th  ><label  class="form-label">Name</label></th><th  ><label  class="form-label">Price</label></th></tr>');



                            $('#sightseeing_Adventure_Activity_Container').empty();

                            // Check if response is empty
                            if (response.length === 0) {
                                $('#sightseeing_Adventure_Activity_Container').html('<tr><td colspan="4" style="color: red; text-align: center;">Adventure Activity Not available</td></tr>');
       
                            } else {
                            $.each(response, function(index, item) {
                                $('#sightseeing_Adventure_Activity_Container').append(
                                    `<tr id="row${item.id}" class="row_item"><td><span class="form-check form-check-inline bg-primary  m-1"  style="padding:5px 5px 8px 30px; border-radius:5px" ><input class="form-check-input me-2" id="sightseeing_car${item.id}"  type="checkbox" data-filter="sightseeing_Adventure_Activity" value="${item.id}"></span></td><td>${item.name}</td><td>${item.price}</td></tr>` 

                                  );
                            });

                          }
                        },
                        error: function() {
                          // console.log(response);

                            $('#sightseeing_Adventure_Activity_Container').html(`<p>An error has occurred "${response}"</p>`);
                        }
                    });
               
            });
    </script>









    <!-- fetch_sightseeing_point,  fetch_sightseeing_img    -->
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




                // $.ajax({
                //     url: "fetch_sightseeing_hotel.php",
                //     method: "POST",
                //     data: {
                //         page: page,
                //         sightseeing_loc_Categories: sightseeing_loc_Categories,
                //         sightseeing_hotel_Categories: sightseeing_hotel_Categories

                        
                //     },
                //     beforeSend:function () {
                //         $("#sightseeing_hotel_Container").html(`<div class="card min-h-400px col-lg-12">
                //                                     <div class="card-body justify-align-center">
                //                                         <div class="spinner-border text-success" role="status">
                //                                     </div>
                //                                 </div>`);
                //         $("#pagination").html('');
                //       },

                //       success: function (res) {
                //         try {
                //              res = JSON.parse(res)
                //             const products = res.products;
                //             const pagination = res.pagination;
                //             $("#sightseeing_hotel_Container").html(products);
                //             $("#pagination").html(pagination);
                //         } catch (e) {
                //             alert(e);
                //         }
                //     },
                //     error: function () {
                //         alert("Error in sending request");
                //     }
                // })



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




  




    <!-- update_lead_itinerary() funtion -->

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


                const sightseeing_car = checkboxFilter('sightseeing_car');
                const sightseeing_Ferry = checkboxFilter('sightseeing_Ferry');
                const sightseeing_Activity = checkboxFilter('sightseeing_Activity');
                const sightseeing_Special_Experiences = checkboxFilter('sightseeing_Special_Experiences');
                const sightseeing_Best_Scenic_Places = checkboxFilter('sightseeing_Best_Scenic_Places');
                const sightseeing_Adventure_Activity = checkboxFilter('sightseeing_Adventure_Activity');




                var day =$('#day').val();
                var lead_id =$('#lead_id').val();


                // const productType = checkboxFilter('productType');
                
                // console.log(destination_Categories_1);
                // console.log(sightseeing_point);





                  // update_lead_itinerary
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




                  // update_lead_itinerary_sightseeing_img
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




                  // update_lead_itinerary_hotel
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




                  // update_lead_itinerary_car
                $.ajax({
                    url: "update_lead_itinerary_car.php",
                    method: "POST",
                    data: {
                        page: page,
                        day: day,
                        lead_id : lead_id,
                        sightseeing_car : sightseeing_car

                        
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



                   // update_lead_itinerary_Ferry
                $.ajax({
                    url: "update_lead_itinerary_Ferry.php",
                    method: "POST",
                    data: {
                        page: page,
                        day: day,
                        lead_id : lead_id,
                        sightseeing_Ferry : sightseeing_Ferry

                        
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






                   // update_lead_itinerary_Activity
                $.ajax({
                    url: "update_lead_itinerary_Activity.php",
                    method: "POST",
                    data: {
                        page: page,
                        day: day,
                        lead_id : lead_id,
                        sightseeing_Activity : sightseeing_Activity

                        
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





                   // update_lead_itinerary_Special_Experiences
                $.ajax({
                    url: "update_lead_itinerary_Special_Experiences.php",
                    method: "POST",
                    data: {
                        page: page,
                        day: day,
                        lead_id : lead_id,
                        sightseeing_Special_Experiences : sightseeing_Special_Experiences

                        
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



                   // update_lead_itinerary_Best_Scenic_Places
                $.ajax({
                    url: "update_lead_itinerary_Best_Scenic_Places.php",
                    method: "POST",
                    data: {
                        page: page,
                        day: day,
                        lead_id : lead_id,
                        sightseeing_Best_Scenic_Places : sightseeing_Best_Scenic_Places

                        
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





              // update_lead_itinerary_Adventure_Activity
                $.ajax({
                    url: "update_lead_itinerary_Adventure_Activity.php",
                    method: "POST",
                    data: {
                        page: page,
                        day: day,
                        lead_id : lead_id,
                        sightseeing_Adventure_Activity : sightseeing_Adventure_Activity

                        
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






      <!-- del_lead_sightseeing_point -->
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




            // text = id;
          } else {
            
          }
          // document.getElementById("demo").innerHTML = text;
        }
    </script>



      <!-- del_lead_sightseeing_img -->
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




            // text = id;
          } else {
            
          }
          // document.getElementById("demo").innerHTML = text;
        }
    </script>



      <!-- del_lead_sightseeing_hotel -->
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




            // text = id;
          } else {
            
          }
          // document.getElementById("demo").innerHTML = text;
        }
    </script>





       <!-- del_lead_sightseeing_car -->
    <script>
        function del_lead_sightseeing_car(car_id) {
          let text = "Do you really want to Delete ?";
          if (confirm(text) == true) {


             $.ajax({
                    url: "delete_lead_sightseeing_car.php",
                    method: "POST",
                    data: {
                       
                        car_id: car_id

                        
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




            // text = id;
          } else {
            
          }
          // document.getElementById("demo").innerHTML = text;
        }
    </script>



       <!-- del_lead_sightseeing_ferry -->
    <script>
        function del_lead_sightseeing_ferry(ferry_id) {
          let text = "Do you really want to Delete ?";
          if (confirm(text) == true) {


             $.ajax({
                    url: "delete_lead_sightseeing_ferry.php",
                    method: "POST",
                    data: {
                       
                        ferry_id: ferry_id

                        
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




            // text = id;
          } else {
            
          }
          // document.getElementById("demo").innerHTML = text;
        }
    </script>




       <!-- del_lead_sightseeing_activities -->
    <script>
        function del_lead_sightseeing_activities(activity_id) {
          let text = "Do you really want to Delete ?";
          if (confirm(text) == true) {


             $.ajax({
                    url: "delete_lead_sightseeing_activities.php",
                    method: "POST",
                    data: {
                       
                        activity_id: activity_id

                        
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




            // text = id;
          } else {
            
          }
          // document.getElementById("demo").innerHTML = text;
        }
    </script>



        <!-- del_lead_sightseeing_special_experiences -->
    <script>
        function del_lead_sightseeing_special_experiences(activity_id) {
          let text = "Do you really want to Delete ?";
          if (confirm(text) == true) {


             $.ajax({
                    url: "delete_lead_sightseeing_special_experiences.php",
                    method: "POST",
                    data: {
                       
                        activity_id: activity_id

                        
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




            // text = id;
          } else {
            
          }
          // document.getElementById("demo").innerHTML = text;
        }
    </script>





        <!-- del_lead_sightseeing_best_scenic_places -->
    <script>
        function del_lead_sightseeing_best_scenic_places(activity_id) {
          let text = "Do you really want to Delete ?";
          if (confirm(text) == true) {


             $.ajax({
                    url: "delete_lead_sightseeing_best_scenic_places.php",
                    method: "POST",
                    data: {
                       
                        activity_id: activity_id

                        
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




            // text = id;
          } else {
            
          }
          // document.getElementById("demo").innerHTML = text;
        }
    </script>





        <!-- del_lead_sightseeing_activities -->
    <script>
        function del_lead_sightseeing_adventure_activities(activity_id) {
          let text = "Do you really want to Delete ?";
          if (confirm(text) == true) {


             $.ajax({
                    url: "delete_lead_sightseeing_best_adventure_activities.php",
                    method: "POST",
                    data: {
                       
                        activity_id: activity_id

                        
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




            // text = id;
          } else {
            
          }
          // document.getElementById("demo").innerHTML = text;
        }
    </script>



  </body>
</html>

<?php } ?>