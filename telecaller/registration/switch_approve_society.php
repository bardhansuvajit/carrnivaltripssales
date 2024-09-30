<?php
//insert.php


  require_once '../db.php';



if(isset($_POST["status"]))
{

 // $query = "INSERT INTO tbl_users (name, gender)  VALUES(:name, :gender) ";
 // $statement = $connect->prepare($query);
 // $statement->execute(
 //  array(
 //   ':gender'  => $_POST['hidden_approve']
 //  )
 // );

 // $result = $statement->fetchAll();
 // if(isset($result))
 // {
 //  echo 'done';
 // }


    $approve= $_POST['status'];
    $id=$_POST['id'];


    $update_sql = "UPDATE society_registration SET approve = '$approve' WHERE id='$id'";

    if ($conn->query($update_sql) === TRUE) 
    {
        echo 'done';
    } 
    else 
    {
        echo "Error updating record: " . $conn->error;
    }

}

?>