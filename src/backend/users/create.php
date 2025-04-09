<?php

include '../config/db.php';

if($_SESSION['REQUEST_METHOD'] != "POST"){
 echo "Error: " . $conn->error;
}else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $cat = $_POST['category'];

    $sql = "INSERT into users (name, email, password, category) VALUES ('$name', '$email', '$pwd', '$cat')";

    if($conn->query($sql) !== TRUE){
        echo "Error: " . $conn->error;
    }else {
        echo "user Addded Successfully";
    }

}