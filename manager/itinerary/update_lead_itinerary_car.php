<?php
session_start();

require ("../db.php");




$page = isset($_POST["page"]) ? $_POST["page"] : 1;

$sql = '';



    if (isset($_POST["sightseeing_car"])) {
        $sightseeing_car = $_POST["sightseeing_car"];
       
    }

    // echo $sql;

    if (isset($_POST['day'])) {
        $day_no=$_POST['day'];
        $lead_id=$_POST['lead_id'];

    }



    foreach ($sightseeing_car as $x) 
    {
      // echo "$x <br>";

        $query_1=$conn->query("SELECT * FROM carrnivaltrips_car_rent WHERE id='".$x."'" )  or die("query Failed");
        $data=$query_1->fetch_assoc();



        $car_id=$data['id'];
        $car_type=$data['car_type'];
        $destination=$data['destination'];
        $location_wise=$data['location_wise'];
        $sightseeing_point=$data['sightseeing_point'];

        $drop_location_wise=$data['drop_location_wise'];
        $drop_sightseeing_point=$data['drop_sightseeing_point'];
        $price=$data['price'];



        $sql = "INSERT INTO carrnivaltrips_lead_car_rent (
                car_id, 
                car_type, 
                destination, 
                location_wise, 
                sightseeing_point, 
                drop_location_wise, 
                drop_sightseeing_point, 
                price, 
                lead_id, 
                day_no
            ) VALUES (
                '$car_id', 
                '$car_type', 
                '$destination', 
                '$location_wise', 
                '$sightseeing_point', 
                '$drop_location_wise', 
                '$drop_sightseeing_point', 
                '$price', 
                '$lead_id', 
                '$day_no'
            )";

            

        if($conn->query($sql) === TRUE) 
        {
                   
        }
       


    }




?>