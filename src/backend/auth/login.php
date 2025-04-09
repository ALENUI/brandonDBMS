<?php
session_start();
include '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "User not found.";
  } else {
    $email = $_POST['email'];
  $password = $_POST['password'];

  $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['role'] = $user['role'];
      $_SESSION['name'] = $user['name'];

      $user_id = $user['id'];
      $date = date('Y-m-d');
      $clock_in = date('H:i:s');

      $conn ->query("INSERT into sign_logs (user_id, date, clock_in) VALUES ('$user_id', '$date', '$clock_in') on DUPLICATE KEY UPDATE clock_in = '$clock_in'");
      echo "Login successful. Welcome " . $user['name'];
      // redirect based on role
      header("Location: ../../dashboard.php");
      exit();
    } else {
      echo "Invalid password.";
    }
  } else {
    echo "user not found";
  }
}