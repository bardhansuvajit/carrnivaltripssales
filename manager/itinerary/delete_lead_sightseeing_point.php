<?php 

require_once '../../db.php';

if($_POST['sightseeing_point_id']) 
{
	$id = $_POST['sightseeing_point_id'];


	$deleteSql = "DELETE from carrnivaltrips_lead_itinerary  WHERE id = {$id}";
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
<!-- unlink($oldprofilepic); -->

<!-- php-action/delete_product.php?delid=3 -->