<?php 


require_once('../db.php');
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

    if(isset($_GET['editid']))
    {

      $eid = $_GET['editid'];
                  
      $car_data_row = mysqli_query($conn, "select * from carrnivaltrips_car_rent where id='$eid' ");
      $car_data= $car_data_row->fetch_assoc();

    }



    if(isset($_GET['car_type_id']))
    {

      $car_type_id = $_GET['car_type_id'];
                  
      $car_type_data_row = mysqli_query($conn, "select * from carrnivaltrips_car_type where id='$car_type_id' ");
      $car_type_data= $car_type_data_row->fetch_assoc();

    }

?> 



<?php 


  if (isset($_POST['submit_car_type']))
  {
      if(!empty($_POST['car_type']))
     {
        
          $car_type=$_POST['car_type'];
                  
                
                $query=$conn->query("SELECT * FROM carrnivaltrips_car_type WHERE car_type='".$car_type."'  ");
                $numrows=mysqli_num_rows($query);
                if($numrows==0)
                {
                  

                    $sql="INSERT into carrnivaltrips_car_type(car_type) VALUES('$car_type')";
                    
                    $result=$conn->query($sql);

                    if($result)
                    {
                      echo '<script>alert("Car Type added")</script>';
                      // header("Location:display_car.php");
                    } 
                    else 
                    {
                      echo '<script>alert("Failure to added Car Type!")</script>';
                    }

              } 
              else
              {
                  echo "<script>alert('This Car Type already exists! Please try again with another.');window.location.href='display_car.php';</script>";
                  
              }

      } 
      else 
      {
        echo '<script>alert("Please Enter a Car Type!")</script>';
      }
  }




  if (isset($_POST['update_car_type']))
  {
      if(!empty($_POST['car_type']))
     {
        
          $car_type=$_POST['car_type'];
          
          
                $query=$conn->query("SELECT * FROM carrnivaltrips_car_type WHERE car_type='".$car_type."'  ");
                $numrows=mysqli_num_rows($query);
                if($numrows==0)
                {

                    $updateSql = " update carrnivaltrips_hotel_category  set   car_type='$car_type' where id='$car_type_id' ";
                    $result=$conn->query($updateSql);

                    if($result)
                    {
                      echo '<script>alert("Car Type added")</script>';
                      // header("Location:add_hotel_category.php");
                    } 
                    else 
                    {
                      echo '<script>alert("Failure to added Car Type!")</script>';
                    }

                } 
                else
                {
                  echo "<script>alert('This Car Type already exists! Please try again with another.');window.location.href='display_car.php';</script>";
                  
                }

      } 
      else 
      {
        echo '<script>alert("Please Enter a Car Type!")</script>';
      }
  }



?>


