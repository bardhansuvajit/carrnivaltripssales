
<?php

require_once '../../db.php';



if(isset($_POST['add_employee']))
{
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$designation = $_POST['designation']; 
	$password = $_POST['password'];
	$status = $_POST['status']; 




	$valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF", "webp" , "WEBP");


	// for image 1
	if($_FILES["img1"]["name"] != '')
	{
		$img1=$_FILES["img1"]["name"];
		$extension_1=pathinfo($img1,PATHINFO_EXTENSION);


		if(!in_array($extension_1,$valid_extensions))
		{
			echo "<script>alert('Invalid format Of Employee's Image . Only jpg / jpeg/ png /gif format allowed');</script>";
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



	


	$sql = "INSERT INTO carrnivaltrips_employee (name, phone, email, designation,password,status, img1) 
		VALUES ('$name', '$phone', '$email', '$designation',  '$password', '$status',  '$new_img1' )";



	if(mysqli_query($conn,$sql) === TRUE) 
	{

		echo "<script>alert('You have successfully inserted the data');</script>";
		echo "<script type='text/javascript'> document.location ='../display_employee.php'; </script>";

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