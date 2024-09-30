<?php 


require_once('../db.php');
session_start();


 ?>


<?php 
  if(!isset($_SESSION["sess_user_verifier"]))
  {
    header("location:login/index.php");
  } 
  else 
  {
  // echo $_SESSION["sess_user_verifier"];
  $ph_no=$_SESSION["sess_user_verifier"];

  
  $query=$conn->query("SELECT * FROM fishfed_seller_verification_team WHERE ph_no='".$ph_no."'" )  or die("query Failed");

  $data=$query->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>AdminLTE 3 | Blank Page</title> -->
  <title>Fishfed | Verifier Admin</title>

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
            <h1>Company Seller Verification </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Company Seller Verification</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <?php 
        $selectQuery="Select * from fishfed_seller_ac_company ";

     ?>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Company Seller Verification</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover table-striped">
                  <thead>
                    <tr>
                      <th>Entries</th>

                      <th>Company</th>
                      <th>Name</th>

                      <th>Phone No</th>
                      <th>Email</th>
                      <th>Pincode</th>
                      <th>State</th>

                      <th>District</th>
                      <th>Address</th>
                      <th>Verification</th>
                      <!-- <th>Image 4</th> -->

                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>

                    <?php
                            $product=mysqli_query($conn,"Select * from fishfed_seller_for_verification where  verification_team_id = '".$data['id']."' AND seller_role='company'");
                            $cnt=1;
                            $row=mysqli_num_rows($product);
                            if($row>0)
                            {
                              while ($row=mysqli_fetch_array($product)) 
                              {

                                $query1=$conn->query("SELECT * FROM fishfed_seller_ac_company WHERE id='".$row['seller_id']."'" )  or die("query Failed");
                                $row1=$query1->fetch_assoc();


                            ?>

                                <!--Fetch the Records -->

                                <tr>
                                    <td><?php echo $cnt;?></td>
                            
                                    <td><?php  echo $row1['company_name'];?></td>
                                    <td><?php  echo $row1['owner_name'];?></td>

                                    <td><?php  echo $row1['ph_no'];?></td>                                                     
                                    <td><?php  echo $row1['email'];?></td>
                                    <td><?php  echo $row1['pincode'];?></td>
                                    <td><?php  echo $row1['state'];?></td>
                                    <td><?php  echo $row1['district'];?></td>

                                    <td><?php  echo $row1['business_address'];?></td>
                                    <td><?php  echo $row1['verfication_status'];?></td>



                                    
                                   

                                    <td>
                                        
                                        <a href="edit_seller_verification_company.php?editid=<?php echo htmlentities($row1['id']);?>" class="edit" title="Update" data-toggle="tooltip"  style="color:green;">Update <i class="fas fa-edit"></i></a>
                                        <br>
                                        <a href="watch_seller_verification_company.php?editid=<?php echo htmlentities($row1['id']);?>" class="edit" title="Watch" data-toggle="tooltip"  style="color:green;">Watch <i class="fas fa-edit"></i></a>


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

</body>
</html>

<?php 
}
 ?>
