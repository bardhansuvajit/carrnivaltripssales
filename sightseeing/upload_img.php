<?php
include('../db.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Directory where files will be uploaded
    $targetDir = "sightseeing_img/";

    $sightseeing_id=$_POST['sightseeing_id'];
    $destination=$_POST['destination'];
    $location_wise=$_POST['location_wise'];


    
    // Create the directory if it doesn't exist
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $fileCount = count($_FILES['files']['name']);
    $uploadSuccess = true;

    for ($i = 0; $i < $fileCount; $i++) 
    {

        $fileName=rand(1000,1000000).".".strtolower(pathinfo($_FILES['files']['name'][$i],PATHINFO_EXTENSION));
        // $fileName = basename($_FILES['files']['name'][$i]);
        $targetFilePath = $targetDir . $fileName;

        // Check if file is a valid image or video
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        $validExtensions = array('jpg', 'jpeg', 'png', 'webp');

        if (in_array($fileType, $validExtensions)) {
            // Move the file to the target directory
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFilePath)) 
            {

                $query1="INSERT INTO carrnivaltrips_sightseeing_img (sightseeing_id, destination ,location_wise, name) VALUES ('".$_POST['sightseeing_id']."' ,   '$destination' ,   '$location_wise' , '$fileName' )";

                // var_dump($query1);
            
                $result1=mysqli_query($conn,$query1);
                if($result1 === TRUE)
                {
                    echo "The file " . htmlspecialchars($fileName) . " has been uploaded.<br>";            
                }


                
            } else {
                echo "Sorry, there was an error uploading your file: " . htmlspecialchars($fileName) . "<br>";
                $uploadSuccess = false;
            }
        } else {
            echo "Invalid file type for file: " . htmlspecialchars($fileName) . "<br>";
            $uploadSuccess = false;
        }
    }

    if ($uploadSuccess) {
        echo "All files have been uploaded successfully.";
        echo "<script>document.location='add_sightseeing.php?id=$sightseeing_id';</script>";
    } else {
        echo "Some files could not be uploaded.";
        echo "<script>document.location='add_sightseeing.php?id=$sightseeing_id';</script>";
    }
}
?>
