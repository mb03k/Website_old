<?php

error_reporting(E_ALL);

if ($_SERVER['SERVER_NAME'] === 'localhost') {
    $url = "/Applications/XAMPP/htdocs/";
} else {
    $url = "/var/www/";
}


define("head", $url."html/head.php");
define("header", $url."html/header.php");
define("footer", $url."html/footer.php");

define("portfolio", $url."portfolio/");
define("bewerbung", $url."portfolio/bewerbung/");

define("sessionTimeoutCheck", $url."sicherheit/sessionTimeoutCheck.php");
define("bewerbungstext", $url."bewerbungstext.php");

define("nichthochladen", $url."nichthochladen.php");

define("p_bt_audio", $url."projekte/p_bt_audio.php");
define("p_bUhr", $url."projekte/p_bUhr.php");
define("p_dame", $url."projekte/p_dame.php");
define("p_drone", $url."projekte/p_drone.php");
define("p_multimengen", $url."projekte/p_multimengen.php");
define("p_schach", $url."projekte/p_schach.php");
define("p_website", $url."projekte/p_website.php");
define("p_wuerfel", $url."projekte/p_wuerfel.php");

?>