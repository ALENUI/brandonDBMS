<?php

include '../config.php';

if($_SESSION['REQUEST_METHOD'] =="POST"){
    $user_id = $_POST['user_id'];
 $title =  $_POST['title'];
 $desc = $_POST["description"];
 $date = $_POST['date'];
 $due = $_POST['dueDate'];

 $sql = "INSERT INTO tasks (user_id, title, description, date, due_Date) VALUES ('$user_id', '$title', '$desc', '$date', '$due')";

 if ($conn->query($sql)){
      echo "task assigned Successfully";
 }else{
    echo "ERROR: " / $conn->error;
 }
}