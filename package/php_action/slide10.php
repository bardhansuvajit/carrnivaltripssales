<?php 

	//Database Connection
	include('../../db.php');



	// ------------------edit course-----------------

	if(isset($_POST['slide10_update']))
	{
		$id= $_POST['id'];
		$package_id= $_POST['package_id'];


		$achievement_heading = $_POST['achievement_heading'];
		$achievement_description = $_POST['achievement_description'];
		$achievement_btn = $_POST['achievement_btn'];

		$achievement_title1 = $_POST['achievement_title1'];
		$achievement_count1 = $_POST['achievement_count1'];  
		$achievement_title2 = $_POST['achievement_title2'];
		$achievement_count2 = $_POST['achievement_count2']; 

		$achievement_title3 = $_POST['achievement_title3'];
		$achievement_count3 = $_POST['achievement_count3'];  
		$achievement_title4 = $_POST['achievement_title4'];
		$achievement_count4 = $_POST['achievement_count4'];  

		



			//query for data updation into database  

			$updateSql = " update carrnivaltrips_details  set    achievement_heading='$achievement_heading', achievement_description='$achievement_description', achievement_btn='$achievement_btn',        achievement_title1='$achievement_title1',  achievement_count1='$achievement_count1',  achievement_title2='$achievement_title2',  achievement_count2='$achievement_count2',  achievement_title3='$achievement_title3',  achievement_count3='$achievement_count3',  achievement_title4='$achievement_title4',  achievement_count4='$achievement_count4'     where id='$id' ";




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



