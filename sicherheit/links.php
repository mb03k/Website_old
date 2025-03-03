<?php

error_reporting(E_ALL);

if ($_SERVER['SERVER_NAME'] === 'localhost') {
    $url = "/Applications/XAMPP/";
} else {
    $url = "/var/www/html";
}

define("head", $url."html/html/head.php");
define("header", $url."html/html/header.php");
define("footer", $url."html/html/footer.php");

define("portfolio", $url."html/portfolio/");
define("bewerbung", $url."html/portfolio/bewerbung/");

define("sessionTimeoutCheck", $url."html/sicherheit/sessionTimeoutCheck.php");
define("bewerbungstext", $url."bewerbungstext.php");

define("nichthochladen", $url."nichthochladen.php");

define("p_bt_audio", $url."html/projekte/p_bt_audio.php");
define("p_bUhr", $url."html/projekte/p_bUhr.php");
define("p_dame", $url."html/projekte/p_dame.php");
define("p_drone", $url."html/projekte/p_drone.php");
define("p_multimengen", $url."html/projekte/p_multimengen.php");
define("p_schach", $url."html/projekte/p_schach.php");
define("p_website", $url."html/projekte/p_website.php");
define("p_wuerfel", $url."html/projekte/p_wuerfel.php");

?>