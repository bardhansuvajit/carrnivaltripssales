<?php 

	//Database Connection
	include('../../db.php');



	// ------------------edit course-----------------

	if(isset($_POST['edit_employee']))
	{
		$id= $_POST['id'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$designation = $_POST['designation']; 
		$password = $_POST['password'];
		$status = $_POST['status']; 


		
		$img_1 = $_POST['img_1'];
		




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



			//query for data updation into database  

			$updateSql = " update carrnivaltrips_employee  set    name='$name', phone='$phone', email='$email', designation='$designation', password='$password', status='$status',   img1='$new_img1'  where id='$id' ";




			if(mysqli_query($conn,$updateSql) === TRUE) 
			{
				echo "<script> alert('Successfully Update')</script>";
				echo "<script type='text/javascript'> document.location ='../display_employee.php'; </script>";

			}
		 	else 
			{
				echo "<script> alert(' Error While Uploading')</script>";
			}


		// }


		
	}

	// ------------------Update course  logic End-----------------





	
?>



