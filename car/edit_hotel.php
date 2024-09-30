<?php 


include('../db.php');
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



  <?php 

                if(isset($_GET['editid']))
                {
                  $id=$_GET['editid'];

                  $eid = $_GET['editid'];
                  
                  $row = mysqli_query($conn, "select * from carrnivaltrips_hotel where id='$eid' ");
                  $data = $row->fetch_assoc();
                  
                  // echo '<pre>';
                  // print_r($data);
                  // echo '</pre>';

                }

  ?> 




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update <?php echo $data['name']; ?> Hotel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Update Hotel </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>





    <!-- Main content -->
    <section class="content" >

    

      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Hotel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              


            <!-- update hotel -->
            <div class="mb-3">
              <form action="php_action/edit_hotel.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <label for="destination" >Destination</label>
                    <input type="text" class="form-control" id="destination" name="destination" value="<?php echo $data['destination']; ?>"  readonly >
                  </div>


                  <div class="form-group">
                    <label for="location_wise" >Hotel Location</label>
                    <input type="text" class="form-control" id="location_wise" name="location_wise" value="<?php echo $data['location_wise'] ?>"  readonly >
                  </div>

                  <div class="form-group">
                    <label for="category_wise" >Hotel Type</label>
                    <input type="text" class="form-control" id="category_wise" name="category_wise" value="<?php echo $data['category_wise']; ?>"  readonly >
                  </div>


                  <div class="form-group">
                    <label for="name" >Hotel Name</label>
                    <input type="text" class="form-control" id="name" name="name"  value="<?php echo $data['name']; ?>">
                  </div>

                  <div class="form-group">
                    <label for="no_of_room" >Number Of Room</label>
                    <input type="text" class="form-control" id="no_of_room" name="no_of_room" value="<?php  echo $data['no_of_room']; ?>">
                  </div>




                 


                 
                  <div class="row">
                    
         

                      <div class="form-group mb-4 col-md-4">
                        <label for="img1">Hotel Image 1</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="img1" name="img1" >
                            <label class="custom-file-label" for="img1">Choose Image</label>
                          </div>
                          
                        </div>

                         <img width="100" height="80" class="mt-3" id="disp_img1" src="img/<?php echo $data['img1']; ?>">

                      </div>



                      <div class="form-group mb-4 col-md-4">
                        <label for="img2">Hotel Image 2</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="img2" name="img2" >
                            <label class="custom-file-label" for="img2">Choose Image</label>
                          </div>
                          
                        </div>

                         <img width="100" height="80" class="mt-3" id="disp_img2" src="img/<?php echo $data['img2']; ?>">

                      </div>



                      <div class="form-group mb-4 col-md-4">
                        <label for="img3">Hotel Image 3</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="img3" name="img3" >
                            <label class="custom-file-label" for="img3">Choose Image</label>
                          </div>
                          
                        </div>

                         <img width="100" height="80" class="mt-3" id="disp_img3" src="img/<?php echo $data['img3']; ?>">

                      </div>
                  </div> 



                      <!-- <div class="form-group">
                            <label for="status">Hotel Status</label>
                            <select class="form-control" id="status" name="status"> 
                              
                              <option value="Upcoming">Upcoming</option>
                              <option value="Active">Active</option>
                              <option value="Inactive">Inactive</option>



                                
                            </select>
                      </div>   -->         

                
                   <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $data['id'] ?>">
                
                  <input type="hidden" class="form-control" id="img_1" name="img_1"  value="<?php echo $data['img1'] ?>">
                  <input type="hidden" class="form-control" id="img_2" name="img_2"  value="<?php echo $data['img3'] ?>">
                  <input type="hidden" class="form-control" id="img_3" name="img_3"  value="<?php echo $data['img3'] ?>">


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" value="Submit" name="update_hotel">Submit</button>
                </div>
              </form>
            </div>
            <!-- end update hotel -->



            <!-- add Romms -->
            <div>
              <form  method="POST" action="php_action/add_room.php" enctype="multipart/form-data">
                      <div class="card-body"> 
                        

                         <input type="hidden" name="hotel_id" value="<?php echo $id ;?>">
                         <input type="hidden" name="hotel_name" value="<?php echo $data['name']; ?>">
                         <input type="hidden" name="destination" value="<?php echo $data['destination']; ?>">
                         <input type="hidden" name="location_wise" value="<?php echo $data['location_wise']; ?>">
                         <input type="hidden" name="hotel_category_wise" value="<?php echo $data['category_wise']; ?>">


                         <!-- <input type="hidden" name="day" value="<?php // echo $day ?>"> -->



                        <div class="row">
                          <div class="table-responsive">

                            <label><h3>Add Room </h3></label>
                            <table class="table table-bordered table-hover" id="dynamic_field">
                                <tr>
                                    <th style="width:20%" ><label  class="form-label">Room Name</label></th>
                                    <th style="width:7%" ><label  class="form-label">Capacity</label></th>
                                    <th style="width:10%" ><label  class="form-label">No of Bed</label></th>
                                    <th style="width:10%" ><label  class="form-label">AC</label></th>
                                    <th style="width:15%" ><label  class="form-label">Amenities</label></th>

                                    <th style="width:7%" ><label  class="form-label">Season Price</label></th>
                                    <th style="width:7%" ><label  class="form-label">Pick Season Price</label></th>
                                    <th style="width:7%" ><label  class="form-label">Off Season Price</label></th>

                                    <th style="width:10%" ><label  class="form-label">Status</label></th>


                                    
                                    <th style="width:5%;" ></th>
                                </tr>

                                <?php

                                      if($_GET['editid'] !="")
                                      {

                                        $product = "SELECT * FROM carrnivaltrips_hotel_rooms WHERE  hotel_id='".$_GET['editid']."' ";
                                        $result_product = mysqli_query($conn, $product);
                                        if ($result_product->num_rows > 0) 
                                        {
                                          $i=1;
                                          while($row_product = $result_product->fetch_assoc())
                                          {

                                    ?>
                                            <tr id="row<?php echo $i-1;?>" class="row_item">
                                                <td>

                                                    <input type="text" class="form-control" id="validationCustom01"  value="<?php echo $row_product['name'];?>" name ="name[]"  required>
                                                
                                                </td>
                                                            
                                                <td>
                                                    <input  type="text" class="form-control" id="validationCustom02" value="<?php echo $row_product['capacity'];?>" name="capacity[]" >
                                                </td>    

                                                <td>
                                                    <input  type="text" class="form-control" id="validationCustom03" value="<?php echo $row_product['bed'];?>" name="bed[]" >
                                                </td> 


                                                
                                                <td>
                                                        <select class="form-control" id="ac_type" name="ac_type[]"> 
                                                                <option value="<?php echo $row_product['ac_type'] ?>"><?php echo $row_product['ac_type'] ?></option>
                                                                <option value="AC">AC</option>
                                                                <option value="Non-AC">Non-AC</option>
                                                        </select>
                                                </td>


                                                <td>
                                                        <select class="form-control" id="amenities" name="amenities[]" > 
                                                                <option value="<?php echo $row_product['amenities'] ?>"><?php echo $row_product['amenities'] ?></option>
                                                                <option value="Coffee Kit">Coffee Kit</option>
                                                                <option value="Geyser">Geyser</option>
                                                        </select>
                                                </td>

                                                

                                                <td>
                                                    <input  type="text" class="form-control" id="validationCustom05" value="<?php echo $row_product['price'];?>" name="price[]" >
                                                </td> 
                                                <td>
                                                    <input  type="text" class="form-control" id="validationCustom05" value="<?php echo $row_product['pick_season_price'];?>" name="pick_season_price[]" >
                                                </td>
                                                <td>
                                                    <input  type="text" class="form-control" id="validationCustom05" value="<?php echo $row_product['off_season_price'];?>" name="off_season_price[]" >
                                                </td>

                                                <td>
                                                     <select class="form-control" id="status" name="status[]"> 
                                                        <option value="<?php echo $row_product['status'] ?>"><?php echo $row_product['status'] ?></option>
                                                        <option value="Booked">Available</option>
                                                        <option value="Booked">Booked</option>
                                                        <option value="Inactive">Inactive</option>                                                        
                                                      </select>
                                                </td>  

                                                            

                                              



                                  <?php

                                      if($i==1)
                                  {?> 
                                              <td>
                                                <button type="button" name="add" style="margin-top: 27px;" id="add" class="btn btn-success"><i class=" fa fa-plus-square"></i></button>
                                              </td> 
                                  <?php 
                                  } 
                                  else 
                                  {?> 
                                            <td>
                                              <button type="button" name="remove" style="margin-top:27px;" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button>
                                            </td>

                                  <?php } ?>
                                                            

                                    </tr>

                                <?php 
                                $i++; } 
                              }
                              else 
                              {
                              ?>

                                  <tr id="" class="row_item">
                                        <td>
                                                             

                                              <input type="text" class="form-control" id="validationCustom01"   name ="name[]" placeholder="" required>
                                                              
                                        </td>
                                                            
                                        <td><input  type="text" class="form-control" id="validationCustom02"  name="capacity[]" ></td>  


                                        <td><input  type="text" class="form-control" id="validationCustom02"  name="bed[]" ></td> 
                                        <td>
                                                <select class="form-control" id="ac_type" name="ac_type[]"> 
                                                        <option value="">Select</option>
                                                        <option value="AC">AC</option>
                                                        <option value="Non-AC">Non-AC</option>
                                                </select>
                                        </td> 
                                        <td>
                                          <select class="form-control" id="amenities" name="amenities[]" > <option value="">Select Amenities</option><option value="Coffee Kit">Coffee Kit</option><option value="Geyser">Geyser</option>
                                          </select>
                                        </td>

                                        <td><input  type="text" class="form-control" id="validationCustom02"  name="price[]" ></td> 
                                        <td><input  type="text" class="form-control" id="validationCustom03"  name="pick_season_price[]" ></td> 
                                        <td><input  type="text" class="form-control" id="validationCustom04"  name="off_season_price[]" ></td> 


                                        <td>
                                                <select class="form-control" id="status" name="status[]"> 
                                                        <option value="">Select</option>
                                                        <option value="Available">Available</option>
                                                        <option value="Booked">Booked</option>
                                                        <option value="Inactive">Inactive</option>
                                                </select>
                                        </td>    

                                                            

                                       


                                            <td>
                                                                  <button type="button" name="add" style="margin-top: 27px;" id="add" class="btn btn-success"><i class="fa fa-plus-square"></i></button>
                                            </td> 
                                                           
                                                                
                                                            

                                    </tr>



                                                  <?php

                                                  } }?>  


                            </table>
                          </div>
                        </div>

                      </div>

                    <div class="card-footer d-flex justify-content-between mt-3">
                        <div class="mr-5">
                          <?php
                          if($_GET['editid'] !="")
                          { ?>
                              <!-- Save button div starts -->
                              <button type="submit"  name="room_update" class="btn btn-primary p-3" value="Update">Update Room</button>
                              
                          <?php 
                          } 
                          else 
                          { ?>
                              <button type="submit"  name="room_update" class="btn btn-primary p-3" value="Save">Save Room</button>
                          <?php 
                          } ?>

                        </div>


                    
                          
                    </div>
              </form>
            </div>
            <!-- end add rooms -->
               



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


  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>

          function display1(input) {
           if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(event) {
                 $('#disp_img1').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#img1").change(function() {
           display1(this);
        });



        function display2(input) {
           if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(event) {
                 $('#disp_img2').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#img2").change(function() {
           display2(this);
        });





        function display3(input) {
           if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(event) {
                 $('#disp_img3').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#img3").change(function() {
           display3(this);
        });

        // function display2(input) {
        //    if (input.files && input.files[0]) {
        //       var reader = new FileReader();
        //       reader.onload = function(event) {
        //          $('#disp_s2_img').attr('src', event.target.result);
        //       }
        //       reader.readAsDataURL(input.files[0]);
        //    }
        // }

        // $("#s2_img").change(function() {
        //    display2(this);
        // });

        // function display3(input) {
        //    if (input.files && input.files[0]) {
        //       var reader = new FileReader();
        //       reader.onload = function(event) {
        //          $('#disp_s3_img').attr('src', event.target.result);
        //       }
        //       reader.readAsDataURL(input.files[0]);
        //    }
        // }

        // $("#s3_img").change(function() {
        //    display3(this);
        // });

    </script>


    <script>
        $(document).ready(function () {
            var i = <?php echo $i-2;?>;

            $('#add').click(function () {
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'"  class="row_item"><td><input type="text" class="form-control" id="validationCustom01"  value="" name ="name[]" placeholder="" required></div></td> <td><input  type="text" class="form-control" id="validationCustom02" value="" name="capacity[]" ></td>  <td><input  type="text" class="form-control" id="validationCustom02"  name="bed[]" ></td> <td><select class="form-control" id="ac_type" name="ac_type[]"> <option value="">Select</option><option value="AC">AC</option><option value="Non-AC">Non-AC</option> </select></td> <td><select class="form-control" id="amenities" name="amenities[]" > <option value="">Select Amenities</option><option value="Coffee Kit">Coffee Kit</option><option value="Geyser">Geyser</option></select></td>  <td><input  type="text" class="form-control" id="validationCustom02"  name="price[]" ></td><td><input  type="text" class="form-control" id="validationCustom03"  name="pick_season_price[]" ></td><td><input  type="text" class="form-control" id="validationCustom04"  name="off_season_price[]" ></td>  <td>  <select class="form-control" id="status" name="status[]"> <option value="">Select</option><option value="Available">Available</option> <option value="Booked">Booked</option><option value="Inactive">Inactive</option> </select> </td>  <td><button type="button" name="remove" style="margin-top:27px;" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
            });

             $(document).on('click', '.btn_remove', function(){ 
                var button_id = $(this).attr("id"); 
                //alert('Please submit changes');
                $('#row'+button_id+'').remove(); 
            });

            
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