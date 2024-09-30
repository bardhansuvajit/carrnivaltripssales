<?php 

	//Database Connection
	include('../../db.php');



	// ------------------edit course-----------------

	if(isset($_POST['edit_seller_verification_company']))
	{
		$id= $_POST['id'];


		$company_name = $_POST['company_name'];
		$owner_name = $_POST['owner_name'];

		$email = $_POST['email'];
		$trade_license_number = $_POST['trade_license_number'];
		$incorporation_certificate_number = $_POST['incorporation_certificate_number'];

		$pan_card = $_POST['pan_card'];
		$gst_number = $_POST['gst_number'];
		$pincode = $_POST['pincode'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$district = $_POST['district'];
		$business_address = $_POST['business_address'];
		$ph_no_request = $_POST['ph_no_request'];





		$verify_location = $_POST['verify_location'];
		$verfication_status = $_POST['verfication_status'];
		

		
		// $image1 = $_FILES['image1']['name'];
		$img1 = $_POST['img1'];
		$img2 = $_POST['img2'];
		$img3 = $_POST['img3'];
		$img4 = $_POST['img4'];
		$img5 = $_POST['img5'];



		// echo	$img1  ."<br>" ;
		// echo	$img2  ."<br>" ;
		// echo	$img3  ."<br>" ;
		// echo	$img4  ."<br>" ;




	$valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF","pdf", "PDF");


	// for image 1
	if($_FILES["image1"]["name"] != '')
	{
		$image1=$_FILES["image1"]["name"];
		$extension_1=pathinfo($image1,PATHINFO_EXTENSION);


		if(!in_array($extension_1,$valid_extensions))
		{
			echo "<script>alert('Invalid format Image 1. Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img1= rand().".".$extension_1;
			$path1= "../img/".$new_img1;
			move_uploaded_file($_FILES["image1"]["tmp_name"],$path1);
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
	if($_FILES["image2"]["name"] != '')
	{
		$image2=$_FILES["image2"]["name"];
		$extension_2=pathinfo($image2,PATHINFO_EXTENSION);

		if(!in_array($extension_2,$valid_extensions))
		{
			echo "<script>alert('Invalid format Image 2. Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img2= rand().".".$extension_2;
			$path2= "../img/".$new_img2;
			move_uploaded_file($_FILES["image2"]["tmp_name"],$path2);
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
	if($_FILES["image3"]["name"] != '')
	{
		$image3=$_FILES["image3"]["name"];
		$extension_3=pathinfo($image3,PATHINFO_EXTENSION);

		if(!in_array($extension_3,$valid_extensions))
		{
			echo "<script>alert('Invalid format Image 3. Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img3= rand().".".$extension_3;
			$path3= "../img/".$new_img3;
			move_uploaded_file($_FILES["image3"]["tmp_name"],$path3);
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



	// for image 4
	if($_FILES["image4"]["name"] != '')
	{
		$image4=$_FILES["image4"]["name"];
		$extension_4=pathinfo($image4,PATHINFO_EXTENSION);

		if(!in_array($extension_4,$valid_extensions))
		{
			echo "<script>alert('Invalid format Image 4. Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img4= rand().".".$extension_4;
			$path4= "../img/".$new_img4;
			move_uploaded_file($_FILES["image4"]["tmp_name"],$path4);
			if($img4)
			{ 
				unlink('../img/'.$img4);
			}
			

		}

	}
	else
	{
			$new_img4=$img4;
	}
		


	// for image 5
	if($_FILES["image5"]["name"] != '')
	{
		$image5=$_FILES["image5"]["name"];
		$extension_5=pathinfo($image5,PATHINFO_EXTENSION);

		if(!in_array($extension_5,$valid_extensions))
		{
			echo "<script>alert('Invalid format Image 5. Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img5= rand().".".$extension_5;
			$path5= "../img/".$new_img5;
			move_uploaded_file($_FILES["image5"]["tmp_name"],$path5);
			if($img5)
			{ 
				unlink('../img/'.$img5);
			}
			

		}

	}
	else
	{
			$new_img5=$img5;
	}







			//query for data updation into database

			$updateSql = " update fishfed_seller_ac_company set     company_name='$company_name', owner_name='$owner_name',  email='$email', trade_license_number='$trade_license_number', incorporation_certificate_number='$incorporation_certificate_number',    pan_card='$pan_card' ,    gst_number='$gst_number', pincode='$pincode', country='$country', state='$state' ,     district='$district', business_address='$business_address', ph_no_request='$ph_no_request',                                      verify_location='$verify_location', verfication_status='$verfication_status',   img_pancard='$new_img1', trade_license_number='$new_img2', img_seller_photo='$new_img3', img_agreement='$new_img4' , img_incorporation_certificate='$new_img5' where id='$id' ";


			if(mysqli_query($conn,$updateSql) === TRUE) 
			{
				echo "<script> alert('Successfully Update')</script>";
				echo "<script type='text/javascript'> document.location ='../display_seller_verification_company.php'; </script>";

			}
		 else 
			{
				echo "<script> alert(' Error While Uploading')</script>";
			}


		// }


		
	}

	// ------------------Update course  logic End-----------------





	
?>



