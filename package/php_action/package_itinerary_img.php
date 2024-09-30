<?php 

	//Database Connection
	include('../../db.php');



	// ------------------edit itinerary img-----------------

	if(isset($_POST['package_itinerary_img']))
	{
		$id= $_POST['id'];
		$day_no = $_POST['day_no'];
				



		



			$valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF","pdf", "PDF" , "webp" , "WEBP");


			// for image 1
			if($_FILES["img_1"]["name"] != '')
			{
				$image1=$_FILES["img_1"]["name"];
				$extension_1=pathinfo($image1,PATHINFO_EXTENSION);


				if(!in_array($extension_1,$valid_extensions))
				{
					echo "<script>alert('Invalid format Image 1. Only jpg / jpeg/ png /gif format allowed');</script>";
				}
				else
				{
					$new_img1= rand().".".$extension_1;
					$path1= "../img/".$new_img1;
					move_uploaded_file($_FILES["img_1"]["tmp_name"],$path1);
					

				}

			}
			else
			{
				$new_img1="";
			}
			



			// for image 2
			if($_FILES["img_2"]["name"] != '')
			{
				$image2=$_FILES["img_2"]["name"];
				$extension_2=pathinfo($image2,PATHINFO_EXTENSION);


				if(!in_array($extension_2,$valid_extensions))
				{
					echo "<script>alert('Invalid format Image 2. Only jpg / jpeg/ png /gif format allowed');</script>";
				}
				else
				{
					$new_img2= rand().".".$extension_2;
					$path2= "../img/".$new_img2;
					move_uploaded_file($_FILES["img_2"]["tmp_name"],$path2);
				
					

				}

			}
			else
			{
				$new_img2="";
			}
			
			





			// for image 3
			if($_FILES["img_3"]["name"] != '')
			{
				$image3=$_FILES["img_3"]["name"];
				$extension_3=pathinfo($image3,PATHINFO_EXTENSION);


				if(!in_array($extension_3,$valid_extensions))
				{
					echo "<script>alert('Invalid format Image 3. Only jpg / jpeg/ png /gif format allowed');</script>";
				}
				else
				{
					$new_img3= rand().".".$extension_3;
					$path3= "../img/".$new_img3;
					move_uploaded_file($_FILES["img_3"]["tmp_name"],$path3);
					

				}

			}
			else
			{
				$new_img3="";
			}
			
			









			//query for data insertion into database  

			


			$sql = "INSERT INTO carrrnivaltrips_package_itinerary_img (package_id, day_no, img_1, img_2, img_3) 
				VALUES ('$id', '$day_no', '$new_img1', '$new_img2',  '$new_img3' )";





			if(mysqli_query($conn,$sql) === TRUE) 
			{
				echo "<script> alert('Successfully Update')</script>";
				echo "<script>window.location='../day.php?id=$id&day=$day_no';</script>";

			}
		 	else 
			{
				echo "<script> alert(' Error While Uploading')</script>";
			}


		// }


		
	}



	// ------------------insert itinerary  img-----------------


	if(isset($_POST['update_package_itinerary_img']))
	{
		$id= $_POST['id'];
		$day_no = $_POST['day_no'];
				


		$img1 = $_POST['img1'];
		$img2 = $_POST['img2'];
		$img3 = $_POST['img3'];

		



			$valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF","pdf", "PDF" , "webp" , "WEBP");


			// for image 1
			if($_FILES["img_1"]["name"] != '')
			{
				$image1=$_FILES["img_1"]["name"];
				$extension_1=pathinfo($image1,PATHINFO_EXTENSION);


				if(!in_array($extension_1,$valid_extensions))
				{
					echo "<script>alert('Invalid format Image 1. Only jpg / jpeg/ png /gif format allowed');</script>";
				}
				else
				{
					$new_img1= rand().".".$extension_1;
					$path1= "../img/".$new_img1;
					move_uploaded_file($_FILES["img_1"]["tmp_name"],$path1);
					if($img1)
					{ 
						unlink('../img/'.$img1);
					}
					

				}

			}
			else
			{
					$new_img1=$img1;
			}



			// for image 2
			if($_FILES["img_2"]["name"] != '')
			{
				$image2=$_FILES["img_2"]["name"];
				$extension_2=pathinfo($image2,PATHINFO_EXTENSION);


				if(!in_array($extension_2,$valid_extensions))
				{
					echo "<script>alert('Invalid format Image 2. Only jpg / jpeg/ png /gif format allowed');</script>";
				}
				else
				{
					$new_img2= rand().".".$extension_2;
					$path2= "../img/".$new_img2;
					move_uploaded_file($_FILES["img_2"]["tmp_name"],$path2);
					if($img2)
					{ 
						unlink('../img/'.$img2);
					}
					

				}

			}
			else
			{
					$new_img2=$img2;
			}





			// for image 3
			if($_FILES["img_3"]["name"] != '')
			{
				$image3=$_FILES["img_3"]["name"];
				$extension_3=pathinfo($image3,PATHINFO_EXTENSION);


				if(!in_array($extension_3,$valid_extensions))
				{
					echo "<script>alert('Invalid format Image 3. Only jpg / jpeg/ png /gif format allowed');</script>";
				}
				else
				{
					$new_img3= rand().".".$extension_3;
					$path3= "../img/".$new_img3;
					move_uploaded_file($_FILES["img_3"]["tmp_name"],$path3);
					if($img3)
					{ 
						unlink('../img/'.$img3);
					}
					

				}

			}
			else
			{
					$new_img3=$img3;
			}









			//query for data updation into database  

			$updateSql = " update carrrnivaltrips_package_itinerary_img  set    img_1='$new_img1' , img_2='$new_img2' ,img_3='$new_img3' where package_id='$id' and  day_no='$day_no' ";




			if(mysqli_query($conn,$updateSql) === TRUE) 
			{
				echo "<script> alert('Successfully Update')</script>";
				echo "<script>window.location='../day.php?id=$id&day=$day_no';</script>";

			}
		 	else 
			{
				echo "<script> alert(' Error While Uploading')</script>";
			}


		// }


		
	}






	
?>



