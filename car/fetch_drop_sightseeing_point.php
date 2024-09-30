<?php
    include '../db.php';

    if (isset($_POST['drop_sightseeing'])) {

        $drop_sightseeing = strval($_POST['drop_sightseeing']);
        $destination = strval($_POST['destination']);

        // echo $pick_sightseeing."</br>";
        // echo $destination."</br>";


        $sql="SELECT * FROM carrnivaltrips_sightseeing_points WHERE destination = '".$destination."' AND location_wise = '".$drop_sightseeing."'";
        $result = mysqli_query($conn,$sql );
        // echo $sql."</br>";
        
        $location_wise = [];
        while ($row = mysqli_fetch_array($result)) {
            $location_wise[] = $row;
        }
        
        echo json_encode($location_wise);
    }

    $conn->close();
?>