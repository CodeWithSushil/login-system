<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['logout'])){
    $userId = $_POST['userid'];
    
    if($_SESSION['user_id'] === $userId || $_COOKIE['user_id'] === $userId){
        session_unset();
        session_destroy();
        setcookie('user_id', '', time() - 86400 * 30, '/');
        header('Location: ../pages/home.php');
        exit();
    }
}
