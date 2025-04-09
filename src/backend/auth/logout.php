<?php

session_start();
include("../config/db.php");

if (isset($_SESSION["user_id"]) && $_SESSION['cat'] !== 'admin') {
    $user_id = $_SESSION["user_id"];
    $date = date("Y-m-d");
    $clock_out = date("H:i:s");

    $conn->query("UPDATE sign_logs SET clock_out = '$clock_out' where user_id = $user_id and date = '$date'");
}

session_destroy();
header("Location: ../../login.html");
exit();