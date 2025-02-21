<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require '../nichthochladen.php';

$submittedCode = $_POST['code'];

if (codeNotValid()) {
    header("Location: ./#err");
} else {
    $_SESSION['ring'] = 1;
    $_SESSION['id'] = $submittedCode;
    $_SESSION["login_time"] = time();
    $_SESSION["session_ablauf"] = 604800; // 7 Tage
    header("Location: bewerbung/");
}

function codeNotValid() {
    global $unternehmenInfos, $submittedCode;

    for ($i=0; $i<count($unternehmenInfos); $i++) {
        if ($unternehmenInfos[$i][2] === $submittedCode) {
            return false; // eingegebener Code stimmt mit vorhandenem Unternehmen überein
        }
    }
    return true;
}
?>