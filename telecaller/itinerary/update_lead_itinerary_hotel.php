<?php
session_start();

require ("../db.php");




$page = isset($_POST["page"]) ? $_POST["page"] : 1;

$sql = '';



    if (isset($_POST["sightseeing_hotel_rooms"])) {
        $sightseeing_hotel_rooms = $_POST["sightseeing_hotel_rooms"];
       
    }

    // echo $sql;

    if (isset($_POST['day'])) {
        $day_no=$_POST['day'];
        $lead_id=$_POST['lead_id'];

    }



    foreach ($sightseeing_hotel_rooms as $x) 
    {
      // echo "$x <br>";

        $query_1=$conn->query("SELECT * FROM carrnivaltrips_hotel_rooms WHERE id='".$x."'" )  or die("query Failed");
        $data=$query_1->fetch_assoc();



        $room_id=$data['id'];
        $destination=$data['destination'];
        $location_wise=$data['location_wise'];
        $hotel_id=$data['hotel_id'];
        $hotel_category_wise=$data['hotel_category_wise'];

        $hotel_name=$data['hotel_name'];
        $room_name=$data['name'];
        $capacity=$data['capacity'];
        $bed=$data['bed'];
        $ac_type=$data['ac_type'];
        $amenities=$data['amenities'];



        $price=$data['price'];
        $pick_season_price=$data['pick_season_price'];
        $off_season_price=$data['off_season_price'];
        $booked=$data['booked'];
        $status=$data['status'];



        $sql = "INSERT INTO carrnivaltrips_lead_itinerary_hotel(lead_id, day_no, hotel_id, room_id, destination, location_wise , hotel_category_wise,        hotel_name, room_name, capacity, bed, ac_type, amenities , price, pick_season_price, off_season_price,  booked) VALUES ('$lead_id', '$day_no', '$hotel_id', '$room_id',  '$destination',  '$location_wise'   ,  '$hotel_category_wise',      '$hotel_name', '$room_name', '$capacity', '$bed',  '$ac_type',  '$amenities'   ,  '$price',  '$pick_season_price'   ,  '$off_season_price',    'Yes')";

        if($conn->query($sql) === TRUE) 
        {
                   
        }
       


    }




?>