<?php 

require_once '../../db.php';

if($_POST['activity_id']) 
{
	$id = $_POST['activity_id'];


	$deleteSql = "DELETE from carrnivaltrips_lead_destination_adventure_activities  WHERE id = {$id}";
	if(mysqli_query($conn,$deleteSql) === TRUE) 
	{
		
		// echo "<script> alert('Successfully removed!')</script>";
		// echo "<script type='text/javascript'> document.location ='../display_product.php'; </script>";


		
	} else 
	{
		echo "<script> alert(' Error While Deleing Product')</script>";
		// echo "Error updating record : " . $connect->error;
	}

}

?>
