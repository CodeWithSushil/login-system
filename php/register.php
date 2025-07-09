<?php

require_once('./config.php');

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === "POST"){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $hash = password_hash($password, PASSWORD_BCRYPT);
  
  $sql = "SELECT * FROM users WHERE user_email='{$email}'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){
    //echo "this email already exist!";
    header('Location: ../pages/register.php');
    exit();
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
    $sql2 = "INSERT INTO users(user_name, user_email, user_password, user_ip) VALUES ('$name', '$email', '$hash', '$ip')";
      $data = mysqli_query($conn, $sql2);
    if($data){
      //echo "Data inserted successfully!";
    header('Location: ../pages/login.php');
        exit();
    }
  }
}
