<?php

include('../db.php');
// Assuming you have already established a database connection ($conn)

// Decode the incoming JSON payload from JavaScript
$input = json_decode(file_get_contents('php://input'), true);

if(isset($input['product'])) {
    $product = $input['product'];
    $user_id = $input['user_id'];


    // Insert product click data with current date and time
    $sql = "INSERT INTO carrnivaltrips_lead_track (user_id,name, click_time) VALUES (?,?, NOW())";
    
    // Prepare the statement for security against SQL injection
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("i","i", $product);
    $stmt->bind_param("is", $user_id, $product);


    f ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Click recorded successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to record click.']);
    }

    // Close the statement
    $stmt->close();
    
    // Execute the statement and check if it was successful
?>