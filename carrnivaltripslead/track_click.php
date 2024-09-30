<?php

include('../db.php');


if(isset($_POST['product'])) {
    $product = $_POST['product'];
    $user_id = $_POST['user_id'];


    // Insert product click data with current date and time
    $sql = "INSERT INTO carrnivaltrips_lead_track (user_id,name, click_time) VALUES ('$user_id','$product', NOW())";
    



    if($conn->query($sql) === TRUE) 
    {}

}
   
    
?>