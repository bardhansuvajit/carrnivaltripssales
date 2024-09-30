<?php 
session_start();
unset($_SESSION['sess_user_admin']);
unset($_SESSION['sess_admin_name']);

session_destroy();
header("location:index.php");
?>
