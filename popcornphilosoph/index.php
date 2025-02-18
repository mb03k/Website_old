<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../html/head.php'; ?>
    <title>Filme und Bücher</title>
    <link rel="stylesheet" href="../Style/popcornphilosoph.css">

    <link href="https://fonts.googleapis.com/css2?family=LXGW+WenKai+Mono+TC:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body class="gradient">
    <div>
        <?php include '../html/header.php'; ?>
        <div class="container">
            <div class="text-center m-4 p-2 bg-danger rounded" style="--bs-bg-opacity: 0.4; border: 1px solid;">
                <p class="h2">Eine kleine Auswahl an Filmen, die ich über die Zeit gesehen habe</p>
                <p class="h4"> - mit dazugehöriger Bewertung</p>
            </div>
            <div class="container">
                <!--<div class="m-2 row d-flex justify-content-center">
                    <div class="row col-lg m-2 p-2 bg-success rounded" style="--bs-bg-opacity: .5;">
                        <span>
                            Also, was mache ich hier? Ich stelle euch Filme vor!
                            Irgendwann werde ich die Filme in einer Datenbank speichern und eine Sortierung
                            einbauen, damit ich das hier nicht mit <b>7</b> Stunden Arbeit alles
                            einzeln einfügen muss. Aber das kann noch dauern...
                            Deshalb sortiere ich die Filme nach möchtegern Genres
                        </span>
                        <span class="mt-4 p-2 bg-success rounded" style="--bs-bg-opacity: .5;">
                            Aber zuerst meine TOP-Empfehlungen:
                            <p>1. Eternal Sunshine of the Spotless mind</p>
                            <p>2. Shutter Island</p>
                            <p>3. Requiem for a Dream -> wer einen <i>sehr</i> mitreißenden Film sucht</p>
                        </span>
                    </div>

                    <div class="row col-lg m-2 p-2 bg-warning rounded" style="--bs-bg-opacity: .5;">
                        <div class="text-center">
                            <span style="font-size:1.4em;"><p style="margin:0;">⭐️⭐️⭐️</p> Sterne kommen bald <p style="margin:0;">⭐️⭐️⭐️</p></span>
                        </div>

                        <div class="text-center">
                            <span>
                                Bis dahin bitte mit x/10 genügen
                                (genau so wie eine genauere Beschreibung der Filme kommen wird [ich muss natürlich
                                meine Meinung dazu beitragen... ohne Frage])
                            </span>
                        </div>
                    </div>
                </div>-->
                <?php include 'showMovies.php'; ?>
            </div>
        </div>
    </div>

    <?php include '../html/footer.php'; ?>

    <script type="application/x-javascript" src="../Script/ButtonListeners/universalButtons.js"></script>
    <script type="application/x-javascript" src="../Script/ReadSpeed/readSpeed.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
