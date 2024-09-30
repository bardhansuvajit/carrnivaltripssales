<?php 

	//Database Connection
	include('../../db.php');



	// ------------------edit course-----------------

	if(isset($_POST['slide9_update']))
	{
		$id= $_POST['id'];
		$package_id= $_POST['package_id'];
		

		$contact_person = $_POST['contact_person'];
		$contact_text = $_POST['contact_text'];

		$contact_media_link = $_POST['contact_media_link'];
		$contact_ph = $_POST['contact_ph'];  

			



			//query for data updation into database  

			$updateSql = " update carrnivaltrips_details  set    contact_person='$contact_person', contact_text='$contact_text', contact_media_link='$contact_media_link', contact_ph='$contact_ph' where id='$id' ";




			if(mysqli_query($conn,$updateSql) === TRUE) 
			{
				echo "<script> alert('Successfully Update')</script>";
				echo "<script type='text/javascript'> document.location ='../slide9.php?id=$package_id'; </script>";

			}
		 	else 
			{
				echo "<script> alert(' Error While Uploading')</script>";
			}


		// }


		
	}

	// ------------------Update course  logic End-----------------





	
?>



