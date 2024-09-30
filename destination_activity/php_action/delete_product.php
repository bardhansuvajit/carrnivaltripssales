<?php 

require_once '../../db.php';

if($_GET['delid']) 
{
	$id = $_GET['delid'];


     $row = mysqli_query($conn, "select * from fishokart_farmer_product where id='$id' ");
     $data = $row->fetch_assoc();

     $img1='../img/'.$data['image1'];
     $img2='../img/'.$data['image2'];
     $img3='../img/'.$data['image3'];
     $img4='../img/'.$data['image4'];






	$deleteSql = "DELETE from fishokart_farmer_product  WHERE id = {$id}";
	if(mysqli_query($conn,$deleteSql) === TRUE) 
	{
		unlink($img1);
		unlink($img2);
		unlink($img3);
		unlink($img4);


		echo "<script> alert('Successfully removed!')</script>";
		echo "<script type='text/javascript'> document.location ='../display_product.php'; </script>";


		
	} else 
	{
		echo "<script> alert(' Error While Deleing Product')</script>";
		// echo "Error updating record : " . $connect->error;
	}

}

?>
<!-- unlink($oldprofilepic); -->

<!-- php-action/delete_product.php?delid=3 -->