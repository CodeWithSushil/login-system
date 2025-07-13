<?php

// Create Database connection with MySQL or MariaDB
$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'login';

$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_errno){
    echo "<b>Connect failed:</b> ( ". $conn->connect_errno . " ): ". $conn->connect_error;
    $conn->close();
    exit();
}

ini_set('session.cookie_httponly', '1');
ini_set('session.cookie_secure', '0');
ini_set('session.use_only_cookies', '1');
ini_set('session.use_strict_mode', '1');

session_set_cookie_params([
  'lifetime' => 60 * 60 * 24 * 30,
  'path'     => '/',
  'domain'   => '',
  'secure'   => false,
  'httponly' => true,
  'samesite' => 'Strict'
]);

session_start();