<?php 

  if (isset($_POST['submit_car_rent']))
  {
      if(!empty($_POST['sightseeing_point']) && !empty($_POST['drop_sightseeing_point']) )
      {
        
          $car_type=$_POST['car_type'];
          $destination=$_POST['destination'];
          $location_wise=$_POST['location_wise'];
          $sightseeing_point=$_POST['sightseeing_point'];
          $drop_location_wise=$_POST['drop_location_wise'];
          $drop_sightseeing_point=$_POST['drop_sightseeing_point'];
          $price=$_POST['price'];

          $pick_season_price=$_POST['pick_season_price'];
          $off_season_price=$_POST['off_season_price'];


                  
                
                $query=$conn->query("SELECT * FROM carrnivaltrips_car_rent WHERE sightseeing_point='".$sightseeing_point."' AND drop_sightseeing_point='".$drop_sightseeing_point."'  AND car_type='".$car_type."'  AND price='".$price."'  ");
                $numrows=mysqli_num_rows($query);
                if($numrows==0)
                {
                  

                    $sql="INSERT into carrnivaltrips_car_rent(car_type, destination, location_wise, sightseeing_point, drop_location_wise , drop_sightseeing_point, price, pick_season_price, off_season_price ) VALUES('$car_type', '$destination', '$location_wise', '$sightseeing_point', '$drop_location_wise', '$drop_sightseeing_point', '$price' , '$pick_season_price', '$off_season_price')";
                    
                    $result=$conn->query($sql);

                    if($result)
                    {
                      echo "<script>alert('Successfully added');window.location.href='display_car.php';</script>";
                      // header("Location:display_car.php");
                    } 
                    else 
                    {
                      echo "<script>alert('Faild to add Data');window.location.href='display_car.php';</script>";
                    }

                } 
                else
                {
                    echo "<script>alert('This Point already exists! Please try again with another.');window.location.href='display_car.php';</script>";
                    
                }

      } 
      else 
      {
        echo '<script>alert("Please Enter All Required Data !")</script>';
      }
  }





  if (isset($_POST['update_car_rent']))
  {
      if(!empty($_POST['sightseeing_point']) && !empty($_POST['drop_sightseeing_point']) )
      {
          
          $car_type=$_POST['car_type'];
          $car_type=$_POST['car_type'];
          $destination=$_POST['destination'];
          $location_wise=$_POST['location_wise'];
          $sightseeing_point=$_POST['sightseeing_point'];
          $drop_location_wise=$_POST['drop_location_wise'];
          $drop_sightseeing_point=$_POST['drop_sightseeing_point'];
          $price=$_POST['price'];

          $pick_season_price=$_POST['pick_season_price'];
          $off_season_price=$_POST['off_season_price'];
          
          
                $query=$conn->query("SELECT * FROM carrnivaltrips_car_rent WHERE sightseeing_point='".$sightseeing_point."' AND drop_sightseeing_point='".$drop_sightseeing_point."' AND car_type='".$car_type."'  AND price='".$price."'  ");
                $numrows=mysqli_num_rows($query);

                // if($numrows==0)
                // {

                    $updateSql = " update carrnivaltrips_car_rent  set   car_type='$car_type',  destination='$destination',  location_wise='$location_wise',  sightseeing_point='$sightseeing_point',  drop_location_wise='$drop_location_wise',  drop_sightseeing_point='$drop_sightseeing_point',  price='$price',  pick_season_price='$pick_season_price',  off_season_price='$off_season_price' where id='$eid' ";
                    $result=$conn->query($updateSql);

                    if($result)
                    {
                      echo "<script>alert('Successfully Update');window.location.href='display_car.php';</script>";
                      // header("Location:display_car.php");
                    } 
                    else 
                    {
                      echo "<script>alert('Faild to add Data');window.location.href='display_car.php';</script>";
                    }

                // } 
                // else
                // {
                //     echo "<script>alert('This Point already exists! Please try again with another.');window.location.href='display_car.php';</script>";
                    
                // }

      } 
      else 
      {
        echo '<script>alert("Please Enter All Required Data !")</script>';
      }
  }


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
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            <h1>CarrnivalTrips Car</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">CarrnivalTrips Car</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <?php 
        $selectQuery="Select * from carrnivaltrips_customer ";

     ?>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          

            <div class="pb-3">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_car_type"
                    id="popup_update_car_type">
                    Add Car Type
                  </button>

                  <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#exampleModal"
                    id="popup_update_car_rent">
                    Add Car Rent
                  </button>
            </div>

            <div class="card card-primary">
              <!-- <div class="card-header">
                <h3 class="card-title">CarrnivalTrips Car</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                

                <table id="example1" class="table table-bordered table-hover table-striped">
                  <thead>
                    <tr>
                      <th>Entries</th>
                      <th>Car Type</th>
                      <th>Destination</th>
                      <th>Pick Sightseeing Location</th>
                      <th>Pick Sightseeing Point</th>
                      <th>Drop Sightseeing Location</th>
                      <th>Drop Sightseeing Point</th>
                      <th>Price</th>
                      <!-- <th>Pick Season Price</th> -->
                      <!-- <th>Off Season Price</th> -->



                                       

                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>

                      <?php
                              $product=mysqli_query($conn,"Select * from carrnivaltrips_car_rent order by id ");
                              $cnt=1;
                              $row=mysqli_num_rows($product);
                              if($row>0)
                              {
                                while ($row=mysqli_fetch_array($product)) 
                                {

                                  


                              ?>

                                <!--Fetch the Records -->

                                <tr>
                                    <td><?php echo $cnt;?></td>
                                    
                                    <td><?php  echo $row['car_type'];?></td>
                                    <td><?php  echo $row['destination'];?></td>  
                                    <td><?php  echo $row['location_wise'];?></td>
                                    <td><?php  echo $row['sightseeing_point'];?></td>  
                                    <td><?php  echo $row['drop_location_wise'];?></td>
                                    <td><?php  echo $row['drop_sightseeing_point'];?></td>  
                                    <td><?php  echo $row['price'];?></td>
                                    <!-- <td><?php // echo $row['pick_season_price'];?></td> -->
                                    <!-- <td><?php  // echo $row['off_season_price'];?></td> -->


                                   

                                    <td>
                                        
                                        <a href="display_car.php?editid=<?php echo htmlentities($row['id']);?>" class="edit" title="Update" data-toggle="tooltip"  style="color:green;">Update <i class="fas fa-edit"></i></a> 
                                        <br>
                                         <!-- <a href="watch_package_info.php?editid=<?php echo htmlentities($row['id']);?>" class="edit" title="Watch" data-toggle="tooltip"  style="color:green;">Watch <i class="fas fa-edit"></i></a> -->
                                         

                                        <!-- <a href="php_action/delete_seller_verification_individual.php?delid=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" style="color:red;" onclick="return confirm('Do you really want to Delete ?');">Delete <i class="fa fa-trash" aria-hidden="true"></i></a> -->
                                    </td>  
                                </tr>

                                <?php 

                                  $cnt=$cnt+1;

                                  } 
                                } 
                                else 
                                {
                                  ?>
                                    <tr>
                                        <th style="text-align:center; color:red;" colspan="11">No Record Found</th>
                                    </tr>
                                  
                                <?php 
                                } 
                                ?> 

                              
                  </tbody>
                 <!--  <tfoot>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

      

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

  <!--Modal for Add car rent--->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <?php 
                    if(isset($_GET['editid']))
                    {
                    ?>
                    <h4 class="modal-title" id="exampleModalLabel">Update Car Rent</h4>
                  <?php }else{ ?>
                    <h4 class="modal-title" id="exampleModalLabel">Add Car Rent</h4>
                  <?php } ?>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="" method="post" >

                   <?php 
                    if(isset($_GET['editid']))
                    {
                    ?>

                      <div class="modal-body">

                        <div class="form-group mb-2">
                            <label>Car Type</label>
                            <select class="form-control" id="car_type" name="car_type" required>
                                <option value="<?php echo $car_data['car_type']; ?>"><?php echo $car_data['car_type']; ?></option>  
                                <?php
                                $product_1=mysqli_query($conn,"Select * from carrnivaltrips_car_type order by id ");
                                $cnt=1;
                                $row_1=mysqli_num_rows($product_1);
                                if($row_1>0)
                                {
                                while ($row_1=mysqli_fetch_array($product_1)) 
                                {
                                ?>  
                                
                                <option value="<?php echo $row_1['car_type']; ?>"><?php echo $row_1['car_type']; ?></option>
                                <?php }} ?>
                            </select>
                        </div>

                        <div class="form-group mb-2">
                              <label >Destination</label>
                                <select class="form-control" id="destination_edit" name="destination" required>
                                <option value="<?php echo $car_data['destination']; ?>"><?php echo $car_data['destination']; ?></option>  
                                <?php
                                $product_2=mysqli_query($conn,"Select distinct destination from carrnivaltrips_sightseeing order by id ");
                                $cnt=1;
                                $row_2=mysqli_num_rows($product_2);
                                if($row_2>0)
                                {
                                while ($row_2=mysqli_fetch_array($product_2)) 
                                {
                                ?>  
                                <option value="<?php echo $row_2['destination']; ?>"><?php echo $row_2['destination']; ?></option>
                                <?php }} ?>
                          </select>
                        </div>

                        <div class="form-group mb-2">
                          <label>Sightseeing</label>
                              <select id="pick_sightseeing_edit" class="form-control" name="location_wise"  >
                              <option value="<?php echo $car_data['location_wise']; ?>"><?php echo $car_data['location_wise']; ?></option> 
                            </select>

                        </div>


                        <div class="form-group mb-2">
                            <label>Pick Sightseeing Point</label>
                            <select id="pick_sightseeing_point_edit"  class="form-control"  name="sightseeing_point">
                              <option value="<?php echo $car_data['sightseeing_point']; ?>"><?php echo $car_data['sightseeing_point']; ?></option>
                            </select>

                        </div>




                         <div class="form-group mb-2">
                            <label>Drop Sightseeing</label>
                              <select id="drop_sightseeing_edit" class="form-control"  name="drop_location_wise">
                              <option value="<?php echo $car_data['location_wise']; ?>"><?php echo $car_data['location_wise']; ?></option>
                            </select>

                         </div>


                         <div class="form-group mb-2">
                            <label>Drop Sightseeing Point</label>
                            <select id="drop_sightseeing_point_edit"  class="form-control"  name="drop_sightseeing_point" >
                              <option value="<?php echo $car_data['sightseeing_point']; ?>"><?php echo $car_data['sightseeing_point']; ?></option>
                            </select>

                         </div>



                         <div class="form-group mb-2">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $car_data['price'] ?>" > 
                         </div>


                         <div class="form-group mb-2">
                            <label>Pick Season Price</label>
                            <input type="text" name="pick_season_price" class="form-control" value="<?php echo $car_data['pick_season_price'] ?>" > 
                         </div>


                         <div class="form-group mb-2">
                            <label>Off Season Price</label>
                            <input type="text" name="off_season_price" class="form-control" value="<?php echo $car_data['off_season_price'] ?>" > 
                         </div>

                      </div>

                  
                    <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="update_car_rent" value="Update">

                    <?php
                    }
                    else
                    {
                      ?>
                        
                        <div class="modal-body">

                          <div class="form-group mb-2">
                              <label>Car Type</label>
                              <select class="form-control" id="car_type" name="car_type" required>
                                  <option value="">Select Car Type</option> 
                                  <?php
                                  $product_1=mysqli_query($conn,"Select * from carrnivaltrips_car_type order by id ");
                                  $cnt=1;
                                  $row_1=mysqli_num_rows($product_1);
                                  if($row_1>0)
                                  {
                                  while ($row_1=mysqli_fetch_array($product_1)) 
                                  {
                                  ?>  
                                  
                                  <option value="<?php echo $row_1['car_type']; ?>"><?php echo $row_1['car_type']; ?></option>
                                  <?php }} ?>
                              </select>
                          </div>

                          <div class="form-group mb-2">
                                <label >Destination</label>
                                <select class="form-control" id="destination" name="destination" required>  
                                  <option value="">Select Destination</option>
                                <?php
                                $product_2=mysqli_query($conn,"Select distinct destination from carrnivaltrips_sightseeing order by id ");
                                $cnt=1;
                                $row_2=mysqli_num_rows($product_2);
                                if($row_2>0)
                                {
                                while ($row_2=mysqli_fetch_array($product_2)) 
                                {
                                ?>  
                                
                                <option value="<?php echo $row_2['destination']; ?>"><?php echo $row_2['destination']; ?></option>
                                <?php }} ?>
                              </select>
                          </div>

                          <div class="form-group mb-2">
                            <label>Pick Sightseeing</label>

                            <select id="pick_sightseeing" class="form-control" name="location_wise" >
                              <option value="">Select Sightseeing</option>
                            </select>
                          </div>


                          <div class="form-group mb-2">
                            <label>Pick Sightseeing Point</label>
                            

                            <select id="pick_sightseeing_point"  class="form-control"  name="sightseeing_point" >
                              <option value="">Select Sightseeing</option>
                            </select>
                          </div>

                          <div class="form-group mb-2">
                            <label>Drop Sightseeing</label>

                            <select id="drop_sightseeing" class="form-control"  name="drop_location_wise" >
                              <option value="">Select Drop Sightseeing</option>
                            </select>

                          </div>


                          <div class="form-group mb-2">
                            <label>Drop Sightseeing Point</label>                          

                             <select id="drop_sightseeing_point"  class="form-control"  name="drop_sightseeing_point"  >
                              <option value="">Select Sightseeing</option>
                            </select>

                          </div>

                          <div class="form-group mb-2">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control"  > 
                          </div>

                          <div class="form-group mb-2">
                            <label>Pick Season Price</label>
                            <input type="text" name="pick_season_price" class="form-control"  > 
                         </div>


                         <div class="form-group mb-2">
                            <label>Off Season Price</label>
                            <input type="text" name="off_season_price" class="form-control"  > 
                         </div>


                        </div>

                      
                    <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="submit_car_rent" value="Save">


                      <?php
                    }
                   ?>
               

                
                  </form>
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                </div>


              </div>
            </div>
  </div>
      <!--End Modal -->



  <!--Modal for Add car type--->
  <div class="modal fade" id="add_car_type" tabindex="-1" role="dialog" aria-labelledby="add_car_type"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel">Add Car Type</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="" method="post" >

                   <?php 
                    if(isset($_GET['car_type_id']))
                    {
                    ?>

                      <div class="modal-body">
                        <div class="form-group mb-2">
                              <label >Car Type</label>
                              <input type="text" name="car_type" class="form-control" value="<?php echo $car_type_data['car_type'] ?>" >             
                        </div>

                      </div>

                   
                    <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="update_car_type" value="Update">

                    <?php
                    }
                    else
                    {
                      ?>
                        <div class="modal-body">
                          <div class="form-group mb-2">
                                <label >Car Type</label>
                                <input type="text" name="car_type" class="form-control" required>             
                          </div>


                        </div>

                       
                    <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="submit_car_type" value="Save">


                      <?php
                    }
                   ?>
               

                
                  </form>
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                </div>


              </div>
            </div>
  </div>
  <!--End Modal -->



