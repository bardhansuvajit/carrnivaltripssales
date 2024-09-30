<?php 

// include('../../db.php');
require_once '../../db.php';
// $today = date("Y-m-d H:i:s");

 	session_start();
  if(!isset($_SESSION["sess_admin_user"]))
  {
    header("location: login/index.php");
  } 



// ------------------add_product-----------------

if(isset($_POST['submit_product']))
{
	$seller_id = $_POST['seller_id'];
	
	$p_name = $_POST['p_name'];
	$p_price = $_POST['p_price'];
	$p_category = $_POST['p_category'];
	$p_discription = $_POST['p_discription'];
  $stock_quantity = $_POST['stock_quantity'];




	// $p_img1 = $_FILES["p_img1"]["name"];
	// $p_img2 = $_FILES["p_img2"]["name"];
	// $p_img3 = $_FILES["p_img3"]["name"];




		$valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF");


		// for image 1
		if($_FILES["p_img1"]["name"] != '')
		{
			$p_img1=$_FILES["p_img1"]["name"];
			$extension_1=pathinfo($p_img1,PATHINFO_EXTENSION);


			if(!in_array($extension_1,$valid_extensions))
			{
				echo "<script>alert('Invalid format Image 1. Only jpg / jpeg/ png /gif format allowed');</script>";
			}
			else
			{
				$new_img1= rand().".".$extension_1;
				$path1= "../../../img/".$new_img1;
				move_uploaded_file($_FILES["p_img1"]["tmp_name"],$path1);

			}

		}
		else
		{
				$new_img1="";
		}




		// for image 2
		if($_FILES["p_img2"]["name"] != '')
		{
			$p_img2=$_FILES["p_img2"]["name"];
			$extension_2=pathinfo($p_img2,PATHINFO_EXTENSION);

			if(!in_array($extension_2,$valid_extensions))
			{
				echo "<script>alert('Invalid format Image 2. Only jpg / jpeg/ png /gif format allowed');</script>";
			}
			else
			{
				$new_img2= rand().".".$extension_2;
				$path2= "../../../img/".$new_img2;
				move_uploaded_file($_FILES["p_img2"]["tmp_name"],$path2);

			}

		}
		else
		{
				$new_img2="";
		}



		// for image 3
		if($_FILES["p_img3"]["name"] != '')
		{
			$p_img3=$_FILES["p_img3"]["name"];
			$extension_3=pathinfo($p_img3,PATHINFO_EXTENSION);

			if(!in_array($extension_3,$valid_extensions))
			{
				echo "<script>alert('Invalid format Image 3. Only jpg / jpeg/ png /gif format allowed');</script>";
			}
			else
			{
				$new_img3= rand().".".$extension_3;
				$path3= "../../../img/".$new_img3;
				move_uploaded_file($_FILES["p_img3"]["tmp_name"],$path3);

			}

		}
		else
		{
				$new_img3="";
		}



		// for image 4
		// if($_FILES["p_img4"]["name"] != '')
		// {
		// 	$p_img4=$_FILES["p_img4"]["name"];
		// 	$extension_4=pathinfo($p_img4,PATHINFO_EXTENSION);

		// 	if(!in_array($extension_4,$valid_extensions))
		// 	{
		// 		echo "<script>alert('Invalid format Image 4. Only jpg / jpeg/ png /gif format allowed');</script>";
		// 	}
		// 	else
		// 	{
		// 		$new_img4= rand().".".$extension_4;
		// 		$path4= "../img/".$new_img4;
		// 		move_uploaded_file($_FILES["p_img4"]["tmp_name"],$path4);

		// 	}

		// }
		// else
		// {
		// 		$new_img4="";
		// }




	$sql1 = "INSERT INTO fishfed_seller_product (seller_id, p_name, p_price, p_category, p_description, stock_quantity, seller_role, status, p_img1, p_img2, p_img3) VALUES ('$seller_id', '$p_name', '$p_price', '$p_category', '$p_discription', '$stock_quantity', 'admin', 'Active', '$new_img1', '$new_img2', '$new_img3')";

		if($conn->query($sql1) === TRUE) 
		{

			echo "<script>alert('You have successfully inserted the data');</script>";
			echo "<script type='text/javascript'> document.location ='../display_product.php'; </script>";

			// echo "<script>alert('New Record Successfully Insert');</script>";
			// echo "<p>New Record Successfully Insert</p>";
			// echo "<a href='../create.php'><button type='button'>Back</button></a>";
			// echo "<a href='../index.php'><button type='button'>Home</button></a>";
		}
		 else 
		{
			echo "Error " . $sql1 . ' ' . $connect->connect_error;
		}








			//query for data insert into database
			// $sql1 = "INSERT INTO  training_post(post_by, post_title, post_content, post_link, post_time, post_img, training_date, training_time, training_location) VALUES ('$post_by', '$post_title', '$post_content', '$post_link', '$post_time', '$new_img1', '$training_date', '$training_time', '$training_location')";

			// echo $sql1;
			// echo "<br><br>";

				

			// 	if($conn->query($sql1) === TRUE) 
			// 	{
			// 		echo "<script> alert('Training Blog Successfully Post')</script>";
			// 		echo "<script type='text/javascript'> document.location ='../display_training_post.php'; </script>";
			// 	}
			// 	 else 
			// 	{
			// 		echo "<script> alert('Error While Uploading Post')</script>";
			// 	}


		

	



	
}


// ------------------society_registration End-----------------






 ?>