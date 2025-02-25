<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

// if (... || !$_SESSION['ring']<=1) funktioniert nicht (?) - also einzeln ausgeschrieben
if (!isset($_SESSION['ring']) || !($_SESSION['ring']==1 || $_SESSION['ring']==0)) {
    header("Location: https://weristmatthes.de/portfolio/");
}

include '../../sicherheit/sessionTimeoutCheck.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Matthes Böttcher">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../../Style/header.css">
    <link rel="icon" href="https://weristmatthes.de/Assets/M.png">
</head>

<body class="gradient">
    <div>
        <?php include '../../html/header.php';?>
        
        <div class="container">
            <?php include 'selectInfos.php'; ?>

            <p class="h1 text-center mt-4 mb-5"><?php echo getStellenname();?></p>

            <p>
                Sehr <?php echo getAnsprechperson(); ?>,
            </p>


            <div class="block">
                <div class="row">
                    <div class="val">
                        <img class="rounded m-3" width=250px src="../../Assets/me.JPEG" style="float: right;"></img>
                        <?php include '../../bewerbungstext.php'; ?>    
                    </div>
                </div>
            </div>

            <div class="bg-light p-2 rounded shadow shadow-regular mb-4">
                <p>
                    <small>Hinweis: da ich versuche Sie persönlich Anzusprechen, habe ich diese Seite unter Passwortschutz gestellt, um nicht Ihre
                    Daten ohne Einverständnis zu veröffentlichen. Des weiteren wollte ich mich vermehrt mit PHP und dessen Sicherheitsmechanismen auseinandersetzen
                    und ein paar 'experimente' ausprobieren - wie den geschützten Zugriff auf Websites.
                    </small>
                </p>
                <p>
                    <small>
                    Per folgenden Button können Sie die Session beenden (sich ausloggen):
                    </small>
                </p>
                <form action="../../sicherheit/logout.php" type="POST">
                    <input type="submit" value="Ausloggen"></input>
                </form>
            </div>
        </div>

        <?php include '../../html/footer.php'; ?>
    </div>

    <script type="application/x-javascript" src="../../Script/ButtonListeners/headerfooter.js?v2"></script>
    <script type="application/x-javascript" src="../../Script/ButtonListeners/bewerbung.js?v2"></script>
</body>
</html>
