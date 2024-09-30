<?php

    //Database Connection
    include('../../db.php');

extract($_POST);

if(isset($_POST['activity_update']))
{

    
    $package_id=$_POST['package_id'];
    $price=$_POST['price'];
    $name=$_POST['name'];
    $destination=$_POST['destination'];

  

   







    // $fees_paid=$_POST['fees_paid'];


    if($_POST['package_id']!="") 
    {
        


        // Delete data
        $qys = "DELETE FROM carrrnivaltrips_destination_inclusion where package_id='".$_POST['package_id']."'";
        mysqli_query($conn,$qys);
  
    

        // var_dump($_POST['work_name']);

        //Update data
        foreach($_POST['name'] as $key=>$value) 
        {
            # code...


          





                 
            $query1="INSERT INTO carrrnivaltrips_destination_inclusion (package_id,name, price,rank_1,status , destination ) VALUES ('".$_POST['package_id']."', '".$_POST['name'][$key]."'  , '".$_POST['price'][$key]."' , '".$_POST['rank_1'][$key]."' , '".$_POST['status'][$key]."' , '".$_POST['destination']."' )";

                // var_dump($query1);
            
            $result1=mysqli_query($conn,$query1);

         
        }

            if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$package_id");
                 echo "<script>alert('Successfully Update');</script>";
                 echo "<script>window.location='../package_inclusion?id=$package_id';</script>";

            
            }
     


    }
    else
    {

      

         foreach($_POST['name'] as $key=>$value) 
        {
            # code...



           



                 
            $query1="INSERT INTO carrrnivaltrips_destination_inclusion (package_id,name, price, rank_1, status, destination) VALUES ('".$_POST['package_id']."', '".$_POST['name'][$key]."'  , '".$_POST['price'][$key]."'  , '".$_POST['rank_1'][$key]."' , '".$_POST['status'][$key]."'  , '".$_POST['destination']."'  )";
            
            $result1=mysqli_query($conn,$query1);

           
         
        }

         if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$package_id");
                echo "<script>alert('Successfully Update');</script>";
                echo "<script>window.location='../package_inclusion.php?id=$package_id';</script>";
            
            }

    }



}

?>