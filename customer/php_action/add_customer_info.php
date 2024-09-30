
<?php

require_once '../../db.php';



if(isset($_POST['add_customer_info']))
{
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Phone = $_POST['Phone'];  

	$Email = $_POST['Email'];
	$DateOfBirth = $_POST['DateOfBirth'];
	$Address = $_POST['Address'];


	$ZipCode = $_POST['ZipCode'];
	$Country = $_POST['Country'];
	$State = $_POST['State'];
	$District = $_POST['District'];
	$Document_number = $_POST['Document_number'];



	// $Document_img=$_FILES["Document_img"]["name"];
	// $image2=$_FILES["image2"]["name"];
	// $image3=$_FILES["image3"]["name"];
	// $image4=$_FILES["image4"]["name"];


	$valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF", "webp" , "WEBP");


	// for image 1
	if($_FILES["Document_img"]["name"] != '')
	{
		$Document_img=$_FILES["Document_img"]["name"];
		$extension_1=pathinfo($Document_img,PATHINFO_EXTENSION);


		if(!in_array($extension_1,$valid_extensions))
		{
			echo "<script>alert('Invalid format Document Image . Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img1= rand().".".$extension_1;
			$path1= "../img/".$new_img1;
			move_uploaded_file($_FILES["Document_img"]["tmp_name"],$path1);

		}

	}
	else
	{
			$new_img1="";
	}




	// for image 2
	if($_FILES["Customer_img"]["name"] != '')
	{
		$Customer_img=$_FILES["Customer_img"]["name"];
		$extension_2=pathinfo($Customer_img,PATHINFO_EXTENSION);

		if(!in_array($extension_2,$valid_extensions))
		{
			echo "<script>alert('Invalid format Customer img . Only jpg / jpeg/ png /gif format allowed');</script>";
		}
		else
		{
			$new_img2= rand().".".$extension_2;
			$path2= "../img/".$new_img2;
			move_uploaded_file($_FILES["Customer_img"]["tmp_name"],$path2);

		}

	}
	else
	{
			$new_img2="";
	}



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




	$sql = "INSERT INTO carrnivaltrips_customer (FirstName, LastName, Phone, Email, DateOfBirth,  Address,       ZipCode, Country, State, District, Document_number,     Document_img, Customer_img) VALUES ('$FirstName', '$LastName', '$Phone', '$Email', '$DateOfBirth',   '$Address',          '$ZipCode', '$Country', '$State', '$District', '$Document_number',            '$new_img1', '$new_img2' )";
	if(mysqli_query($conn,$sql) === TRUE) 
	{

		echo "<script>alert('You have successfully inserted the data');</script>";
		echo "<script type='text/javascript'> document.location ='../display_customer_info.php'; </script>";

		// echo "<script>alert('New Record Successfully Insert');</script>";
		// echo "<p>New Record Successfully Insert</p>";
		// echo "<a href='../create.php'><button type='button'>Back</button></a>";
		// echo "<a href='../index.php'><button type='button'>Home</button></a>";
	}
	 else 
	{
		echo "Error " . $sql . ' ' . $conn->connect_error;
	} 


}



 ?>