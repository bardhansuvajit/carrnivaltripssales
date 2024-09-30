<?php
session_start();

require ("../db.php");



if (empty($_SESSION['sess_user'])) {
    $sqlTable = "SELECT * FROM carrnivaltrips_hotel_rooms  ";
} else {
    // $query="SELECT * FROM jewellery_ckbes union select * from jewellery_ckbes_local ";
    $sqlTable = "SELECT * FROM carrnivaltrips_hotel_rooms ";
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
    $sql .= "where location_wise IN ('" . $location_wise . "') ";
}


if (isset($_POST["sightseeing_hotel_Categories"])) {
    $hotel_category_wise = $_POST["sightseeing_hotel_Categories"];
    $hotel_category_wise = implode("','", $hotel_category_wise);
    $customSql = "hotel_category_wise IN ('" . $hotel_category_wise . "') ";  //replace databse colN
    $sql .= empty($sql) ? "where ($customSql)" : "AND ($customSql)";
}


if (isset($_POST["sightseeing_hotel"])) {
    $hotel_name = $_POST["sightseeing_hotel"];
    $hotel_name = implode("','", $hotel_name);
    $customSql = "hotel_name IN ('" . $hotel_name . "') ";  //replace databse colN
    $sql .= empty($sql) ? "where ".$customSql : "AND ($customSql)";
}









//data fetch for product view
$completeSql = " $sqlTable   $sql order by hotel_name "; //LIMIT $recordsFetched,$recordsPerPage  //where $sql  //where item_type IN($productType)   //where $sql 

// echo $completeSql;

$query = mysqli_query($conn, $completeSql);
$products = '<table class="table table-bordered table-hover" id="dynamic_field"><tr class="bg-light" ><th>Select</th><th style="width:20%" ><label  class="form-label">Hotel Name</label></th><th style="width:10%" ><label  class="form-label">AC</label></th><th style="width:20%" ><label  class="form-label">Room Name</label></th><th style="width:7%" ><label  class="form-label">Capacity</label></th><th style="width:10%" ><label  class="form-label">No of Bed</label></th><th style="width:7%" ><label  class="form-label">Season Price</label></th><th style="width:7%" ><label  class="form-label">Pick Season Price</label></th><th style="width:7%" ><label  class="form-label">Off Season Price</label></th></tr>';












while ($row = mysqli_fetch_assoc($query)) {



   
    $id = $row['id'];
    $hotel_name = $row['hotel_name'];
    $name = $row['name'];
    $bed = $row['bed'];
    $ac_type = $row['ac_type'];
    $price = $row['price'];
    $pick_season_price = $row['pick_season_price'];
    $off_season_price = $row['off_season_price'];
    $status = $row['status'];
    $capacity = $row['capacity'];



    

    

    $products .= '<label class="form-check-label" for="sightseeing_hotel_rooms'. $id .'"><tr id="row'.$id.'" class="row_item"><td><span class="form-check form-check-inline bg-primary  m-1"  style="padding:5px 5px 8px 30px; border-radius:5px" ><input class="form-check-input me-2" id="sightseeing_hotel_rooms'. $id .'"  type="checkbox" data-filter="sightseeing_hotel_rooms" value="'. $id .'"></span></td><td>'. $hotel_name .'</td><td>'. $ac_type .'</td><td>'. $name .'</td><td>'. $bed .'</td><td>'. $capacity .'</td><td>'. $price .'</td><td>'. $pick_season_price .'</td><td>'. $off_season_price .'</td></tr></label>';
}


//     $products .= '<span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin: 3px 2px;"><input class="form-check-input" type="checkbox" name="sightseeing_hotel_rooms" data-filter="sightseeing_hotel_rooms" value="'. $name .'" id="sightseeing_hotel_rooms'. $id .'" ><label class="form-check-label" for="sightseeing_hotel_rooms'. $id .'">'. $name .' </label></span>';
// }


//     $products .= '<span class="form-check" style="border:1px solid #7A70BA; border-radius:5px; display: inline-block; padding: 5px 30px; text-align: center; vertical-align: middle; margin: 3px 2px;"><input class="form-check-input" type="checkbox" name="sightseeing_hotel_rooms" data-filter="sightseeing_hotel_rooms" value="'. $name .'" id="sightseeing_hotel_rooms'. $id .'" ><label class="form-check-label" for="sightseeing_hotel_rooms'. $id .'">'. $name .' </label></span>';
// }






// '<span class="toast default-show-toast align-items-center text-light bg-primary border-0 fade show w-auto m-1" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false"><div class="d-flex justify-content-between"><div class="toast-body">'. $name .'</div><button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button> </div></span>'






$products .= '</table>';


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