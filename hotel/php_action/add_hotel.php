
<?php

require_once '../../db.php';



if(isset($_POST['add_hotel']))
{
	$destination = $_POST['destination'];
	$location_wise = $_POST['location_wise'];
	$category_wise = $_POST['category_wise'];
	$name = $_POST['name']; 
	$no_of_room = $_POST['no_of_room']; 


	// $season_start_date = $_POST['season_start_date'];
	// $season_end_date = $_POST['season_end_date'];
	// $pick_season_start_date = $_POST['pick_season_start_date'];
	// $pick_season_end_date = $_POST['pick_season_end_date'];
	// $off_season_start_date = $_POST['off_season_start_date'];
	// $off_season_end_date = $_POST['off_season_end_date'];






	$valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF", "webp" , "WEBP");


	// for image 1
	if($_FILES["img1"]["name"] != '')
	{
		$img1=$_FILES["img1"]["name"];
		$extension_1=pathinfo($img1,PATHINFO_EXTENSION);


		if(!in_array($extension_1,$valid_extensions))
		{
			echo "<script>alert('Invalid format Slider1 Image . Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img1= rand().".".$extension_1;
			$path1= "../img/".$new_img1;
			move_uploaded_file($_FILES["img1"]["tmp_name"],$path1);

		}

	}
	else
	{
			$new_img1="";
	}




	// for image 2
	if($_FILES["img2"]["name"] != '')
	{
		$img2=$_FILES["img2"]["name"];
		$extension_2=pathinfo($img2,PATHINFO_EXTENSION);


		if(!in_array($extension_2,$valid_extensions))
		{
			echo "<script>alert('Invalid format Slider2 Image . Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img2= rand().".".$extension_2;
			$path2= "../img/".$new_img2;
			move_uploaded_file($_FILES["img2"]["tmp_name"],$path2);

		}

	}
	else
	{
			$new_img2="";
	}




	// for image 3
	if($_FILES["img3"]["name"] != '')
	{
		$img3=$_FILES["img3"]["name"];
		$extension_3=pathinfo($img3,PATHINFO_EXTENSION);


		if(!in_array($extension_3,$valid_extensions))
		{
			echo "<script>alert('Invalid format Slider3 Image . Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img3= rand().".".$extension_3;
			$path3= "../img/".$new_img3;
			move_uploaded_file($_FILES["img3"]["tmp_name"],$path3);

		}

	}
	else
	{
			$new_img3="";
	}



	





	// $sql = "INSERT INTO carrnivaltrips_hotel (destination, location_wise, category_wise, name, img1 , img2 , img3  , season_start_date, season_end_date, pick_season_start_date, pick_season_end_date , off_season_start_date , off_season_end_date, no_of_room ) 
	// 	VALUES ('$destination', '$location_wise', '$category_wise', '$name',   '$new_img1',   '$new_img2' ,   '$new_img3'  , '$season_start_date', '$season_end_date', '$pick_season_start_date',   '$pick_season_end_date',   '$off_season_start_date' ,   '$off_season_end_date' ,   '$no_of_room' )";



	$sql = "INSERT INTO carrnivaltrips_hotel (destination, location_wise, category_wise, name, img1 , img2 , img3  , no_of_room ) 
		VALUES ('$destination', '$location_wise', '$category_wise', '$name',   '$new_img1',   '$new_img2' ,   '$new_img3'  ,    '$no_of_room' )";



	if(mysqli_query($conn,$sql) === TRUE) 
	{

		echo "<script>alert('You have successfully inserted the data');</script>";
		echo "<script type='text/javascript'> document.location ='../display_hotel.php'; </script>";

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