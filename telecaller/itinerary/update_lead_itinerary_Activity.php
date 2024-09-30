<?php
session_start();

require ("../db.php");




$page = isset($_POST["page"]) ? $_POST["page"] : 1;

$sql = '';



    if (isset($_POST["sightseeing_Activity"])) {
        $sightseeing_Activity = $_POST["sightseeing_Activity"];
       
    }

    // echo $sql;

    if (isset($_POST['day'])) {
        $day_no=$_POST['day'];
        $lead_id=$_POST['lead_id'];

    }



    foreach ($sightseeing_Activity as $x) 
    {
      // echo "$x <br>";

        $query_1=$conn->query("SELECT * FROM carrrnivaltrips_destination_activities WHERE id='".$x."'" )  or die("query Failed");
        $data=$query_1->fetch_assoc();



        $activity_id=$data['id'];
        $name=$data['name'];
        $destination=$data['destination'];
        $location_wise=$data['location_wise'];
        $price=$data['price'];
        $img=$data['img'];
        $discount=$data['discount'];
        $rank_1=$data['rank_1'];



        $sql = "INSERT INTO carrnivaltrips_lead_destination_activities (
                activity_id, 
                name, 
                destination, 
                location_wise, 
                price, 
                img, 
                discount, 
                rank_1, 
                lead_id, 
                day_no
            ) VALUES (
                '$activity_id', 
                '$name', 
                '$destination', 
                '$location_wise', 
                '$price', 
                '$img', 
                '$discount', 
                '$rank_1', 
                '$lead_id', 
                '$day_no'
            )";

            

        if($conn->query($sql) === TRUE) 
        {
                   
        }
       


    }




?>