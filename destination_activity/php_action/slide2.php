<?php 

	//Database Connection
	include('../../db.php');



	// ------------------edit course-----------------

	if(isset($_POST['slide2_update']))
	{
		$id= $_POST['id'];
		$package_id= $_POST['package_id'];
		
		
		$exp_media_link = $_POST['exp_media_link'];
		$exp_details = $_POST['exp_details'];

		$exp_p1_heading = $_POST['exp_p1_heading'];
		$exp_p1_details = $_POST['exp_p1_details'];  

		$exp_p2_heading = $_POST['exp_p2_heading'];
		$exp_p2_details = $_POST['exp_p2_details'];  

		$exp_p3_heading = $_POST['exp_p3_heading'];
		$exp_p3_details = $_POST['exp_p3_details'];  

		$exp_p4_heading = $_POST['exp_p4_heading'];
		$exp_p4_details = $_POST['exp_p4_details'];  

		$exp_p5_heading = $_POST['exp_p5_heading'];
		$exp_p5_details = $_POST['exp_p5_details'];  

		$exp_p6_heading = $_POST['exp_p6_heading'];
		$exp_p6_details = $_POST['exp_p6_details'];  







			//query for data updation into database  

			$updateSql = " update carrnivaltrips_details  set    exp_media_link='$exp_media_link', exp_details='$exp_details', exp_p1_heading='$exp_p1_heading', exp_p1_details='$exp_p1_details',  exp_p2_heading='$exp_p2_heading',  exp_p2_details='$exp_p2_details',                           exp_p3_heading='$exp_p3_heading', exp_p3_details='$exp_p3_details',  exp_p4_heading='$exp_p4_heading',  exp_p4_details='$exp_p4_details'  ,                           exp_p5_heading='$exp_p5_heading', exp_p5_details='$exp_p5_details',  exp_p6_heading='$exp_p6_heading',  exp_p6_details='$exp_p6_details'  where id='$id' ";




			if(mysqli_query($conn,$updateSql) === TRUE) 
			{
				echo "<script> alert('Successfully Update')</script>";
				echo "<script type='text/javascript'> document.location ='../edit_package_info.php?editid=$package_id'; </script>";


			}
		 	else 
			{
				echo "<script> alert(' Error While Uploading')</script>";
			}


		// }


		
	}

	// ------------------Update course  logic End-----------------





	
?>



