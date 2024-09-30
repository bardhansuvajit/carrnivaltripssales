<?php
session_start();

require ("db.php");



if (empty($_SESSION['sess_user'])) {
    $sqlTable = "SELECT * FROM carrnivaltrips_lead  ";
} else {
    // $query="SELECT * FROM jewellery_ckbes union select * from jewellery_ckbes_local ";
    $sqlTable = "SELECT * FROM carrnivaltrips_lead ";
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




if (isset($_POST["status"])) {
    $status = $_POST["status"];
    $status = implode("','", $status);
    $customSql = "status IN('" . $status . "') ";  //replace databse colN
    $sql .= empty($sql) ? "where ".$customSql : "AND ($customSql)";
}


// Filter by lead date (if provided)
if (isset($_POST["fromDate"]) && isset($_POST["toDate"])) {
    $startLeadDate = $_POST["fromDate"];
    $endLeadDate = $_POST["toDate"];
    $dateSql = "lead_date BETWEEN '$startLeadDate' AND '$endLeadDate'";
    $sql .= empty($sql) ? "WHERE $dateSql" : " AND ($dateSql)";
}

// Filter by travel date (if provided)
if (isset($_POST["start_travel_date"]) && isset($_POST["end_travel_date"])) {
    $startTravelDate = $_POST["start_travel_date"];
    $endTravelDate = $_POST["end_travel_date"];
    $dateSql = "travel_date BETWEEN '$startTravelDate' AND '$endTravelDate'";
    $sql .= empty($sql) ? "WHERE $dateSql" : " AND ($dateSql)";
}







//data fetch for product view
$completeSql = " $sqlTable  $sql "; //LIMIT $recordsFetched,$recordsPerPage  //where $sql  //where item_type IN($productType)   //where $sql 

// echo $completeSql;
$query = mysqli_query($conn, $completeSql);
$products = '';





while ($row = mysqli_fetch_assoc($query)) {


    $status = $row['status'];


    $row_color = ""; // Default color

    // Setting background color based on status
    switch ($status) {
        case "Connected":
            $row_color = "background-color: #d1f7c4;"; // Light green
            break;
        case "Follow Up":
            $row_color = "background-color: #fff3cd;"; // Light yellow
            break;
        case "Pipeline":
            $row_color = "background-color: #d9ecff;"; // Light blue
            break;
        case "Negotiation":
            $row_color = "background-color: #ffe5b4;"; // Light orange
            break;
        case "Confirmed":
            $row_color = "background-color: #b6e0b6;"; // Green
            break;
        case "Lost":
            $row_color = "background-color: #FF5C5C;"; // Scarlet red 
            break;
        case "Hot":
            $row_color = "background-color: #ff7f7f;"; // Red
            break;
        case "Warm":
            $row_color = "background-color: #ffd966;"; // Orange
            break;
        case "Cold":
            $row_color = "background-color: #d6d6d6;"; // Grey
            break;
        default:
            $row_color = "background-color: #ffffff;"; // Default white
            break;
    }



    $last_active = strtotime($row['online_status']);
    $current_time = time();



    if (($current_time - $last_active) <= 120) { // Within 2 minutes
      $online_status= "<span style='background-color:green; border: 1px solid white; width: 10px; height: 10px; border-radius: 50%;'></span>";
    } else {
      $online_status="<span style='background-color:red; border: 1px solid gray; width: 10px; height: 10px; border-radius: 50%;'></span>";
    }


$text1="Greeting from the CarrnivalTrips Team. Thank you for Choosing Us, 
Here is your ";
$text2="Itinerary Details ";

   
    $id = $row['id'];
    $unique_id = $row['unique_id'];
    $name = $row['name'];
    $ph_no = $row['ph_no'];
    $whatsapp_no = $row['whatsapp_no'];
    $email = $row['email'];
    $destination = $row['destination'];
    $no_of_day = $row['no_of_day'];
    $no_of_night = $row['no_of_night'];
    

    

     $products .= '<tr style="' . $row_color . '" ><td>'. $id .'</td><td>'. $unique_id .'</td><td style="text-align: center;"><a href="lead/edit_lead.php?id='. $id .'" >'. $name .'</a>&nbsp;<span class="online_status round_shape"  id="user_status" >'.$online_status.'</span></td><td><i class="icofont icofont-ui-call px-2"></i>'. $ph_no .'<br> <i class="icofont icofont-brand-whatsapp px-2"></i>'. $whatsapp_no .'<br><i class="icofont icofont-email px-2"></i>'. $email .'</td> <td style="text-align: center;">'. $destination .'<br>'. $no_of_day .'D/'. $no_of_night .'N</td><td>'. $status .'</td><td><ul class="action"><li title="Preview Itinerary"><a type="submit"  href="../carrnivaltripslead/index.php?id='. $id .'" target="_blank" ><i class="icofont icofont-eye-alt"></i></a></li><li  title="Share Itinerary"><a target="_blank" href="https://wa.me/91'. $whatsapp_no .'?text=%0a'. $text1 .'%20'. $destination .'%20'. $text2 .' https://easymybusiness.shop/carrnivaltrips/carrnivaltripslead/index?id='. $id .'" id="Share-Button" onclick="Share1()" ><i class="icofont icofont-brand-whatsapp px-2" style="color:green"></i></a></li></ul></td></tr>';

    // $products .= '<tr style="' . $row_color . '" ><td>'. $id .'</td><td>'. $unique_id .'</td><td style="text-align: center;"><a href="lead/edit_lead.php?id='. $id .'" >'. $name .'</a>&nbsp;<span class="online_status round_shape"  id="user_status" >'.$online_status.'</span></td><td><i class="icofont icofont-ui-call px-2"></i>'. $ph_no .'<br> <i class="icofont icofont-brand-whatsapp px-2"></i>'. $whatsapp_no .'<br><i class="icofont icofont-email px-2"></i>'. $email .'</td> <td style="text-align: center;">'. $destination .'<br>'. $no_of_day .'D/'. $no_of_night .'N</td><td>'. $status .'</td><td><ul class="action"><li title="Preview Itinerary"><a type="submit"  href="../carrnivaltripslead/index.php?id='. $id .'" target="_blank" ><i class="icofont icofont-eye-alt"></i></a></li><li  title="Share Itinerary"><a target="_blank" href="https://wa.me/91'. $whatsapp_no .'?text=%0a'. $text1 .'%20'. $destination .'%20'. $text2 .' https://easymybusiness.shop/carrnivaltrips/carrnivaltripslead/index?id='. $id .'" id="Share-Button" onclick="Share1()" ><i class="icofont icofont-brand-whatsapp px-2" style="color:green"></i></a></li><li class="edit" title="Create & Modify Itinerary"> <a href="itinerary/create_itinerary.php?id='. $id .'"><i class="icon-pencil-alt" ></i></a></li></ul></td><td><ul class="action"><li title="All Activity"   ><a  href="lead/timeline.php?id='. $id .'"  ><i style="color: blue;"  class="icofont icofont-history"></i></a></li>&nbsp;&nbsp;<li title="Call" style="color: green;" ><a   href="#" ><i style="color: green;" class="icofont icofont-headphone-alt"></i></a></li>&nbsp;&nbsp;<li title="Record" style="color: red;"><a  href="#" ><i style="color: red;" class="icofont icofont-radio-mic"></i></a></li>&nbsp;&nbsp;<li title="Notes"  ><a  href="index.php?notes_id='. $id .'" target="_blank" ><i  class="icofont icofont-ui-note" style="color: blue;" ></i></a></li></ul></td></tr>';
}



// <li class="delete" ><a href="#" onclick="return confirm("Do you really want to Delete ?");"><i class="icon-trash"></i></a></li>

// <a href="php_action/delete_product.php?delid='. $id .'" onclick="return confirm("Do you really want to Delete ?");"><i class="icon-trash"></i></a>




// '<span class="online_status"></span>'









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



