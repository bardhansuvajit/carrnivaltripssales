<?php
session_start();

require ("../db.php");




$page = isset($_POST["page"]) ? $_POST["page"] : 1;

$sql = '';



    if (isset($_POST["sightseeing_point"])) {
        $sightseeing_point = $_POST["sightseeing_point"];
       
    }

    // echo $sql;

    if (isset($_POST['day'])) {
        $day_no=$_POST['day'];
        $lead_id=$_POST['lead_id'];

    }



    foreach ($sightseeing_point as $x) 
    {
      // echo "$x <br>";

        $query_1=$conn->query("SELECT * FROM carrnivaltrips_sightseeing_points WHERE id='".$x."'" )  or die("query Failed");
        $data=$query_1->fetch_assoc();



        $sightseeing_id=$data['id'];
        $destination=$data['destination'];
        $location_wise=$data['location_wise'];
        $name=$data['name'];
        $description=$data['description'];



        $sql = "INSERT INTO carrnivaltrips_lead_itinerary(lead_id, day_no, sightseeing_id, destination, location_wise, name , description, status) VALUES ('$lead_id', '$day_no', '$sightseeing_id', '$destination',  '$location_wise',  '$name'   ,  '$description',  'Active')";

        if($conn->query($sql) === TRUE) 
        {
                   
        }
       


    }




?>