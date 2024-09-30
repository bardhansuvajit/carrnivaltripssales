<?php 
  include '../db.php';
  session_start();

  // Update the online status with a full timestamp
  $sql_up_st = "UPDATE `carrnivaltrips_lead` SET `online_status` = '".date('Y-m-d H:i:s')."' 
                WHERE id = '".$_SESSION['lead_id']."'";

  $conn->query($sql_up_st);
?>





<?php 

  // include '../db.php';
  // session_start();

  // $sql_up_st="UPDATE `carrnivaltrips_lead` SET `online_status`='".date('i')."' 
  //            WHERE id='".$_SESSION['lead_id']."'";

  // // $sql_up_st="UPDATE `carrnivaltrips_lead` SET `online_status`='".date('i')."' 
  // //            WHERE id='5'";

  //  $conn->query($sql_up_st);


?>