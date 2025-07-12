<?php
session_start();

require_once('./config.php');

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === "POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT id, user_password FROM users WHERE user_email = ?";
    
    $stmt = $conn-> prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    
    $stmt->store_result();
    
    if($stmt->num_rows === 1){
        $stmt->bind_result($userId, $hashedPassword);
        $stmt->fetch();
        
        if(password_verify($password, $hashedPassword)){
            $_SESSION['user_id'] = $userId;
            session_regenerate_id(true);
            setcookie('user_id', $userId, time() + 86400 * 30, '/');

            header('Location: ../pages/home.php');
            exit();
        } else {
            header('Location: ../pages/login.php');
            exit();
        }
    } else {
      header('Location: ../pages/register.php');
      exit();
    }
}

