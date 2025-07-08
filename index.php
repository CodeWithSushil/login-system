<?php

require_once('./php/config.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: ./pages/login.php');
    exit();
}   else {
    header('Location: ./pages/home.php');
    exit();
}
