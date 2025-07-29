<?php

function userIpAddr(){
  $ip = "";
}

function sendMail(){
  
}

function getUserIpAddr(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // Check if from shared internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Check if from a proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // Default, REMOTE_ADDR
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$user_ip = getUserIpAddr();
echo 'User IP Address: '.$user_ip;