<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- Page specific script -->


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>



   <?php
       if(isset($_GET['editid'])){
        ?>
    <script type="text/javascript">
             
       $("document").ready(function() {
          setTimeout(function() {
              $("#popup_update_car_rent").trigger('click');
          },5);
      });

    </script>

  <?php } ?>


<script type="text/javascript">
  $(document).ready(function() {
    

    $('#destination').change(function() {
        var destination = $(this).val();
        $('#pick_sightseeing').empty().append('<option value="">Select Sightseeing</option>');
        $('#pick_sightseeing_point').empty().append('<option value="">Select Sightseeing Point</option>');
        $('#drop_sightseeing').empty().append('<option value="">Select Sightseeing</option>');
        $('#drop_sightseeing_point').empty().append('<option value="">Select Sightseeing Point</option>');

        if (destination) 
        {
            $.ajax({
                url: 'fetch_pick_sightseeing.php',
                method: 'POST',
                data: {destination: destination},
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, value) {
                        $('#pick_sightseeing').append('<option value="' + value.location_wise + '">' + value.location_wise + '</option>');
                    });
                }
            });


            $.ajax({
                url: 'fetch_drop_sightseeing.php',
                method: 'POST',
                data: {destination: destination},
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, value) {
                        $('#drop_sightseeing').append('<option value="' + value.location_wise + '">' + value.location_wise + '</option>');
                    });
                }
            });


        }
    });



     $('#pick_sightseeing').change(function() {
        var pick_sightseeing = $(this).val();
        var destination = $('#destination').val();

        $('#pick_sightseeing_point').empty().append('<option value="">Select Sightseeing Point</option>');

        // $('#drop_sightseeing_point').empty().append('<option value="">Select Sightseeing Point</option>');

        if (pick_sightseeing) 
        {
            $.ajax({
                url: 'fetch_pick_sightseeing_point.php',
                method: 'POST',
                data: {
                  pick_sightseeing: pick_sightseeing,
                  destination: destination
                },
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, value) {
                        $('#pick_sightseeing_point').append('<option value="' + value.name + '">' + value.name + '</option>');
                    });
                }
            });


           
        }
    });


    $('#drop_sightseeing').change(function() {
        var drop_sightseeing = $(this).val();
        var destination = $('#destination').val();

        // $('#pick_sightseeing_point').empty().append('<option value="">Select Sightseeing Point</option>');

        $('#drop_sightseeing_point').empty().append('<option value="">Select Sightseeing Point</option>');

        if (drop_sightseeing) 
        {
            $.ajax({
                url: 'fetch_drop_sightseeing_point.php',
                method: 'POST',
                data: {
                  drop_sightseeing: drop_sightseeing,
                  destination: destination
                },
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, value) {
                        $('#drop_sightseeing_point').append('<option value="' + value.name + '">' + value.name + '</option>');
                    });
                }
            });


           
        }
    });





  });
