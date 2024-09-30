<?php 

	//Database connection
	include('../../db.php');

?>


<?php


extract($_POST);

if(isset($_POST['activity_update']))
{

    
    $sightseeing_id=$_POST['sightseeing_id'];
    $destination=$_POST['destination'];
    $location_wise=$_POST['location_wise'];


    $description=$_POST['description'];
    $name=$_POST['name'];
    // $img=$_POST['img'];
    // $img_1=$_POST['img_1'];

    // echo $sightseeing_id;

   







    // $fees_paid=$_POST['fees_paid'];


    if($_POST['sightseeing_id']!="") 
    {
        


        // Delete data
        $qys = "DELETE FROM carrnivaltrips_sightseeing_points where sightseeing_id='".$_POST['sightseeing_id']."'  ";
        mysqli_query($conn,$qys);
  
    

        // var_dump($_POST['work_name']);

        //Update data
        foreach($_POST['name'] as $key=>$value) 
        {
            

                 
            $query1="INSERT INTO carrnivaltrips_sightseeing_points (sightseeing_id,name, description,  destination ,location_wise ) VALUES ('".$_POST['sightseeing_id']."', '".$_POST['name'][$key]."'  , '".$_POST['description'][$key]."'  ,   '$destination' ,   '$location_wise' )";

                // var_dump($query1);
            
            $result1=mysqli_query($conn,$query1);

         
        }

            if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$sightseeing_id");
                 echo "<script>alert('Successfully Update');</script>";
                 echo "<script>document.location='../add_sightseeing.php?id=$sightseeing_id';</script>";

            
            }
     


    }
    else
    {

      

         foreach($_POST['name'] as $key=>$value) 
        {
            # code...






                 
            $query1="INSERT INTO carrnivaltrips_sightseeing_points (sightseeing_id,name, description,destination,location_wise) VALUES ('".$_POST['sightseeing_id']."', '".$_POST['name'][$key]."'  , '".$_POST['description'][$key]."'   ,  '$destination' ,  '$location_wise' )";
            
            $result1=mysqli_query($conn,$query1);

           
         
        }

         if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$sightseeing_id");
                echo "<script>alert('Successfully Update');</script>";
                echo "<script>document.location='../add_sightseeing.php?id=$sightseeing_id';</script>";
            
            }

    }



}

?>


