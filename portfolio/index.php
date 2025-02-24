<?php
    session_start();
    // direkt weiterleiten falls Zugriff ermöglicht
    if (isset($_SESSION["ring"]) && $_SESSION["ring"]<=1) {
        header("Location: bewerbung/");
    }
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <?php include '../html/head.php'; ?>
    <title>Portfolio</title>
    <meta name="description" content="Eine Seite für Bewerbungen und dessen Personal, um mich genauer vorzustellen">
    <meta name="keywords" content="Portfolio, Bewerbung, Vorstellung">
</head>

<body class="gradient">
    <div>
        <?php include '../html/header.php'; ?>
        
        <div class="container">
            <p class="h2 text-center mt-4 mb-4">Willkommen! Bitte geben Sie den Code ein, den ich meiner Bewerbung beigefügt habe</p>
            <form action="welcome.php" method="POST">
                <div class="container d-flex flex-column">
                    <div class="d-flex justify-content-center">
                        <input type="text" name="code" class="form-control w-75" style="height: 4em;" placeholder="4A6z...">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary w-50">Senden</button>
                    </div>
                </div>
            </form>
            <div class="d-flex justify-content-center text-center">
                <p class="text-light rounded p-2 mt-2" style="background-color: rgb(255,0,0,0.5);" id="peekaboo-falscheEingabe" hidden>
                    Falscher Versuch!
                </p>
            </div>
            <script>
                if (window.location.hash) {
                    document.getElementById("peekaboo-falscheEingabe").hidden = false;
                }
            </script>
        </div>

        <?php include '../html/footer.php'; ?>
    </div>

    <script type="application/x-javascript" src="../Script/ButtonListeners/headerfooter.js"></script>
</body>
</html>
