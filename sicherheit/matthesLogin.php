<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

require '../nichthochladen.php';

$un = $_POST['username'];
$pw = $_POST['password'];

if ($un === $nutzername && $pw === $passwort) {
    $_SESSION["ring"] = 0;
    $_SESSION["login_time"] = time();
    $_SESSION["session_ablauf"] = 157788000;
    header("Location: https://weristmatthes.de/#HalloMatthes");
} else {
    header("Location: https://weristmatthes.de/#nichtAngemeldet");
    die();
}
?>