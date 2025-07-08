<?php

$host = 'localhost';
$dbname = 'root';
$user = '';
$pass = 'test';

$conn = mysqli_connect($host,$dbname,$user,$pass);

if ($conn){
 echo "error";
}
