<?php
// login_user.php
header('Content-Type: application/json');
require 'db_config.php';

$pin = $_POST['pin'] ?? '';

if (empty($pin)) {
    echo json_encode(['success' => false, 'message' => 'PIN is required']);
    exit;
}

$sql = "SELECT * FROM users WHERE pin = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $pin);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid PIN']);
}

$stmt->close();
$conn->close();
?>
