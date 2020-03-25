<?php

require_once 'conn.php';

$user = isset($_POST['user']);
$email = isset($_POST['email']);
$pass = isset($_POST['pass']);

$sql = "INSERT INTO membership (user, email, pass) 
        VALUES ('".$user."', '".$email."', '".$pass."')";

if ($conn->query($sql) === true) {
    echo "-You are connected on query";

} else {
    echo "Error " . $sql . $conn->error;
}

