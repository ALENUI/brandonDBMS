<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "staff_db";

$conn = new mysqli($host, $user, $password, $db);

if ($conn -> connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

?>