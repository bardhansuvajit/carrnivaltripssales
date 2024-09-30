<?php 

	//Database Connection
	include('../../db.php');



	// ------------------edit course-----------------

	if(isset($_POST['update_season']))
	{
		$id= $_POST['id'];
		$destination = $_POST['destination'];
		


		$season_start_date = $_POST['season_start_date'];
		$season_end_date = $_POST['season_end_date'];
		$pick_season_start_date = $_POST['pick_season_start_date'];
		$pick_season_end_date = $_POST['pick_season_end_date'];
		$off_season_start_date = $_POST['off_season_start_date'];
		$off_season_end_date = $_POST['off_season_end_date'];


	




	









			//query for data updation into database  

			$updateSql = " update carrnivaltrips_destination_wise_hotel_season  set    destination='$destination',  season_start_date='$season_start_date', season_end_date='$season_end_date', pick_season_start_date='$pick_season_start_date',  pick_season_end_date='$pick_season_end_date' ,  off_season_start_date='$off_season_start_date'  ,  off_season_end_date='$off_season_end_date'  where id='$id' ";




			if(mysqli_query($conn,$updateSql) === TRUE) 
			{
				echo "<script> alert('Successfully Update')</script>";
				echo "<script type='text/javascript'> document.location ='../display_season.php'; </script>";

			}
		 	else 
			{
				echo "<script> alert(' Error While Uploading')</script>";
			}


		// }


		
	}

	// ------------------Update course  logic End-----------------





	
?>



