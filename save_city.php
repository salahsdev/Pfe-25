<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'config.php';

header('Content-Type: application/json');

// check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit();
}

$user_id = $_SESSION['user_id'];
$action = $_POST['action'] ?? '';

if ($action === 'save') {
    $city_name = trim($_POST['city_name'] ?? ''); 
    $city_page = trim($_POST['city_page'] ?? '');
    
    if (empty($city_name) || empty($city_page)) {
        echo json_encode(['success' => false, 'message' => 'Missing city information']);
        exit();
    }
    
    try {
        // check if city is already saved
        $check_stmt = $conn->prepare("SELECT id FROM saved_cities WHERE user_id = ? AND city_name = ?");
        if (!$check_stmt) {
            echo json_encode(['success' => false, 'message' => 'Database prepare error: ' . $conn->error]);
            exit();
        }
        
        $check_stmt->bind_param("is", $user_id, $city_name);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();
        
        if ($check_result->num_rows > 0) {
            echo json_encode(['success' => false, 'message' => 'City already saved']);
            $check_stmt->close();
            exit();
        }
        $check_stmt->close();
        
        // Save the city
        $stmt = $conn->prepare("INSERT INTO saved_cities (user_id, city_name, city_page) VALUES (?, ?, ?)");
        if (!$stmt) {
            echo json_encode(['success' => false, 'message' => 'Database prepare error: ' . $conn->error]);
            exit();
        }
        
        $stmt->bind_param("iss", $user_id, $city_name, $city_page);
        
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'City saved successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error saving city: ' . $stmt->error]);
        }
        $stmt->close();
        
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
    
} elseif ($action === 'remove') {
    $city_name = trim($_POST['city_name'] ?? '');
    
    if (empty($city_name)) {
        echo json_encode(['success' => false, 'message' => 'Missing city name']);
        exit();
    }
    
    try {
        $stmt = $conn->prepare("DELETE FROM saved_cities WHERE user_id = ? AND city_name = ?");
        if (!$stmt) {
            echo json_encode(['success' => false, 'message' => 'Database prepare error: ' . $conn->error]);
            exit();
        }
        
        $stmt->bind_param("is", $user_id, $city_name);
        
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'City removed successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error removing city: ' . $stmt->error]);
        }
        $stmt->close();
        
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
    
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid action']);
}
?>