</script>



<script type="text/javascript">
  $(document).ready(function() {



        var destination = $('#destination_edit').val();
        if (destination) 
        {
            $.ajax({
                url: 'fetch_pick_sightseeing.php',
                method: 'POST',
                data: {destination: destination},
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, value) {
                        $('#pick_sightseeing_edit').append('<option value="' + value.location_wise + '">' + value.location_wise + '</option>');
                    });
                }
            });


            $.ajax({
                url: 'fetch_drop_sightseeing.php',
                method: 'POST',
                data: {destination: destination},
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, value) {
                        $('#drop_sightseeing_edit').append('<option value="' + value.location_wise + '">' + value.location_wise + '</option>');
                    });
                }
            });


        }
    

    $('#destination_edit').change(function() {
        var destination = $(this).val();
        if (destination) 
        {
            $.ajax({
                url: 'fetch_pick_sightseeing.php',
                method: 'POST',
                data: {destination: destination},
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, value) {
                        $('#pick_sightseeing_edit').append('<option value="' + value.location_wise + '">' + value.location_wise + '</option>');
                    });
                }
            });


            $.ajax({
                url: 'fetch_drop_sightseeing.php',
                method: 'POST',
                data: {destination: destination},
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, value) {
                        $('#drop_sightseeing_edit').append('<option value="' + value.location_wise + '">' + value.location_wise + '</option>');
                    });
                }
            });


        }
    });



     $('#pick_sightseeing_edit').change(function() {
        var pick_sightseeing = $(this).val();
        var destination = $('#destination_edit').val();

        if (pick_sightseeing) 
        {
            $.ajax({
                url: 'fetch_pick_sightseeing_point.php',
                method: 'POST',
                data: {
                  pick_sightseeing: pick_sightseeing,
                  destination: destination
                },
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, value) {
                        $('#pick_sightseeing_point_edit').append('<option value="' + value.name + '">' + value.name + '</option>');
                    });
                }
            });


           
        }
    });


    $('#drop_sightseeing_edit').change(function() {
        var drop_sightseeing = $(this).val();
        var destination = $('#destination_edit').val();


        if (drop_sightseeing) 
        {
            $.ajax({
                url: 'fetch_drop_sightseeing_point.php',
                method: 'POST',
                data: {
                  drop_sightseeing: drop_sightseeing,
                  destination: destination
                },
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, value) {
                        $('#drop_sightseeing_point_edit').append('<option value="' + value.name + '">' + value.name + '</option>');
                    });
                }
            });


           
        }
    });





  });
</script>

 



</body>
</html>

<?php 
}
 ?>
