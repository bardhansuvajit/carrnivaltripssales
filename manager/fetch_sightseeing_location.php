<?php
session_start();

require ("db.php");



if (empty($_SESSION['sess_user'])) {
    $sqlTable = "SELECT * FROM carrnivaltrips_sightseeing  ";
} else {
    // $query="SELECT * FROM jewellery_ckbes union select * from jewellery_ckbes_local ";
    $sqlTable = "SELECT * FROM carrnivaltrips_sightseeing ";
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




// if (isset($_POST["productCategories"])) {
//     $productCategories = $_POST["productCategories"];
//     $productCategories = implode("','", $productCategories);
//     $customSql = "category IN('" . $productCategories . "') ";  //replace databse colN
//     $sql .= empty($sql) ? $customSql : "AND ($customSql)";
// }





//data fetch for product view
$completeSql = " $sqlTable  $sql "; //LIMIT $recordsFetched,$recordsPerPage  //where $sql  //where item_type IN($productType)   //where $sql 

// echo $completeSql;
$query = mysqli_query($conn, $completeSql);
$products = '';





while ($row = mysqli_fetch_assoc($query)) {



   
    $location_wise = $row['location_wise'];
    

    $products .= ' <span class="form-check" > <input class="form-check-input" type="checkbox" name="sightseeing_loc_Categories" data-filter="sightseeing_loc_Categories" value="'. $location_wise .'" id="sightseeing_loc_Categories_'. $location_wise .'" > <label class="form-check-label" for="sightseeing_loc_Categories_'. $location_wise .'">'. $location_wise .'</label></span>';
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