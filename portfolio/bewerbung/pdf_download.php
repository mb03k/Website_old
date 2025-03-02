<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../../sicherheit/links.php';

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

if (!isset($_SESSION['ring']) || !($_SESSION['ring']===1 || $_SESSION['ring']===0)) {
    header("Location: ../../bittenicht/");
    die("Du besitzt keinen Zugriff auf diese Seite!");
}

include sessionTimeoutCheck;


// Einstellungen für den PDF-Download
$file = $_SERVER['QUERY_STRING'] . ".pdf"; 
header("Content-Type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=" . urlencode($file));    
header("Content-Type: application/download"); 
header("Content-Description: File Transfer");             
header("Content-Length: " . filesize($file)); 
  
flush();
  
$fp = fopen($file, "r"); 
while (!feof($fp)) { 
    echo fread($fp, 65536); 
    flush();
}  
  
fclose($fp);
?>
