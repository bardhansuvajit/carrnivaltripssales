<?php
session_start();

require ("db.php");



if (empty($_SESSION['sess_user'])) {
    $sqlTable = "SELECT * FROM carrnivaltrips_sightseeing_points  ";
} else {
    // $query="SELECT * FROM jewellery_ckbes union select * from jewellery_ckbes_local ";
    $sqlTable = "SELECT * FROM carrnivaltrips_sightseeing_points ";
}


?>




<?php


$page = isset($_POST["page"]) ? $_POST["page"] : 1;

// $sort = $_POST["sort"];
$sql = '';

if (isset($_POST["destination_Categories"])) {
    $destination = $_POST["destination_Categories"];
    $destination = implode("','", $destination);
    $sql .= " where destination IN('" . $destination . "') ";
}




if (isset($_POST["sightseeing_loc_Categories"])) {
    $location_wise = $_POST["sightseeing_loc_Categories"];
    $location_wise = implode("','", $location_wise);
    $customSql = "location_wise IN('" . $location_wise . "') ";  //replace databse colN
    $sql .= empty($sql) ? $customSql : "AND ($customSql)";
}





//data fetch for product view
$completeSql = " $sqlTable   $sql "; //LIMIT $recordsFetched,$recordsPerPage  //where $sql  //where item_type IN($productType)   //where $sql 

// echo $completeSql;
$query = mysqli_query($conn, $completeSql);
$products = '';





while ($row = mysqli_fetch_assoc($query)) {



   
    $name = $row['name'];
    

    $products .=  '<span class="toast default-show-toast align-items-center text-light bg-primary border-0 fade show w-auto m-1" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"><div class="d-flex justify-content-between"><div class="toast-body">'. $name .'</div><button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button> </div></span>';
}









if (!mysqli_num_rows($query))
    $products .= ' ';



$productData = str_replace("\n", "", $products);
$productData = str_replace("\r", "", $productData);
// $productData=str_replace("/(?:\\[rn"\"]|[\r\n]+)+/g", "", $productData);



// $pagination=str_replace("\n", "", $pagination);
// $pagination=str_replace("\r", "", $pagination);









$output = new stdClass;
$output->products = $productData;
// $output->pagination = $pagination;
echo json_encode($output);

?>