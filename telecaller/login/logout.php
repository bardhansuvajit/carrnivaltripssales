<?php 
session_start();
unset($_SESSION['sess_admin_user']);
unset($_SESSION['sess_name']);

session_destroy();
header("location: index.php");
?>
