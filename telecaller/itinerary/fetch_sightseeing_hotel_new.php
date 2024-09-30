<?php
session_start();

require ("../db.php");



if (empty($_SESSION['sess_user'])) {
    $sqlTable = "SELECT distinct name FROM carrnivaltrips_hotel  ";
} else {
    $sqlTable = "SELECT distinct name FROM carrnivaltrips_hotel ";
}


?>




<?php


$page = isset($_POST["page"]) ? $_POST["page"] : 1;
$sql = '';





if (isset($_POST["sightseeing_loc_Categories"])) {
    $location_wise = $_POST["sightseeing_loc_Categories"];
    $location_wise = implode("','", $location_wise);
    $sql .= " where location_wise IN('" . $location_wise . "') ";
}


if (isset($_POST["sightseeing_hotel_Categories"])) {
    $category_wise = $_POST["sightseeing_hotel_Categories"];
    $category_wise = implode("','", $category_wise);
    $customSql = "category_wise IN('" . $category_wise . "') ";  
    $sql .= empty($sql) ? "where " .$customSql : "AND ($customSql)";
}









$completeSql = " $sqlTable   $sql "; 


$q =$conn->query($completeSql);



$row=mysqli_fetch_all($q, MYSQLI_ASSOC);


echo json_encode($row);





?>