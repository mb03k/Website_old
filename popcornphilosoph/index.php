<!DOCTYPE html>
<html lang="de">
<head>
    <?php include '../html/head.php'; ?>
    <title>Filme und Bücher</title>
    <link rel="stylesheet" href="../Style/popcornphilosoph.css">

    <link href="https://fonts.googleapis.com/css2?family=LXGW+WenKai+Mono+TC:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <meta name="description" content="Filme die ich über die Zeit angesehen habe - mit Bewertung und Beschreibung">
    <meta name="keywords" content="Filme, Movies, Bewertung, Ansehen">
</head>

<body class="gradient">
    <?php include '../html/header.php'; ?>
    <div>
        <div class="container">
            <div class="text-center m-4 p-2 bg-danger rounded" style="--bs-bg-opacity: 0.4; border: 1px solid;">
                <p class="h2">Eine kleine Auswahl an Filmen, die ich über die Zeit gesehen habe</p>
                <p class="h4"> - mit dazugehöriger Bewertung</p>
            </div>

            <div class="container">
                <?php include 'showMovies.php'; ?>
            </div>
            
        </div>
    </div>

    <?php include '../html/footer.php'; ?>

    <script type="application/x-javascript" src="../Script/ButtonListeners/headerfooter.js?v2"></script>
</body>
</html>
