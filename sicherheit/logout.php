<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

session_unset();
session_destroy();
header("Location: https://weristmatthes.de/");
exit();

?>