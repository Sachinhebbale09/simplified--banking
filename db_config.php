<?php
// db_config.php

$host = 'localhost';
$db = 'voicebank';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'DB Connection Failed']));
}
?>
