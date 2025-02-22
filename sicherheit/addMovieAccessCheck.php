<?php

session_start();
if (!isset($_SESSION['ring']) || !($_SESSION['ring'] === 0)) {
    header("Location: https://www.weristmatthes.de/bittenicht/");
}

?>