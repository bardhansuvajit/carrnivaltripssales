
<?php

require_once '../../db.php';



if(isset($_POST['add_season']))
{
	$destination = $_POST['destination'];
	

	$season_start_date = $_POST['season_start_date'];
	$season_end_date = $_POST['season_end_date'];
	$pick_season_start_date = $_POST['pick_season_start_date'];
	$pick_season_end_date = $_POST['pick_season_end_date'];
	$off_season_start_date = $_POST['off_season_start_date'];
	$off_season_end_date = $_POST['off_season_end_date'];







	





	$sql = "INSERT INTO carrnivaltrips_destination_wise_hotel_season (destination,  season_start_date, season_end_date, pick_season_start_date, pick_season_end_date , off_season_start_date , off_season_end_date) 
		VALUES ('$destination',  '$season_start_date', '$season_end_date', '$pick_season_start_date',   '$pick_season_end_date',   '$off_season_start_date' ,   '$off_season_end_date'  )";



	if(mysqli_query($conn,$sql) === TRUE) 
	{

		echo "<script>alert('You have successfully inserted the data');</script>";
		echo "<script type='text/javascript'> document.location ='../display_season.php'; </script>";

		// echo "<script>alert('New Record Successfully Insert');</script>";
		// echo "<p>New Record Successfully Insert</p>";
		// echo "<a href='../create.php'><button type='button'>Back</button></a>";
		// echo "<a href='../index.php'><button type='button'>Home</button></a>";
	}
	 else 
	{
		// echo "Error " . $sql . ' ' . $conn->connect_error;
		echo "<script> alert(' Error While Uploading')</script>";
	} 


}



 ?>