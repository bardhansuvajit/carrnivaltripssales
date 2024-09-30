<?php 

	//Database Connection
	include('../../db.php');



	// ------------------edit course-----------------

	if(isset($_POST['slide6_update']))
	{
		$id= $_POST['id'];
		$package_id= $_POST['package_id'];
		
		

		$payment_policy1 = $_POST['payment_policy1'];
		$payment_policy2 = $_POST['payment_policy2'];

		$payment_policy3 = $_POST['payment_policy3'];
		$payment_policy4 = $_POST['payment_policy4'];  

		$payment_policy5 = $_POST['payment_policy5'];
		$payment_policy6 = $_POST['payment_policy6'];  

		



			//query for data updation into database  

			$updateSql = " update carrnivaltrips_details  set    payment_policy1='$payment_policy1', payment_policy2='$payment_policy2', payment_policy3='$payment_policy3', payment_policy4='$payment_policy4',  payment_policy5='$payment_policy5',  payment_policy6='$payment_policy6' where id='$id' ";




			if(mysqli_query($conn,$updateSql) === TRUE) 
			{
				echo "<script> alert('Successfully Update')</script>";
				echo "<script type='text/javascript'> document.location ='../slide6.php?id=$package_id'; </script>";

			}
		 	else 
			{
				echo "<script> alert(' Error While Uploading')</script>";
			}


		// }


		
	}

	// ------------------Update course  logic End-----------------





	
?>



