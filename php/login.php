<?php
session_start();

require_once('./config.php');

if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] === "POST")
{
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $sql = "SELECT * FROM users WHERE user_email='{$email}'";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0){
    $data = mysqli_fetch_assoc($result);
    $hash = $data['user_password'];
    if(password_verify($password, $hash)){

      $_SESSION['user_id']=$data['id'];

      setcookie('user_id', $data['id'], time() + 86400 * 30, "/");

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
