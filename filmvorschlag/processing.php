<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Datei hat Limit für Größe erreicht
if (filesize('/Applications/XAMPP/filmvorschlag.json') > 5*1024*1024) { // 5 MB
    header("Location: ./#error");
    die("Datei ist zu groß");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mTitle = $_POST['movietitle'];
    $mDescription = $_POST['moviedescription'];

    $title = htmlspecialchars($mTitle, ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars($mDescription, ENT_QUOTES, 'UTF-8');
    $sent_date = date("d.m.Y");
    $sent_time = date("H:i:s");
    
    echo "Titel: ".$title."<br>beschreibung: ".$description."<br>";

    if (empty($title)) {
        //header("Location: ./#error");
        die("Titel eingeben");
    }
    if (strlen($title) > 100 || strlen($description) > 500) {
        //header("Location: ./#error");
        die("Eingaben zu groß");
    }

    // JSON aktualisieren:
    $jsonFile = "/Applications/XAMPP/filmvorschlag.json";

    $user_ip = getenv('REMOTE_ADDR');
    $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
    $country = $geo["geoplugin_countryName"];
    $city = $geo["geoplugin_city"];

    $newJsonInput = [
        "t" => $title,
        "a" => $description,
        "d" => $sent_date,
        "z" => $sent_time,
        "IP" => $user_ip,
        "c" => $country,
        "s" => $city
    ];

    // Bestehende JSON-Datei einlesen
    if (file_exists($jsonFile)) {
        $jsonInhalt = file_get_contents($jsonFile);
        $datenArray = json_decode($jsonInhalt, true); // JSON in Array umwandeln
    } else {
        echo "Fehler beim öffnen der JSON Datei";
        //header("Location: ./#error");
        die();
    }

    array_push($datenArray, $newJsonInput);
    file_put_contents($jsonFile, json_encode($datenArray, JSON_PRETTY_PRINT));

    echo "Daten erfolgreich zu JSON angefügt";
    header("Location: ./#success");
} else {
    echo "Wieso bist du hier?";
    header("Location: ../bittenicht/");
}
?>