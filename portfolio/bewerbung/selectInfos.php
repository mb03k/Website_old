<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    if (!($_SESSION['ring'] === 0 || $_SESSION['ring'] === 1)) {
        header("Location: ../../bittenicht/");
        die("Du hast keinen Zugriff auf diese Datei!");
    }

    include nichthochladen;

    function getAnsprechperson() {
        global $unternehmenInfos;
        for ($i=0; $i<count($unternehmenInfos); $i++) {
            if ($unternehmenInfos[$i]["unternehmenscode"] === $_SESSION['id']) {
                return $unternehmenInfos[$i]["ansprechperson"];
                break;
            }
        }
        header("Location: ../");
        die("Fehler beim Aufrufen der Daten");
    }

    function getStellenname() {
        global $unternehmenInfos;
        for ($i=0; $i<count($unternehmenInfos); $i++) {
            if ($unternehmenInfos[$i]["unternehmenscode"] === $_SESSION['id']) {
                return $unternehmenInfos[$i]["stellenname"];
                break;
            }
        }
        header("Location: ../");
        die("Fehler beim Aufrufen der Daten");
    }
?>