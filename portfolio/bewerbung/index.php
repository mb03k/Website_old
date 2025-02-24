<?php 
session_start();

// if (... || !$_SESSION['ring']<=1) funktioniert nicht (?) - also einzeln ausgeschrieben
if (!isset($_SESSION['ring']) || !($_SESSION['ring']==1 || $_SESSION['ring']==0)) {
    header("Location: https://weristmatthes.de/portfolio/");
}

include '../sicherheit/sessionTimeoutCheck.php';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <?php include '../../html/head.php'; ?>
    <title>Portfolio</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>

<body class="gradient">
    <div>
        <?php include '../../html/header.php';?>
        
        <div class="container">
            <?php include '../../bewerbungstext.php'; ?>
            <p>Hier können Sie sich ausloggen:</p>
            <form action="../../sicherheit/logout.php" type="POST">
                <input type="submit" value="Ausloggen"></input>
            </form>

        </div>

        <?php include '../../html/footer.php'; ?>
    </div>

    <script type="application/x-javascript" src="../Script/ButtonListeners/headerfooter.js"></script>
</body>
</html>
