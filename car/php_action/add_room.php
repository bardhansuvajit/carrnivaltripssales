<?php 

	//Database connection
	include('../../db.php');

?>


<?php


extract($_POST);

if(isset($_POST['room_update']))
{

    
    $hotel_id=$_POST['hotel_id'];
    $hotel_name=$_POST['hotel_name'];

    $destination=$_POST['destination'];
    $location_wise=$_POST['location_wise'];
    $hotel_category_wise=$_POST['hotel_category_wise'];



    $name=$_POST['name'];
    $capacity=$_POST['capacity'];
    $bed=$_POST['bed'];
    $price=$_POST['price'];
    $status=$_POST['status'];

    $pick_season_price=$_POST['pick_season_price'];
    $off_season_price=$_POST['off_season_price'];
    $amenities=$_POST['amenities'];


    // $img=$_POST['img'];
    // $img_1=$_POST['img_1'];

    // echo $hotel_id;

   







    // $fees_paid=$_POST['fees_paid'];


    if($_POST['hotel_id']!="") 
    {
        


        // Delete data
        $qys = "DELETE FROM carrnivaltrips_hotel_rooms where hotel_id='".$_POST['hotel_id']."'  ";
        mysqli_query($conn,$qys);
  
    

        // var_dump($_POST['work_name']);

        //Update data
        foreach($_POST['name'] as $key=>$value) 
        {
            

                 
            $query1="INSERT INTO carrnivaltrips_hotel_rooms (hotel_id,name, capacity,  hotel_name, destination , location_wise, hotel_category_wise,  bed, ac_type,price, pick_season_price, off_season_price, amenities, status) VALUES ('".$_POST['hotel_id']."', '".$_POST['name'][$key]."'  , '".$_POST['capacity'][$key]."'  ,   '$hotel_name' ,  '$destination' ,   '$location_wise' ,   '$hotel_category_wise'  , '".$_POST['bed'][$key]."' , '".$_POST['ac_type'][$key]."' , '".$_POST['price'][$key]."' ,      '".$_POST['pick_season_price'][$key]."' , '".$_POST['off_season_price'][$key]."' , '".$_POST['amenities'][$key]."' ,     '".$_POST['status'][$key]."'  )";

                // var_dump($query1);
            
            $result1=mysqli_query($conn,$query1);

         
        }

            if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$hotel_id");
                 echo "<script>alert('Successfully Update');</script>";
                 echo "<script>document.location='../edit_hotel.php?editid=$hotel_id';</script>";

            
            }
     


    }
    else
    {

      

         foreach($_POST['name'] as $key=>$value) 
        {
            # code...






                 
            $query1="INSERT INTO carrnivaltrips_hotel_rooms (hotel_id,name, capacity,  hotel_name ,destination , location_wise, hotel_category_wise, bed, ac_type,price, pick_season_price, off_season_price, amenities, status) VALUES ('".$_POST['hotel_id']."', '".$_POST['name'][$key]."'  , '".$_POST['capacity'][$key]."'  ,   '$hotel_name' ,   '$destination' ,   '$location_wise' ,   '$hotel_category_wise'  , '".$_POST['bed'][$key]."' , '".$_POST['ac_type'][$key]."' , '".$_POST['price'][$key]."' ,        '".$_POST['pick_season_price'][$key]."' , '".$_POST['off_season_price'][$key]."' , '".$_POST['amenities'][$key]."' ,     '".$_POST['status'][$key]."'  )";
            
            $result1=mysqli_query($conn,$query1);

           
         
        }

         if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$hotel_id");
                echo "<script>alert('Successfully Update');</script>";
                echo "<script>document.location='../edit_hotel.php?editid=$hotel_id';</script>";
            
            }

    }



}

?>


