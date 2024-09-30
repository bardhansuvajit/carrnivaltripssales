<?php 

	//Database Connection
	include('../../db.php');



	// ------------------edit course-----------------

	if(isset($_POST['slide11_update']))
	{
		$id= $_POST['id'];
		$package_id= $_POST['package_id'];
		$why_carrnival_heading= $_POST['why_carrnival_heading'];
		

		$why_carrnival_title1 = $_POST['why_carrnival_title1'];
		$why_carrnival_title2 = $_POST['why_carrnival_title2'];
		$why_carrnival_title3 = $_POST['why_carrnival_title3'];
		$why_carrnival_title4 = $_POST['why_carrnival_title4'];  
		$why_carrnival_title5 = $_POST['why_carrnival_title5'];
		$why_carrnival_title6 = $_POST['why_carrnival_title6']; 

		$why_carrnival_description1 = $_POST['why_carrnival_description1'];
		$why_carrnival_description2 = $_POST['why_carrnival_description2'];
		$why_carrnival_description3 = $_POST['why_carrnival_description3'];
		$why_carrnival_description4 = $_POST['why_carrnival_description4'];  
		$why_carrnival_description5 = $_POST['why_carrnival_description5'];
		$why_carrnival_description6 = $_POST['why_carrnival_description6'];  

		



			//query for data updation into database  

			$updateSql = " update carrnivaltrips_details  set   why_carrnival_heading='$why_carrnival_heading',       why_carrnival_title1='$why_carrnival_title1',      why_carrnival_title2='$why_carrnival_title2', why_carrnival_title3='$why_carrnival_title3', why_carrnival_title4='$why_carrnival_title4',  why_carrnival_title5='$why_carrnival_title5',  why_carrnival_title6='$why_carrnival_title6',		 why_carrnival_description1='$why_carrnival_description1',      why_carrnival_description2='$why_carrnival_description2', why_carrnival_description3='$why_carrnival_description3', why_carrnival_description4='$why_carrnival_description4',  why_carrnival_description5='$why_carrnival_description5',  why_carrnival_description6='$why_carrnival_description6'       where id='$id' ";




			if(mysqli_query($conn,$updateSql) === TRUE) 
			{
				echo "<script> alert('Successfully Update')</script>";
				echo "<script type='text/javascript'> document.location ='../slide11.php?id=$package_id'; </script>";

			}
		 	else 
			{
				echo "<script> alert(' Error While Uploading')</script>";
			}


		// }


		
	}

	// ------------------Update course  logic End-----------------





	
?>



