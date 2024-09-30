<?php 

	//Database connection
	include('../../db.php');

?>


<?php


extract($_POST);

if(isset($_POST['activity_update']))
{

    
    $package_id=$_POST['package_id'];
    $day=$_POST['day'];

    $rank_1=$_POST['rank_1'];
    $name=$_POST['name'];
    // $img=$_POST['img'];
    // $img_1=$_POST['img_1'];

    // echo $img;

   







    // $fees_paid=$_POST['fees_paid'];


    if($_POST['package_id']!="") 
    {
        


        // Delete data
        $qys = "DELETE FROM carrrnivaltrips_package_itinerary where package_id='".$_POST['package_id']."'  AND  day_no='".$_POST['day']."'";
        mysqli_query($conn,$qys);
  
    

        // var_dump($_POST['work_name']);

        //Update data
        foreach($_POST['name'] as $key=>$value) 
        {
            

                 
            $query1="INSERT INTO carrrnivaltrips_package_itinerary (package_id,name, rank_1,  day_no ) VALUES ('".$_POST['package_id']."', '".$_POST['name'][$key]."'  , '".$_POST['rank_1'][$key]."'  ,   '$day' )";

                // var_dump($query1);
            
            $result1=mysqli_query($conn,$query1);

         
        }

            if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$package_id");
                 echo "<script>alert('Successfully Update');</script>";
                 echo "<script>window.location='../day.php?id=$package_id&day=$day';</script>";

            
            }
     


    }
    else
    {

      

         foreach($_POST['name'] as $key=>$value) 
        {
            # code...






                 
            $query1="INSERT INTO carrrnivaltrips_package_itinerary (package_id,name, rank_1,day_no) VALUES ('".$_POST['package_id']."', '".$_POST['name'][$key]."'  , '".$_POST['rank_1'][$key]."'   ,  '$day' )";
            
            $result1=mysqli_query($conn,$query1);

           
         
        }

         if($result1 === TRUE)
            {
                // header("location: users-view.php?id=$package_id");
                echo "<script>alert('Successfully Update');</script>";
                echo "<script>window.location='../day.php?id=$package_id&day=$day';</script>";
            
            }

    }



}

?>


