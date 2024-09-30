<?php 
session_start();
unset($_SESSION['sess_manager_user']);
unset($_SESSION['sess_manager_name']);

session_destroy();
header("location: index.php");
?>
