<!DOCTYPE html>
<html lang="de">
<head>
    <?php include '../html/head.php'; ?>
    <title>Ich bin gespannt!</title>
    <link rel="stylesheet" href="../Style/colorpalette.css">
    <meta name="description" content="Schick mir gerne ein oder mehrere Filmvorschläge!">
    <meta name="keywords" content="Film, Filmvorschlag, Filmbeschreibung">
</head>
<body class="gradient">
    <div>
    <?php include '../html/header.php'; ?>
        <div class="container">
            <form action="processing.php" method="POST">
                <div class="form-group mt-2">
                    <label for="movietitle">Titel (max. 100 Zeichen)</label>
                    <input type="text" name="movietitle" class="form-control" id="movietitle" placeholder="A Nymphoid Barbarian in Dinosaur Hell" required>
                </div>

                <div class="form-group mt-4">
                    <label for="moviedescription">Anmerkungen? (max. 500 Zeichen)</label>
                    <textarea class="form-control" name="moviedescription" id="moviedescription" rows="3" placeholder="Sehr lieb, dass du einen Filmvorschlag geben möchtest!"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Senden</button>
            </form>

            <div class="bg-success text-center rounded mt-3" id="volunteer_success" hidden>
                <p class="text-light">Danke für den Vorschlag - erfolgreich hochgeladen!</p>
            </div>

            <div class="bg-danger text-center rounded mt-3" id="volunteer_error" hidden>
                <p class="text-light">Es ist ein Fehler aufgetreten. Bitte nochmal versuchen!</p>
            </div>

            <div class="bg-purple p-2 rounded" style="margin-top: 200px;">
                <p class="bg-purple-700 rounded p-1">Nein, ich lüge nicht: <a href="#" class="funny_movie_name_link">'A Nymphoid Barbarian in Dinosaur Hell'</a> ist ein echter Film</p>
                <p class="bg-purple-700 rounded p-1 mb-0">Und nein: &lt;script&gt;console.log("Hallo ich bin ein Hacker");&lt;script&gt; geht nicht!</p>
                <p class="bg-purple-700 rounded p-1">-> aber bitte sein lassen bevor die Website explodiert o.Ä.</p>
            </div>
        </div>

        <script>
            if (window.location.hash.substring(1) === 'success') {
                document.getElementById("volunteer_success").hidden = false;
            } else if (window.location.hash.substring(1) === 'error') {
                document.getElementById("volunteer_error").hidden = false;
            }
        </script>

        <?php include '../html/footer.php'; ?>
    </div>
    <script type="application/x-javascript" src="../Script/ButtonListeners/headerfooter.js"></script>
    <script type="application/x-javascript" src="../Script/ButtonListeners/filmvorschlag.js"></script>
</body>
</html>