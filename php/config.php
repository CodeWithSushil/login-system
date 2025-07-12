<?php

// Create Database connection with MySQL or MariaDB
$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'login';

$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_errno()){
    echo "<b>Connect failed:</b> ( ". $conn->connect_errno() . " ): ". $conn->connect_error();
    $conn->close();
    exit();
}
