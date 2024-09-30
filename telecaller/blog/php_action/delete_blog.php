<?php 

	require_once '../../db.php';
	session_start();
	  if(!isset($_SESSION["sess_admin_user"]))
	  {
	    header("location: login/index.php");
	  } 



if($_GET['delid']) 
{
	$id = $_GET['delid'];


     $row = mysqli_query($conn, "select * from fishfed_blog where blog_id='$id' ");
     $data = $row->fetch_assoc();

     $img1='../../../img/'.$data['blog_img'];






	$deleteSql = "DELETE from fishfed_blog  WHERE blog_id = {$id}";
	if(mysqli_query($conn,$deleteSql) === TRUE) 
	{
		unlink($img1);
	

		echo "<script> alert('Successfully removed!')</script>";
		echo "<script type='text/javascript'> document.location ='../display_blog.php'; </script>";


		
	} else 
	{
		echo "<script> alert(' Error While Deleing Blog')</script>";
		// echo "Error updating record : " . $connect->error;
	}

}

?>
<!-- unlink($oldprofilepic); -->

<!-- php-action/delete_product.php?delid=3 -->