<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    if (!($_SESSION['ring'] === 0 || $_SESSION['ring'] === 1)) {
        header("Location: https://weristmatthes.de/bittenicht/");
        die("Du hast keinen Zugriff auf diese Datei!");
    }

    include '../../nichthochladen.php';

    function getAnsprechperson() {
        global $unternehmenInfos;
        for ($i=0; $i<count($unternehmenInfos); $i++) {
            if ($unternehmenInfos[$i]["unternehmenscode"] === $_SESSION['id']) {
                return $unternehmenInfos[$i]["ansprechperson"];
                break;
            }
        }
        return "";
    }

    function getStellenname() {
        global $unternehmenInfos;
        for ($i=0; $i<count($unternehmenInfos); $i++) {
            if ($unternehmenInfos[$i]["unternehmenscode"] === $_SESSION['id']) {
                return $unternehmenInfos[$i]["stellenname"];
                break;
            }
        }
        return "";
    }
?>