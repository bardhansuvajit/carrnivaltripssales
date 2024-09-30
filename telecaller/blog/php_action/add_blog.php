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

if(isset($_POST['submit_add_blog']))
{
	$blog_post_by = $_POST['blog_post_by'];
	$blog_title = $_POST['blog_title'];
	$blog_content = $_POST['blog_content'];
	$blog_link = $_POST['blog_link'];
	$blog_post_time = $today;		
	$blog_img = $_FILES["blog_img"]["name"];



	//allowed extention
	$valid_extensions= array("jpg","jpeg","png","gif","JPG", "JPEG", "PNG", "GIF");


	// for society_certificate 
	$blog_img=$_FILES["blog_img"]["name"];
		$extension_1=pathinfo($blog_img,PATHINFO_EXTENSION);	//img extension


		if(!in_array($extension_1,$valid_extensions))
		{
			echo "<script>alert('Invalid format Image 1. Only jpg / jpeg/ png /gif format allowed');</script>";
			echo "<script type='text/javascript'> document.location ='../add_blog.php'; </script>";
		}
		else
		{
			$new_img1= rand().".".$extension_1;
			$path1= "../../../img/".$new_img1;
			move_uploaded_file($_FILES["blog_img"]["tmp_name"],$path1);

			//query for data insert into database
			$sql = "INSERT INTO fishfed_blog(blog_post_by, blog_title, blog_content, blog_link, blog_post_time, blog_img) VALUES ('$blog_post_by', '$blog_title', '$blog_content', '$blog_link', '$blog_post_time', '$new_img1')";

				

				if($conn->query($sql) === TRUE) 
				{
					echo "<script> alert('Blog Successfully Post')</script>";
					echo "<script type='text/javascript'> document.location ='../display_blog.php'; </script>";
				}
				 else 
				{
					echo "<script> alert('Error While Uploading Post')</script>";
				}


		}

	



	
}


// ------------------society_registration End-----------------






 ?>