<?php
error_reporting(E_ALL);
include '../sicherheit/links.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <?php include head; ?>
    <title>Projekte</title>
    <link rel="stylesheet" href="../Style/projects.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <meta name="description" content="Meine aktuellen Projekte die ich im Bereich der Informatik nebenher gemacht, oder aktuell vor mich her laufen habe">
    <meta name="keywords" content="Projekte, DIY, Drone, Dame, Schach, Website, Würfel">
</head>

<body class="gradient">
    <div>
        <?php include header; ?>
        
        <div class="container">
            <div class="h1 mt-3 text-center">
                <span class="my_projects_headline">
                    <p class="bg-danger rounded m-2">
                        Meine Projekte
                    </p>
                </span>
            </div>

            <div class="project_website">
                <?php include p_website; ?>
            </div>

            <div class="d-flex justify-content-center">
                <hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">
            </div>

            <div class="project_drone">
                <?php include p_drone; ?>
            </div>

            <div class="d-flex justify-content-center">
                <hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">
            </div>

            <div class="project_binaehruhr">
                <?php include p_bUhr; ?>
            </div>

            <div class="d-flex justify-content-center">
                <hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">
            </div>

            <div class="project_bluetooth_audio_control">
                <?php include p_bt_audio; ?>
            </div>

            <div class="d-flex justify-content-center">
                <hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">
            </div>

            <div class="project_chess">
                <?php include p_schach; ?>
            </div>

            <div class="d-flex justify-content-center">
                <hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">
            </div>

            <div class="project_wuerfel">
                <?php include p_wuerfel; ?>
            </div>

            <div class="d-flex justify-content-center">
                <hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">
            </div>

            <div class="project_checkers">
                <?php include p_dame; ?>
            </div>

            <div class="d-flex justify-content-center">
                <hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">
            </div>

            <div class="projekt_multimengen">
                <?php include p_multimengen; ?>
            </div>
        </div>

        <?php include footer; ?>
    </div>

    <script type="application/x-javascript" src="../Script/ButtonListeners/headerfooter.js?v2"></script>
    <script type="application/x-javascript" src="../Script/ButtonListeners/projekte.js?v2"></script>
</body>
</html>
