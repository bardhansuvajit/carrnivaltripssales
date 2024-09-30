<?php
session_start();

require ("../db.php");



if (empty($_SESSION['sess_user'])) {
    $sqlTable = "select DISTINCT name FROM carrnivaltrips_hotel  ";
} else {
    // $query="SELECT * FROM jewellery_ckbes union select * from jewellery_ckbes_local ";
    $sqlTable = "select DISTINCT name FROM carrnivaltrips_hotel ";
}


?>




<?php


$page = isset($_POST["page"]) ? $_POST["page"] : 1;

// $sort = $_POST["sort"];
$sql = '';

// if (isset($_POST["destination_Categories"])) {
//     $destination = $_POST["destination_Categories"];
//     $destination = implode("','", $destination);
//     $sql .= " where destination IN('" . $destination . "') ";
// }




if (isset($_POST["sightseeing_loc_Categories"])) {
    $location_wise = $_POST["sightseeing_loc_Categories"];
    $location_wise = implode("','", $location_wise);
    $sql .= " where location_wise IN ('" . $location_wise . "') ";
}


if (isset($_POST["sightseeing_hotel_Categories"])) {
    $category_wise = $_POST["sightseeing_hotel_Categories"];
    $category_wise = implode("','", $category_wise);
    $customSql = "category_wise IN ('" . $category_wise . "') ";  //replace databse colN
    $sql .= empty($sql) ? "where ".$customSql : "AND ".$customSql;
}





//data fetch for product view
$completeSql = " $sqlTable  $sql "; //LIMIT $recordsFetched,$recordsPerPage  //where $sql  //where item_type IN($productType)   //where $sql 

// echo $completeSql;
$query = mysqli_query($conn, $completeSql);
$products = '';





// while ($row = mysqli_fetch_assoc($query)) {



   
//     $id = $row['id'];
//     $name = $row['name'];
//     // $category_wise = $row['category_wise'];

// }

$products .= ''.$completeSql.'';

$products=strval($products);


// echo $products;


    

//     $products .= '<div class="form-check form-check-inline bg-primary  m-1"  style="padding:4px 30px; border-radius:5px" ><input class="form-check-input me-2" id="sightseeing_hotel_'. $id .'"  type="checkbox" data-filter="sightseeing_hotel" value="'. $id .'"><label class="form-check-label" for="sightseeing_hotel_'. $id .'">'. $name .'</label></div>';
// }


//         $products .= '<span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin: 3px 2px;"><input class="form-check-input sightseeing_hotel" type="checkbox" name="sightseeing_hotel" data-filter="sightseeing_hotel" value="'. $name .'" id="sightseeing_hotel'. $id .'" ><label class="form-check-label" for="sightseeing_hotel'. $id .'">'. $name .' </label></span>';
// }





// '<span class="toast default-show-toast align-items-center text-light bg-primary border-0 fade show w-auto m-1" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"><div class="d-flex justify-content-between"><div class="toast-body">'. $name .'</div><button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button> </div></span>'









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