<?php
    session_start();
    require '../nichthochladen.php';

    $un = $_POST['username'];
    $pw = $_POST['password'];

    if ($un === $nutzername && $pw === $passwort) {
        $_SESSION["ring"] = 0;
        //$_SESSION['id'] = x; für Firma
        $_SESSION["login_time"] = time();
        $_SESSION["session_ablauf"] = 157788000; // 5 Jahre
        header("Location: https://weristmatthes.de/#HalloMatthes");
    } else {
        header("Location: https://weristmatthes.de/#nichtAngemeldet");
        die();
    }
?>