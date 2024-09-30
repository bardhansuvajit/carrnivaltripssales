
<?php

require_once '../../db.php';



if(isset($_POST['insert_product_submit']))
{
	$name = $_POST['name'];
	$price = $_POST['price'];
	$category = $_POST['category'];
	$quantity = $_POST['quantity'];
	$discription = $_POST['discription'];

	// $image1=$_FILES["image1"]["name"];
	// $image2=$_FILES["image2"]["name"];
	// $image3=$_FILES["image3"]["name"];
	// $image4=$_FILES["image4"]["name"];


	$valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF");


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

		}

	}
	else
	{
			$new_img1="";
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

		}

	}
	else
	{
			$new_img2="";
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

		}

	}
	else
	{
			$new_img3="";
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

		}

	}
	else
	{
			$new_img4="";
	}




	$sql = "INSERT INTO fishokart_farmer_product (name, price, category, quantity, description, image1, image2, image3,image4) VALUES ('$name', '$price', '$category', '$quantity', '$discription', '$new_img1', '$new_img2', '$new_img3','$new_img4')";
	if(mysqli_query($conn,$sql) === TRUE) 
	{

		echo "<script>alert('You have successfully inserted the data');</script>";
		echo "<script type='text/javascript'> document.location ='../add_product.php'; </script>";

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