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


 <?php 

                if(isset($_GET['editid']))
                {
                  // $id=$_GET['editid'];

                  $eid = $_GET['editid'];
                  
                  $hotel_category_row = mysqli_query($conn, "select * from carrnivaltrips_hotel_category where id='$eid' ");
                  $hotel_category_data= $hotel_category_row->fetch_assoc();
                  
                  // echo '<pre>';
                  // print_r($data);
                  // echo '</pre>';

                }

?> 


<?php 


  if (isset($_POST['submit']))
  {
       if(!empty($_POST['destination']))
     {
        
          $destination=$_POST['destination'];
          $location_wise=$_POST['location_wise'];
          $category_wise=$_POST['category_wise'];
          



          // $query_1=$conn->query("SELECT * FROM carrnivaltrips_hotel_category WHERE destination='".$destination."'  ");

          // $numrows_1=mysqli_num_rows($query_1);
          // if($numrows_1==0)
          // {
                
                $query=$conn->query("SELECT * FROM carrnivaltrips_hotel_category WHERE location_wise='".$location_wise."' and destination='".$destination."'  and  category_wise='".$category_wise."'  ");
                $numrows=mysqli_num_rows($query);
                if($numrows==0)
                {
                  

                    $sql="INSERT into carrnivaltrips_hotel_category(destination,location_wise,category_wise) VALUES('$destination','$location_wise','$category_wise')";
                    
                    $result=$conn->query($sql);

                    if($result)
                    {
                      echo '<script>alert("Hotel Type added")</script>';
                      header("Location:add_hotel_category.php");
                    } 
                    else 
                    {
                      echo "Failure!";
                    }

              } 
              else
              {
                  echo "<script>alert('This Category Hotel already exists! Please try again with another.');window.location.href='add_hotel_category.php';</script>";
                  
              }




          // } 
          // else
          // {
          //     echo "<script>alert('Destination already exists! Please try again with another.');window.location.href='add_hotel_category.php';</script>";
              
          // }

      } 
      else 
      {
        echo '<script>alert("Please enter a Category!")</script>';
      }
  }


?>

