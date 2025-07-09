<?php

// Create Database connection with MySQL or MariaDB
$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'login';

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if(mysqli_connect_errno()){
    echo "<b>Connect failed:</b> ( ". mysqli_connect_errno() . " ): ". mysqli_connect_error();
    mysqli_close($conn);
    exit();
}
