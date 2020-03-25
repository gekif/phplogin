<?php

$serverName = 'localhost';
$userName = 'root';
$password = 'admin';
$dbName = 'phplogin';

$conn = new mysqli($serverName, $userName, $password, $dbName);

if ($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
}

echo "You are connected";