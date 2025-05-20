<?php
// register_user.php
header('Content-Type: application/json');
require 'db_config.php';

$name = $_POST['name'] ?? '';
$pin = $_POST['pin'] ?? '';
$language = $_POST['language'] ?? '';

if (empty($name) || empty($pin)) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

$sql = "INSERT INTO users (name, pin, language) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $pin, $language);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Registration failed']);
}

$stmt->close();
$conn->close();
?>
