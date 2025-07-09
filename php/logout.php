<?php
session_start();
session_unset();
session_destroy();

setcookie("user_id", "", time() - 86400 * 30, "/");
header('Location: ../pages/home.php');
exit();
