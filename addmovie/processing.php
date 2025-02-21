<?php

// alle Fehler anzeigen
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include '../sicherheit/addMovieAccessCheck.php';

$movietitle = $_POST['titel'] ?? '';
$moviegenre = $_POST['genre'] ?? 1;
$moviepath = $_POST['path'] ?? '';
$movierating = $_POST['rating'] ?? 0;
$moviedescription = $_POST['description'] ?? '';
$movieWatchDate = $_POST['movieWatchDate'] ?? '';

echo $movietitle . "<br>";
echo $moviegenre . "<br>";
echo $moviepath . "<br>";
echo $movierating . "<br>";
echo $moviedescription . "<br>";
echo $movieWatchDate . "<br>";

// JSON aktualisieren:
    // Pfad zur JSON-Datei
    $jsonFile = "Assets/json/" . getJsonFileName();
    echo "JsonFileName: ".$jsonFile;

    // Neues Element, das angefügt werden soll
    $newJsonInput = [
        "name" => $movietitle,
        "path" => $moviepath,
        "rating" => $movierating,
        "description" => $moviedescription
    ];

    // Bestehende JSON-Datei einlesen
    if (file_exists($jsonFile)) {
        $jsonInhalt = file_get_contents($jsonFile);
        $datenArray = json_decode($jsonInhalt, true); // JSON in ein Array umwandeln
    } else {
        echo "Fehler beim öffnen der JSON Datei";
        die();
    }

    // Neues Element hinzufügen
    array_push($datenArray, $newJsonInput);

    // JSON-Datei mit den neuen Daten überschreiben
    file_put_contents($jsonFile, json_encode($datenArray, JSON_PRETTY_PRINT));
    echo "Dateipfad: " . $jsonFile;

    echo "Daten erfolgreich angefügt!";





// Datei-Upload prüfen und speichern
if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === 0) {
    $dateiName = $moviepath;
    $zielPfad = 'Assets/movies/' . $dateiName; // Name des Bilds

    // Datei speichern
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $zielPfad)) {
        echo "Datei erfolgreich hochgeladen: <a href='$zielPfad'>$zielPfad</a><br>";
        echo "Titel: " . htmlspecialchars($titel) . "<br>";
        echo "description: " . htmlspecialchars($description);
    } else {
        echo "Fehler beim Hochladen!";
    }
} else {
    echo "Keine Datei hochgeladen oder ein Fehler ist aufgetreten!";
}


function getJsonFileName() {
    global $moviegenre;
    switch ($moviegenre) {
        case 1:
            return "action.json";
        case 2:
            return "comedy.json";
        case 3:
            return "history.json";
        case 4:
            return "horror.json";
        case 5:
            return "just_watch.json";
        case 6:
            return "romantic.json";
        case 7:
            return "thriller.json";
        case 8:
            return "books.json";
    }
}

?>
