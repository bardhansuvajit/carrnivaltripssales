<?php 

	//Database Connection
	include('../../db.php');



	// ------------------edit course-----------------

	if(isset($_POST['update_hotel']))
	{
		$id= $_POST['id'];
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


		$img_1 = $_POST['img_1'];
		$img_2 = $_POST['img_2'];
		$img_3 = $_POST['img_3'];




	

		$valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF","pdf", "PDF" , "webp" , "WEBP");


		// for image 1
		if($_FILES["img1"]["name"] != '')
		{
			$img1=$_FILES["img1"]["name"];
			$extension_1=pathinfo($img1,PATHINFO_EXTENSION);


			if(!in_array($extension_1,$valid_extensions))
			{
				echo "<script>alert('Invalid format Image 1. Only jpg / jpeg/ png /gif format allowed');</script>";
			}
			else
			{
				$new_img1= rand().".".$extension_1;
				$path1= "../img/".$new_img1;
				move_uploaded_file($_FILES["img1"]["tmp_name"],$path1);
				if($img_1)
				{ 
					unlink('../img/'.$img_1);
				}
				

			}

		}
		else
		{
				$new_img1=$img_1;
		}





		// for image 2
		if($_FILES["img2"]["name"] != '')
		{
			$img2=$_FILES["img2"]["name"];
			$extension_2=pathinfo($img2,PATHINFO_EXTENSION);


			if(!in_array($extension_2,$valid_extensions))
			{
				echo "<script>alert('Invalid format Image 2. Only jpg / jpeg/ png /gif format allowed');</script>";
			}
			else
			{
				$new_img2= rand().".".$extension_2;
				$path2= "../img/".$new_img2;
				move_uploaded_file($_FILES["img2"]["tmp_name"],$path2);
				if($img_2)
				{ 
					unlink('../img/'.$img_2);
				}
				

			}

		}
		else
		{
				$new_img2=$img_2;
		}






		// for image 3
		if($_FILES["img3"]["name"] != '')
		{
			$img3=$_FILES["img3"]["name"];
			$extension_3=pathinfo($img3,PATHINFO_EXTENSION);


			if(!in_array($extension_3,$valid_extensions))
			{
				echo "<script>alert('Invalid format Image 3. Only jpg / jpeg/ png /gif format allowed');</script>";
			}
			else
			{
				$new_img3= rand().".".$extension_3;
				$path3= "../img/".$new_img3;
				move_uploaded_file($_FILES["img3"]["tmp_name"],$path3);
				if($img_3)
				{ 
					unlink('../img/'.$img_3);
				}
				

			}

		}
		else
		{
				$new_img3=$img_3;
		}









			//query for data updation into database  

			// $updateSql = " update carrnivaltrips_hotel  set    destination='$destination', location_wise='$location_wise', category_wise='$category_wise', name='$name',  img1='$new_img1' ,  img2='$new_img2'  ,  img3='$new_img3',    no_of_room='$no_of_room', season_start_date='$season_start_date', season_end_date='$season_end_date', pick_season_start_date='$pick_season_start_date',  pick_season_end_date='$pick_season_end_date' ,  off_season_start_date='$off_season_start_date'  ,  off_season_end_date='$off_season_end_date'  where id='$id' ";



		$updateSql = " update carrnivaltrips_hotel  set    destination='$destination', location_wise='$location_wise', category_wise='$category_wise', name='$name',  img1='$new_img1' ,  img2='$new_img2'  ,  img3='$new_img3',    no_of_room='$no_of_room'  where id='$id' ";




			if(mysqli_query($conn,$updateSql) === TRUE) 
			{
				echo "<script> alert('Successfully Update')</script>";
				echo "<script type='text/javascript'> document.location ='../display_hotel.php'; </script>";

			}
		 	else 
			{
				echo "<script> alert(' Error While Uploading')</script>";
			}


		// }


		
	}

	// ------------------Update course  logic End-----------------





	
?>



