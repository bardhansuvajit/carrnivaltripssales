<?php 
  // require_once '../db.php';
 include '../db.php';
  
  // Fetch all users and their online status
  $sql = "SELECT * FROM `carrnivaltrips_lead`";
  $fetch_users = $conn->query($sql);
  
  while ($row = $fetch_users->fetch_assoc()) {
    // Check if the user was online in the last 2 minutes
    $last_active = strtotime($row['online_status']);
    $current_time = time();
    
    if (($current_time - $last_active) <= 120) { // Within 2 minutes
      echo "<span style='background-color:green; border: 1px solid white; width: 10px; height: 10px; border-radius: 50%;'></span> User: ".$row['name']." is online";
    } else {
      echo "<span style='background-color:red; border: 1px solid gray; width: 10px; height: 10px; border-radius: 50%;'></span> User: ".$row['name']." is offline";
    }
    echo "<br>";
  }
?>




