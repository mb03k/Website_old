<?php
include '../sicherheit/links.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <?php include head ?>
    <title>Nichts gefunden</title>
    <meta name="description" content="Vermutlich hast du dich verlaufen!">
    <meta name="keywords" content="404, nicht gefunden">
</head>

<body class="gradient">
    <div>
        <?php include header; ?>
        
        <div class="container bg-info text-center w-75 p-4" style="margin-top: 10vh; margin-bottom: 300px; border-radius: 5em;">
            <div class="row">
                <span class="text-white" style='line-height: 90%; font-size: 25vw; font-weight: 800; font-family: "Inter", sans-serif;'>404</span>
                <h2>nicht gefunden<h2>
            </div>

            <div>
                <button class="btn btn-primary home_btn" type="button">
                    Startseite
                </button>
            </div>
        </div>

        <?php include footer; ?>
    </div>

    <script type="application/x-javascript" src="../Script/ButtonListeners/headerfooter.js?v2"></script>
    <script type="application/x-javascript" src="../Script/ButtonListeners/woistmatthes.js"></script>
</body>
</html>
