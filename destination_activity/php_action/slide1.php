<?php 

	//Database Connection
	include('../../db.php');
// add_slide1


	// ------------------edit course-----------------

	if(isset($_POST['edit_package_info_slide1']))
	{
		$id= $_POST['id'];
		$package_id= $_POST['package_id'];
		// $package_name = $_POST['package_name'];
		$destination = $_POST['destination'];





	$s1_text1 = $_POST['s1_text1'];
	$s1_anim_text2 = $_POST['s1_anim_text2'];  
	$s1_text3 = $_POST['s1_text3'];
	$s1_squre_box_text = $_POST['s1_squre_box_text'];
	$s1_btn1 = $_POST['s1_btn1'];
	$s1_btn2 = $_POST['s1_btn2'];


	$s2_text1 = $_POST['s2_text1'];
	$s2_anim_text2 = $_POST['s2_anim_text2'];  
	$s2_text3 = $_POST['s2_text3'];
	$s2_squre_box_text = $_POST['s2_squre_box_text'];
	$s2_btn1 = $_POST['s2_btn1'];
	$s2_btn2 = $_POST['s2_btn2'];


	$s3_text1 = $_POST['s3_text1'];
	$s3_anim_text2 = $_POST['s3_anim_text2'];  
	$s3_text3 = $_POST['s3_text3'];
	$s3_squre_box_text = $_POST['s3_squre_box_text'];
	$s3_btn1 = $_POST['s3_btn1'];
	$s3_btn2 = $_POST['s3_btn2'];



	$img1 = $_POST['img1'];
	$img2 = $_POST['img2'];
	$img3 = $_POST['img3'];





	// $s1_img=$_FILES["s1_img"]["name"];
	// $image2=$_FILES["image2"]["name"];
	// $s3_img=$_FILES["s3_img"]["name"];
	// $image4=$_FILES["image4"]["name"];


	$valid_extensions= array("jpg","jpeg","png","gif","JPG","JPEG","PNG","GIF","webp","WEBP");


	// for image 1
	if($_FILES["s1_img"]["name"] != '')
	{
		$s1_img=$_FILES["s1_img"]["name"];
		$extension_1=pathinfo($s1_img,PATHINFO_EXTENSION);


		if(!in_array($extension_1,$valid_extensions))
		{
			echo "<script>alert('Invalid format Slider1 Image . Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img1= rand().".".$extension_1;
			$path1= "../img/".$new_img1;
			move_uploaded_file($_FILES["s1_img"]["tmp_name"],$path1);

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
	if($_FILES["s2_img"]["name"] != '')
	{
		$s2_img=$_FILES["s2_img"]["name"];
		$extension_2=pathinfo($s2_img,PATHINFO_EXTENSION);

		if(!in_array($extension_2,$valid_extensions))
		{
			echo "<script>alert('Invalid format Slider2 img . Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img2= rand().".".$extension_2;
			$path2= "../img/".$new_img2;
			move_uploaded_file($_FILES["s2_img"]["tmp_name"],$path2);

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
	if($_FILES["s3_img"]["name"] != '')
	{
		$s3_img=$_FILES["s3_img"]["name"];
		$extension_3=pathinfo($s3_img,PATHINFO_EXTENSION);

		if(!in_array($extension_3,$valid_extensions))
		{
			echo "<script>alert('Invalid format Slider3 Image . Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img3= rand().".".$extension_3;
			$path3= "../img/".$new_img3;
			move_uploaded_file($_FILES["s3_img"]["tmp_name"],$path3);

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

			$updateSql = " update carrrnivaltrips_destination_wise_silde1  set    destination='$destination', s1_text1='$s1_text1', s1_anim_text2='$s1_anim_text2', s1_text3='$s1_text3', s1_squre_box_text='$s1_squre_box_text', s1_btn1='$s1_btn1', s1_btn2='$s1_btn2',           s2_text1='$s2_text1', s2_anim_text2='$s2_anim_text2', s2_text3='$s2_text3', s2_squre_box_text='$s2_squre_box_text', s2_btn1='$s2_btn1', s2_btn2='$s2_btn2' ,        s3_text1='$s3_text1', s3_anim_text2='$s3_anim_text2', s3_text3='$s3_text3', s3_squre_box_text='$s3_squre_box_text', s3_btn1='$s3_btn1', s3_btn2='$s3_btn2',   s1_img='$new_img1', s2_img='$new_img2', s3_img='$new_img3'         where id='$id' ";




			if(mysqli_query($conn,$updateSql) === TRUE) 
			{
				echo "<script> alert('Successfully Update')</script>";
				echo "<script type='text/javascript'> document.location ='../slide1.php?id=$package_id'; </script>";

			}
		 	else 
			{
				echo "<script> alert(' Error While Uploading')</script>";
				// echo $updateSql;s
			}


		// }


		
	}

	// ------------------Update course  logic End-----------------





	
?>



