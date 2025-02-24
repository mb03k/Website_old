<?php
session_start();
if (!isset($_SESSION['login_time']) || !isset($_SESSION['session_timer'])) {
    header("Location: https://weristmatthes.de/");
    die("Bitte einloggen!");
}

if ((time() - $_SESSION['login_time']) > $_SESSION['session_timer']) {
    header("Location: https://weristmatthes.de/sicherheit/logout.php");
    die("Session ist abgelaufen. Bitte erneut einloggen!");
}
?>