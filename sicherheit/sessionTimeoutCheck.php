<?php
    if (!isset($_SESSION['ring']) || !isset($_SESSION['login_time'])) {
        header("Location: https://weristmatthes.de/#SessionAbgelaufen");
        die("Bitte einloggen!");
    }

    if ($_SESSION['ring'] == 0) {
        $session_runtime = 157788000;
    } else if ($_SESSION['ring'] == 1) {
        $session_runtime = 1209600;
    } else {
        $session_runtime = 0;
    }

    if ((time() - $_SESSION['login_time']) > $session_runtime) {
        header("Location: https://weristmatthes.de/sicherheit/logout.php");
        die("Session ist abgelaufen. Bitte erneut einloggen!");
    }
?>