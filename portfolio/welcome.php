<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../nichthochladen.php';

$submittedCode = $_POST['code'];

if (codeIsValid()) {
    session_start();
    $_SESSION['ring'] = 1;
    $_SESSION['id'] = $submittedCode;
    $_SESSION["login_time"] = time();
    $_SESSION["session_ablauf"] = 604800; // 7 Tage
    header("Location: bewerbung/");
} else {
    header("Location: ./#err");
}

function codeIsValid() {
    global $unternehmenInfos, $submittedCode;

    for ($i=0; $i<count($unternehmenInfos); $i++) {
        if ($unternehmenInfos[$i]["unternehmenscode"] === $submittedCode) {
            return true; // eingegebener Code stimmt mit vorhandenem Unternehmen überein
        }
    }
    return false;
}
?>