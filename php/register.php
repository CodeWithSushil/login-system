<?php

require_once('./config.php');

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $sql = "SELECT user_email FROM users WHERE user_email = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    
    $stmt->store_result();
    
    if($stmt->num_rows === 1){
        header('Location: ../pages/register.php');
        exit();
    } else {
        $sql = "INSERT INTO users(user_name, user_email, user_password) VALUES(?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $name, $email, $hashedPassword);
        
        if($stmt->execute()){
            header('Location: ../pages/login.php');
            exit();
        } else {
            header('Location: ../pages/register.php');
            exit();
        }
    }
}

