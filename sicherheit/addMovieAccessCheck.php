<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if (!isset($_SESSION['ring']) || !($_SESSION['ring'] === 0)) {
    header("Location: https://www.weristmatthes.de/bittenicht/");
    die("keine Zugriffsfreigabe");
}

?>