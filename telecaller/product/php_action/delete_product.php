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


     $row = mysqli_query($conn, "select * from fishfed_seller_product where id='$id' ");
     $data = $row->fetch_assoc();

     $img1='../../../img/'.$data['p_img1'];
     $img2='../../../img/'.$data['p_img2'];
     $img3='../../../img/'.$data['p_img3'];







	$deleteSql = "DELETE from  fishfed_seller_product  WHERE id = {$id}";
	if(mysqli_query($conn,$deleteSql) === TRUE) 
	{
		unlink($img1);
		unlink($img2);
		unlink($img3);

	

		echo "<script> alert('Successfully removed!')</script>";
		echo "<script type='text/javascript'> document.location ='../display_product.php'; </script>";


		
	} else 
	{
		echo "<script> alert(' Error While Deleing Blog')</script>";
		// echo "Error updating record : " . $connect->error;
	}

}

?>
<!-- unlink($oldprofilepic); -->

<!-- php-action/delete_product.php?delid=3 -->