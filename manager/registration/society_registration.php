<?php 
  require_once '../db.php';
?>

 <?php 
  session_start();
  if(!isset($_SESSION["sess_admin_user"]))
  {
    echo "adddminnnnn";
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
              
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0 card-no-border">
                    <h4>Display Blog</h4>
                  </div>
                  <div class="card-body">
                    <div class="dt-ext table-responsive theme-scrollbar">
                      <table class="display" id="export-button">
                        <thead>
                          <tr>
                            <th>Entries</th>
                            <th>Society Certificate</th>
                            <th>Society Name</th>
                            <th>Admin Name</th>
                            <th>Ph No.</th>
                            <!-- <th>Whatsapp No.</th> -->
                            <th>Email</th>
                            <th>pincode</th>
                            <th>State</th>
                            <th>District</th>
                            <th>Approve</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="approve_switch">

                           <?php
                            $blog=mysqli_query($conn,"Select * from society_registration ");
                            $cnt=1;
                            $row=mysqli_num_rows($blog);
                            if($row>0)
                            {
                              while ($row=mysqli_fetch_array($blog)) 
                              {

                            ?>

                             <tr>
                                    <td><?php echo $cnt;?></td>
                                    <td> <img class="img-fluid table-avtar" src="../../img/<?php echo $row['society_certificate'];?>" alt="Blog Image" ></td>
                                    <td><?php  echo $row['society_name'];?></td>
                                    <td><?php  echo $row['admin_name'];?></td>
                                    <td><?php  echo $row['admin_ph_no'];?></td>
                                    <!-- <td><?php  echo $row['admin_whatsapp_no'];?></td> -->
                                    <td><?php  echo $row['admin_email'];?></td>
                                    <td><?php  echo $row['society_pincode'];?></td>
                                    <td><?php  echo $row['state'];?></td>
                                    <td><?php  echo $row['district'];?></td>
                                    <td><?php  echo $row['approve'];?>

                                    
                                      <form>  
                                        <div class="d-flex">
                                          <div class="text-end icon-state switch-outline">
                                            <label class="switch mb-0">
                                               <?php 
                                              if( $row['approve']=='approve' || $row['approve']=='Approve' ){ ?>
                                                <input type="checkbox" checked=""  name="approve" class="approve1" id="<?php  echo $row['id'];?>" value="Denied"><span class="switch-state bg-success"></span>
                                              <?php }else{ ?>
                                                <input type="checkbox"  name="approve"  class="approve1" value="Approve" id="<?php  echo $row['id'];?>"><span class="switch-state bg-success"></span>
                                              <?php } ?>

                                              

                                            </label>
                                          </div>
                                          <!-- <label class="col-form-label m-l-10">Approve</label> -->
                                        </div>

                                      </form>
                                    </td>



                                    
                                    <td>
                                       <ul class="action"> 
                                          <li class="edit"> <a href="edit_blog.php?editid=<?php echo htmlentities($row['id']);?>"><i class="icon-pencil-alt"></i></a></li>
                                          <li class="delete" ><a href="php_action/delete_blog.php?delid=<?php echo htmlentities($row['id']);?>" onclick="return confirm('Do you really want to Delete ?');"><i class="icon-trash"></i></a></li>
                                      </ul>
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
                        <tfoot>
                          <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Assign To</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                      </table>
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


        <script>
$(document).ready(function(){
 
 // $('#approve').bootstrapToggle({
 //  on: 'approve',
 //  off: 'denied'
 //  // onstyle: 'success',
 //  // offstyle: 'danger'
 // });

 // $('#approve').change(function(){
 //  if($(this).prop('checked'))
 //  {
 //   $('#hidden_approve').val('approve');
 //  }
 //  else
 //  {
 //   $('#hidden_approve').val('denied');
 //  }
 // });

   $("#approve_switch").on('change','.approve1',function(){
      

      var status = $(this).val();
      var id = $(this).attr('id');


      console.log(status);
      console.log(id);

      $.ajax({
      url:"switch_approve_society.php",
      method:"POST",
      data:{status :status, id:id },

      success:function(data){
       if(data == 'done')
       {
        
        alert("Successfully Change Approve Status");
       }
       else if(data='denied')
       {
        alert("Successfully Denied");

       }
      }
     });


    });


  



 // $('#approve').on('checkbox', function(event){
 //  event.preventDefault();
 
 //   var form_data = $(this).serialize();
 //   console.log(form_data);
   
  
 // });

});
</script>




  </body>
</html>

<?php } ?>