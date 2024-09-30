
<?php

require_once '../../db.php';



if(isset($_POST['add_package_info']))
{
	$package_name = $_POST['package_name'];
	$day = $_POST['day'];
	$night = $_POST['night'];
	$package_status = $_POST['package_status']; 




	$valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF", "webp" , "WEBP");


	// for image 1
	if($_FILES["package_img"]["name"] != '')
	{
		$package_img=$_FILES["package_img"]["name"];
		$extension_1=pathinfo($package_img,PATHINFO_EXTENSION);


		if(!in_array($extension_1,$valid_extensions))
		{
			echo "<script>alert('Invalid format Slider1 Image . Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img1= rand().".".$extension_1;
			$path1= "../img/".$new_img1;
			move_uploaded_file($_FILES["package_img"]["tmp_name"],$path1);

		}

	}
	else
	{
			$new_img1="";
	}



	// $s1_text1 = $_POST['s1_text1'];
	// $s1_anim_text2 = $_POST['s1_anim_text2'];  
	// $s1_text3 = $_POST['s1_text3'];
	// $s1_squre_box_text = $_POST['s1_squre_box_text'];
	// $s1_btn1 = $_POST['s1_btn1'];
	// $s1_btn2 = $_POST['s1_btn2'];


	// $s2_text1 = $_POST['s2_text1'];
	// $s2_anim_text2 = $_POST['s2_anim_text2'];  
	// $s2_text3 = $_POST['s2_text3'];
	// $s2_squre_box_text = $_POST['s2_squre_box_text'];
	// $s2_btn1 = $_POST['s2_btn1'];
	// $s2_btn2 = $_POST['s2_btn2'];


	// $s3_text1 = $_POST['s3_text1'];
	// $s3_anim_text2 = $_POST['s3_anim_text2'];  
	// $s3_text3 = $_POST['s3_text3'];
	// $s3_squre_box_text = $_POST['s3_squre_box_text'];
	// $s3_btn1 = $_POST['s3_btn1'];
	// $s3_btn2 = $_POST['s3_btn2'];





	// // $s1_img=$_FILES["s1_img"]["name"];
	// // $image2=$_FILES["image2"]["name"];
	// // $s3_img=$_FILES["s3_img"]["name"];
	// // $image4=$_FILES["image4"]["name"];


	// $valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF", "webp" , "WEBP");


	// // for image 1
	// if($_FILES["s1_img"]["name"] != '')
	// {
	// 	$s1_img=$_FILES["s1_img"]["name"];
	// 	$extension_1=pathinfo($s1_img,PATHINFO_EXTENSION);


	// 	if(!in_array($extension_1,$valid_extensions))
	// 	{
	// 		echo "<script>alert('Invalid format Slider1 Image . Only jpg / jpeg/ png /gif format allowed');</script>";
	// 	}
	// 	else
	// 	{
	// 		$new_img1= rand().".".$extension_1;
	// 		$path1= "../img/".$new_img1;
	// 		move_uploaded_file($_FILES["s1_img"]["tmp_name"],$path1);

	// 	}

	// }
	// else
	// {
	// 		$new_img1="";
	// }




	// // for image 2
	// if($_FILES["s2_img"]["name"] != '')
	// {
	// 	$s2_img=$_FILES["s2_img"]["name"];
	// 	$extension_2=pathinfo($s2_img,PATHINFO_EXTENSION);

	// 	if(!in_array($extension_2,$valid_extensions))
	// 	{
	// 		echo "<script>alert('Invalid format Slider2 img . Only jpg / jpeg/ png /gif format allowed');</script>";
	// 	}
	// 	else
	// 	{
	// 		$new_img2= rand().".".$extension_2;
	// 		$path2= "../img/".$new_img2;
	// 		move_uploaded_file($_FILES["s2_img"]["tmp_name"],$path2);

	// 	}

	// }
	// else
	// {
	// 		$new_img2="";
	// }




	// // for image 3
	// if($_FILES["s3_img"]["name"] != '')
	// {
	// 	$s3_img=$_FILES["s3_img"]["name"];
	// 	$extension_3=pathinfo($s3_img,PATHINFO_EXTENSION);

	// 	if(!in_array($extension_3,$valid_extensions))
	// 	{
	// 		echo "<script>alert('Invalid format Slider3 Image . Only jpg / jpeg/ png /gif format allowed');</script>";
	// 	}
	// 	else
	// 	{
	// 		$new_img3= rand().".".$extension_3;
	// 		$path3= "../img/".$new_img3;
	// 		move_uploaded_file($_FILES["s3_img"]["tmp_name"],$path3);

	// 	}

	// }
	// else
	// {
	// 		$new_img3="";
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

	// 	}

	// }
	// else
	// {
	// 		$new_img4="";
	// }




	// $sql = "INSERT INTO carrrnivaltrips_package (package_name, day, night, package_status, s1_anim_text2, s1_text3, s1_btn1,  s1_btn2, s1_squre_box_text, 		 s2_text1, s2_anim_text2, s2_text3, s2_btn1,  s2_btn2, s2_squre_box_text,      		 s3_text1, s3_anim_text2, s3_text3, s3_btn1,  s3_btn2, s3_squre_box_text,        s1_img, s2_img, s3_img) 

	// 	VALUES ('$package_name', '$day', '$night', '$package_status', '$s1_anim_text2', '$s1_text3', '$s1_btn1',   '$s1_btn2',  '$s1_squre_box_text' , 					 '$s2_text1', '$s2_anim_text2', '$s2_text3', '$s2_btn1',   '$s2_btn2',  '$s2_squre_box_text' ,      				'$s3_text1', '$s3_anim_text2', '$s3_text3', '$s3_btn1',   '$s3_btn2',  '$s3_squre_box_text' ,              '$new_img1', '$new_img2', '$new_img3' )";


	$sql = "INSERT INTO carrrnivaltrips_package (package_name, day, night, package_status, package_img) 
		VALUES ('$package_name', '$day', '$night', '$package_status',  '$new_img1' )";



	if(mysqli_query($conn,$sql) === TRUE) 
	{

		echo "<script>alert('You have successfully inserted the data');</script>";
		echo "<script type='text/javascript'> document.location ='../display_package_info.php'; </script>";

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