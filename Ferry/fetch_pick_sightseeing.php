<?php
    include '../db.php';

    if (isset($_POST['destination'])) {

        $destination = strval($_POST['destination']);
        // echo $destination;

        $sql="SELECT * FROM carrnivaltrips_sightseeing WHERE destination = '$destination'";
        $result = mysqli_query($conn,$sql );

        
        $location_wise = [];
        while ($row = mysqli_fetch_array($result)) {
            $location_wise[] = $row;
        }
        
        echo json_encode($location_wise);
    }

    $conn->close();
?>