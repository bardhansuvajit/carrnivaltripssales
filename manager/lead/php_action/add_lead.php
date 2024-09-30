<?php 

// include('../../db.php');
require_once '../../db.php';
$today = date("Y-m-d H:i:s");

 	session_start();
  if(!isset($_SESSION["sess_admin_user"]))
  {
    header("location: login/index.php");
  } 



// ------------------society_registration-----------------

  
    // Function to generate a unique ID
    function generateUniqueId() {
        return bin2hex(random_bytes(4)); // 32 characters long hexadecimal string
    }

    // Generate a unique ID
    $uniqueId = generateUniqueId();
  

if(isset($_POST['submit_add_lead']))
{
	$name = $_POST['name'];
	$ph_no = $_POST['ph_no'];
	$whatsapp_no = $_POST['whatsapp_no'];
	$email = $_POST['email'];
	$destination = $_POST['destination']; 
	$no_of_day = $_POST['no_of_day'];
	$no_of_night = $_POST['no_of_night'];
	$status = $_POST['status'];


	$lead_date = $_POST['lead_date'];
	$travel_date = $_POST['travel_date'];
	$note = $_POST['note'];




	// $blog_post_time = $today;		
	// $blog_img = $_FILES["blog_img"]["name"];



		//query for data insert into database
		$sql = "INSERT INTO carrnivaltrips_lead(unique_id, name, ph_no, whatsapp_no, email, destination , no_of_day, no_of_night, status, lead_date, travel_date ,note ) VALUES ('$uniqueId', '$name', '$ph_no', '$whatsapp_no',  '$email',  '$destination'   ,  '$no_of_day',  '$no_of_night' ,  '$status'  ,  '$lead_date',  '$travel_date' ,  '$note' )";

				

		if($conn->query($sql) === TRUE) 
		{
					echo "<script> alert('Lead Successfully Create')</script>";
					echo "<script type='text/javascript'> document.location ='../../index.php'; </script>";
		}
		else 
		{
					echo "<script> alert('Error While Uploading Lead')</script>";
		}




	//allowed extention
	// $valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF");


	// for society_certificate 
	// $blog_img=$_FILES["blog_img"]["name"];
	// 	$extension_1=pathinfo($blog_img,PATHINFO_EXTENSION);	//img extension


	// 	if(!in_array($extension_1,$valid_extensions))
	// 	{
	// 		echo "<script>alert('Invalid format Image 1. Only jpg / jpeg/ png /gif format allowed');</script>";
	// 		echo "<script type='text/javascript'> document.location ='../add_blog.php'; </script>";
	// 	}
	// 	else
	// 	{
	// 		$new_img1= rand().".".$extension_1;
	// 		$path1= "../../../img/".$new_img1;
	// 		move_uploaded_file($_FILES["blog_img"]["tmp_name"],$path1);
	// 	}



		


		

	



	
}


// ------------------society_registration End-----------------






 ?>