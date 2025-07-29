<?php

error_reporting(E_ALL);
ini_set('display_errors', false);

function errorHandler($errNo, $errStr, $errFile, $errLine){
  $message = "Error: [$errNo] $errStr - $errFile: $errLine";
  error_log($message . PHP_EOL, 3, 'error_log.txt');
}

set_error_handler('errorHandler');

echo $text;

