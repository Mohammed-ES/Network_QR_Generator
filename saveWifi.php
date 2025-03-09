<?php
// saveWifi.php - Script to save Wi-Fi credentials

// Database configuration
$db_host = "localhost";
$db_user = "root";        // Par défaut pour XAMPP
$db_pass = "";            // Par défaut, pas de mot de passe pour XAMPP
$db_name = "wifi_database";

// Initialize response array
$response = [
    'success' => false,
    'message' => ''
];

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate required fields
    if (empty($_POST['ssid'])) {
        $response['message'] = 'Wi-Fi name (SSID) is required';
        echo json_encode($response);
        exit;
    }
    
    // Sanitize inputs
    $ssid = filter_input(INPUT_POST, 'ssid', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $encryption = filter_input(INPUT_POST, 'encryption', FILTER_SANITIZE_STRING);
    
    // Create database connection
    try {
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO wifi_credentials (ssid, password, encryption, created_at) 
                               VALUES (:ssid, :password, :encryption, NOW())");
        
        // Bind parameters and execute
        $stmt->bindParam(':ssid', $ssid);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':encryption', $encryption);
        $stmt->execute();
        
        // Set success response
        $response['success'] = true;
        $response['message'] = 'Wi-Fi credentials saved successfully';
        
    } catch(PDOException $e) {
        $response['message'] = 'Database error: ' . $e->getMessage();
    }
    
    // Close connection
    $conn = null;
} else {
    $response['message'] = 'Invalid request method';
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>