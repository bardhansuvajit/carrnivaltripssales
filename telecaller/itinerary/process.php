<?php
// Get the raw POST data
$data = json_decode(file_get_contents('php://input'), true);

// Access the value sent from JavaScript
if (isset($data['value'])) {
    $value = $data['value'];
    // Process the value (e.g., save to database, perform calculations, etc.)
    echo htmlspecialchars($value);
} else {
    echo " ";
}
?>