<?php 


  if (isset($_POST['add_category_update']))
  {
       if(!empty($_POST['destination']))
     {
        
          $destination=$_POST['destination'];
          $location_wise=$_POST['location_wise'];
          $category_wise=$_POST['category_wise'];
          



          // $query_1=$conn->query("SELECT * FROM carrnivaltrips_hotel_category WHERE destination='".$destination."'  ");

          // $numrows_1=mysqli_num_rows($query_1);
          // if($numrows_1==0)
          // {
                
          //       $query=$conn->query("SELECT * FROM carrnivaltrips_hotel_category WHERE location_wise='".$location_wise."'   ");
          //       $numrows=mysqli_num_rows($query);
          //       if($numrows==0)
          //       {
                  

                    // $sql="INSERT into carrnivaltrips_hotel_category(destination,location_wise,category_wise) VALUES('$destination','$location_wise','$category_wise')";

          $updateSql = " update carrnivaltrips_hotel_category  set   destination='$destination', location_wise='$location_wise', category_wise='$category_wise'  where id='$eid' ";

                    
                    $result=$conn->query($updateSql);

                    if($result)
                    {
                      echo '<script>alert("Hotel Type added")</script>';
                      header("Location:add_hotel_category.php");
                    } 
                    else 
                    {
                      echo "Failure!";
                    }

          //     } 
          //     else
          //     {
          //         echo "<script>alert('Location already exists! Please try again with another.');window.location.href='add_hotel_category.php';</script>";
                  
          //     }




          // } 
          // else
          // {
          //     echo "<script>alert('Destination already exists! Please try again with another.');window.location.href='add_hotel_category.php';</script>";
              
          // }

      } 
      else 
      {
        echo '<script>alert("Please enter a Category!")</script>';
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
            <h1>Add Holtel Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Add Holtel Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>





    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          
          
          <div class="col-12">
            
            <div class="card card-primary">
              <!-- <div class="card-header">
                <h3 class="card-title">Holtel Category</h3>
              </div>  -->
              <!-- /.card-header -->

              
                  
             


              <div class="card-body">

                <div class="pb-3">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                    id="popup_add_hotel_category">
                    Add Holtel Category
                  </button>
                </div>


                <table id="example1" class="table table-bordered ">
                  <thead class="thead-light">
                    <tr>
                      <th>Entries</th>

                      <th>Destination</th>
                      <th>Location</th>
                      <th>Category</th>
                    
                      <th>Add Hotel</th>

                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>

                      <?php
                              $product=mysqli_query($conn,"Select * from carrnivaltrips_hotel_category order by id desc");
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
                                    
                                   
                                    <td><?php  echo $row['destination'];?></td>
                                    <td><?php  echo $row['location_wise'];?></td>
                                    <td><?php  echo $row['category_wise'];?></td>



                                    <td>
                                      <a type="submit" class="btn btn-primary" value="Create Website" href="add_hotel.php?id=<?php  echo $row['id'];?>" >Add Hotel</a>


                                    </td>




                                    
                                   

                                    <td>
                                        
                                        <a href="add_hotel_category.php?editid=<?php echo htmlentities($row['id']);?>" class="edit" title="Update" data-toggle="tooltip"  style="color:green;"  >Update <i class="fas fa-edit"></i></a> 
                                        <br>
                                                                             

                                        <!-- <a href="php_action/delete_hotel.php?delid=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" style="color:red;" onclick="return confirm('Do you really want to Delete ?');">Delete <i class="fa fa-trash" aria-hidden="true"></i></a> -->
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


        </div>
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


          <!--Modal for Add Category--->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel">Add Hotel Category</h4>
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
                              <label >Destination</label>
                              <input type="text" name="destination" class="form-control" value="<?php echo $hotel_category_data['destination'] ?>" >             
                        </div>

                        <div class="form-group mb-2">
                          <label>Hotel Location</label>
                          <input type="text" name="location_wise" class="form-control" value="<?php echo $hotel_category_data['location_wise'] ?>">
                        </div>

                        <div class="form-group mb-2">
                          <label>Hotel Category</label>
                          <!-- <input type="text" name="category_wise" class="form-control" value="<?php // echo $hotel_category_data['category_wise'] ?>"> -->

                          <select class="form-control" id="category_wise" name="category_wise">  
                              <option value="<?php echo $hotel_category_data['category_wise']; ?>"><?php echo $hotel_category_data['category_wise']; ?></option>
                              <option value="">Select Category</option>
                              <option value="Standard">Standard</option>
                              <option value="Deluxe">Deluxe</option>
                              <option value="Super Deluxe">Super Deluxe</option>
                              <option value="Premium">Premium</option>
                              <option value="Premium Plus">Premium Plus</option>
                              <option value="Luxury">Luxury</option>
                              <option value="Others">Others</option>
                                
                            </select>
                        </div>
                      </div>

                    <br>
                    <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="add_category_update" value="Update">

                    <?php
                    }
                    else
                    {
                      ?>
                        <div class="modal-body">
                          <div class="form-group mb-2">
                                <label >Destination</label>
                                <input type="text" name="destination" class="form-control" required>             
                          </div>

                          <div class="form-group mb-2">
                            <label>Hotel Location</label>
                            <input type="text" name="location_wise" class="form-control" required>
                          </div>

                          <div class="form-group mb-2">
                            <label>Hotel Category</label>
                            <!-- <input type="text" name="category_wise" class="form-control" required> -->

                            <select class="form-control" id="category_wise" name="category_wise" required>  
                            
                              <option value="">Select Category</option>
                              <option value="Standard">Standard</option>
                              <option value="Deluxe">Deluxe</option>
                              <option value="Super Deluxe">Super Deluxe</option>
                              <option value="Premium">Premium</option>
                              <option value="Premium Plus">Premium Plus</option>
                              <option value="Luxury">Luxury</option>
                              <option value="Others">Others</option>
                                
                            </select>
                          </div> 



                        </div>

                        <br>
                    <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="submit" value="Save">


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


<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>



   <?php
       if(isset($_GET['editid'])){
        ?>
    <script type="text/javascript">
             
       $("document").ready(function() {
          setTimeout(function() {
              $("#popup_add_hotel_category").trigger('click');
          },5);
      });

    </script>

  <?php } ?>



    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>

          function display1(input) {
           if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(event) {
                 $('#disp_package_img').attr('src', event.target.result);
              }
              reader.readAsDataURL(input.files[0]);
           }
        }

        $("#package_img").change(function() {
           display1(this);
        });
    </script>







  


</body>
</html>

<?php
 } 
 ?>
