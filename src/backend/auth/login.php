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
      echo "Login successful. Welcome " . $user['name'];
      // redirect based on role
      header("Location: ../../dashboard.php");
    } else {
      echo "Invalid password.";
    }
  }
}
