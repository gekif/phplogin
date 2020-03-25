<?php

require_once 'conn.php';

$user = isset($_POST['user']);
$pass = isset($_POST['pass']);

$sql = "SELECT * FROM membership WHERE 
        user = '".$user."' AND pass = '".$pass."' LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "- You are login";

    header('Refresh: 2; URL = home.php');

} else {
    echo "- Your email or password is wrong";
}


