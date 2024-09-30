<?php
	//$conn=mysqli_connect("localhost", "root", "", "fishfed","3306");
		// $conn= mysqli_connect('localhost','u914396686_root_fishfed','3|DmzB7Gq+>','u914396686_fishfed') ;
		// $conn= mysqli_connect('localhost','root','','fishfed') or die("Connection Failed");
	$conn= mysqli_connect("localhost","root","","carrnivaltrips") or die("Connection Failed");
	if(mysqli_connect_errno())
	{
	echo "Connection Fail".mysqli_connect_error();
	}
?>
