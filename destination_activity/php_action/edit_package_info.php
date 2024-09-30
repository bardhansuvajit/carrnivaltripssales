<?php 

	//Database Connection
	include('../../db.php');



	// ------------------edit course-----------------

	if(isset($_POST['edit_package_info']))
	{
		$id= $_POST['id'];
		$package_name = $_POST['package_name'];
		$package_status = $_POST['package_status'];

		$day = $_POST['day'];
		$night = $_POST['night'];  


		// $FirstName = $_POST['FirstName'];
		// $LastName = $_POST['LastName'];
		// $Phone = $_POST['Phone'];  

		// $Email = $_POST['Email'];
		// $DateOfBirth = $_POST['DateOfBirth'];
		// $Address = $_POST['Address'];


		// $ZipCode = $_POST['ZipCode'];
		// $Country = $_POST['Country'];
		// $State = $_POST['State'];
		// $District = $_POST['District'];
		// $Document_number = $_POST['Document_number'];

		





		// $verify_location = $_POST['verify_location'];
		// $verfication_status = $_POST['verfication_status'];
		

		
		// $image1 = $_FILES['Document_img']['name'];
		$img1 = $_POST['img1'];
		// $img2 = $_POST['img2'];
		// $img3 = $_POST['img3'];
		// $img4 = $_POST['img4'];


		// echo	$img1  ."<br>" ;
		// echo	$img2  ."<br>" ;
		// echo	$img3  ."<br>" ;
		// echo	$img4  ."<br>" ;




	$valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF","pdf", "PDF" , "webp" , "WEBP");


	// for image 1
	if($_FILES["package_img"]["name"] != '')
	{
		$image1=$_FILES["package_img"]["name"];
		$extension_1=pathinfo($image1,PATHINFO_EXTENSION);


		if(!in_array($extension_1,$valid_extensions))
		{
			echo "<script>alert('Invalid format Image 1. Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img1= rand().".".$extension_1;
			$path1= "../img/".$new_img1;
			move_uploaded_file($_FILES["package_img"]["tmp_name"],$path1);
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
	// if($_FILES["Customer_img"]["name"] != '')
	// {
	// 	$image2=$_FILES["Customer_img"]["name"];
	// 	$extension_2=pathinfo($image2,PATHINFO_EXTENSION);

	// 	if(!in_array($extension_2,$valid_extensions))
	// 	{
	// 		echo "<script>alert('Invalid format Image 2. Only jpg / jpeg/ png /gif format allowed');</script>";
	// 	}
	// 	else
	// 	{
	// 		$new_img2= rand().".".$extension_2;
	// 		$path2= "../img/".$new_img2;
	// 		move_uploaded_file($_FILES["Customer_img"]["tmp_name"],$path2);
	// 		if($img2)
	// 		{ 
	// 			unlink('../img/'.$img2);
	// 		}
			

	// 	}

	// }
	// else
	// {
	// 		$new_img2=$img2;
	// }



	// for image 3
	// if($_FILES["image3"]["name"] != '')
	// {
	// 	$image3=$_FILES["image3"]["name"];
	// 	$extension_3=pathinfo($image3,PATHINFO_EXTENSION);

	// 	if(!in_array($extension_3,$valid_extensions))
	// 	{
	// 		echo "<script>alert('Invalid format Image 3. Only jpg / jpeg/ png /gif format allowed');</script>";
	// 	}
	// 	else
	// 	{
	// 		$new_img3= rand().".".$extension_3;
	// 		$path3= "../img/".$new_img3;
	// 		move_uploaded_file($_FILES["image3"]["tmp_name"],$path3);
	// 		if($img3)
	// 		{ 
	// 			unlink('../img/'.$img3);
	// 		}
			

	// 	}

	// }
	// else
	// {
	// 		$new_img3=$img3;
	// }



	// for image 4
	// if($_FILES["image4"]["name"] != '')
	// {
	// 	$image4=$_FILES["image4"]["name"];
	// 	$extension_4=pathinfo($image4,PATHINFO_EXTENSION);

	// 	if(!in_array($extension_4,$valid_extensions))
	// 	{
	// 		echo "<script>alert('Invalid format Image 4. Only jpg / jpeg/ png /gif format allowed');</script>";
	// 	}
	// 	else
	// 	{
	// 		$new_img4= rand().".".$extension_4;
	// 		$path4= "../img/".$new_img4;
	// 		move_uploaded_file($_FILES["image4"]["tmp_name"],$path4);
	// 		if($img4)
	// 		{ 
	// 			unlink('../img/'.$img4);
	// 		}
			

	// 	}

	// }
	// else
	// {
	// 		$new_img4=$img4;
	// }
		











			//query for data updation into database  

			$updateSql = " update carrrnivaltrips_package  set    package_name='$package_name', day='$day', night='$night', package_status='$package_status',  package_img='$new_img1'  where id='$id' ";




			if(mysqli_query($conn,$updateSql) === TRUE) 
			{
				echo "<script> alert('Successfully Update')</script>";
				echo "<script type='text/javascript'> document.location ='../display_package_info.php'; </script>";

			}
		 	else 
			{
				echo "<script> alert(' Error While Uploading')</script>";
			}


		// }


		
	}

	// ------------------Update course  logic End-----------------





	
?>



