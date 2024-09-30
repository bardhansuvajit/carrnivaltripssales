<?php
session_start();

require ("../db.php");



if (empty($_SESSION['sess_user'])) {
    $sqlTable = "SELECT * FROM carrnivaltrips_hotel_rooms  ";
} else {
    $sqlTable = "SELECT * FROM carrnivaltrips_hotel_rooms ";
}


?>




<?php


$page = isset($_POST["page"]) ? $_POST["page"] : 1;
$sql = '';





if (isset($_POST["sightseeing_loc_Categories"])) {
    $location_wise = $_POST["sightseeing_loc_Categories"];
    $location_wise = implode("','", $location_wise);
    $sql .= "where location_wise IN ('" . $location_wise . "') ";
}


if (isset($_POST["sightseeing_hotel_Categories"])) {
    $hotel_category_wise = $_POST["sightseeing_hotel_Categories"];
    $hotel_category_wise = implode("','", $hotel_category_wise);
    $customSql = "hotel_category_wise IN ('" . $hotel_category_wise . "') ";  //replace databse colN
    $sql .= empty($sql) ? "where ".$customSql : "AND ($customSql)";

}


if (isset($_POST["sightseeing_hotel"])) {
    $hotel_name = $_POST["sightseeing_hotel"];
    $hotel_name = implode("','", $hotel_name);
    $customSql = "hotel_name IN ('" . $hotel_name . "') ";  //replace databse colN
    $sql .= empty($sql) ? "where ".$customSql : "AND ($customSql)";
}









$completeSql = " $sqlTable   $sql "; 


$q =$conn->query($completeSql);



$row=mysqli_fetch_all($q, MYSQLI_ASSOC);


echo json_encode($row);





?>


