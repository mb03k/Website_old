<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../html/head.php'; ?>
    <title>Projekte</title>
    <link rel="stylesheet" href="../Style/projects.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body class="gradient">
    <div>
        <?php include '../html/header.php'; ?>
        
        <div class="container">
            <div class="h1 text-center">
                <span class="my_projects_headline">
                    <p class="bg-danger rounded m-2">
                        Meine Projekte
                    </p>
                </span>
            </div>

            <div class="project_v6">
                <div class="rounded p-4" style="background-color: #00003F;">
                    <p class="h3 text-center mt-3"><b>Cooler LED Würfel</b></p>
                    <p>Idee: einen Würfel mit Logiggattern (AND, OR, NAND) bauen</p>
                    <p>Im (digitalen) Würfel sind logischerweise 6 LEDs angeschlossen</p>
                    <p>Diese LEDs sind paarweise als Variablen zur Vereinfachung verknüpft</p>
                    <img src="../Assets/wuerfelbelegung.png" class="rounded" style="width:150px;">
                    <p>Mit dem Aufbau kann man alle Zustände (1-6) des Würfels mit den jeweiligen Variablen beschreiben</p>
                    <p>Sprich: jeder Zustand enthält eine Art ID</p>
                    <p>z.B. ist der Zustand 4) A ¬B ¬C D eindeutig der Zahl 4 zuordenbar</p>
                    <span>-> wobei dieses Zeichen: ¬ für eine Negation steht, also für das Gegenteil eines Wahrheitswertes. Aus wahr wird falsch, aus falsch wird wahr</span>
                    <figure class="figure">
                        <img src="../Assets/wuerfelzustaende.png" style="width: 250px" class="figure-img img-fluid rounded" alt="Würfelzustände mit 6 Zahlen">
                        <figcaption class="figure-caption text-muted bg-info p-1 rounded">Hier sollte ich erwähnen: die Würfelanzeige ist "lowactive", die LEDs sind also AN, wenn eine logische 0 anliegt und AUS, wenn eine 1 anliegt</figcaption>
                    </figure>
                    <p>Mit diesen 6 Zuständen (IDs), kann man jetzt loslegen. Aber 6 Zustände sind relativ viel. Kann man sie nicht vereinfachen?</p>
                    <p>Ja, kann man! Mit bspw. einem Karnaugh-Diagramm. Um es nicht all zu komplex zu machen:</p>
                    <p>Das Ziel ist es, eine 'minimierte Normalform' (DNF) herauszufinden. Was bringt uns das? Naja, die 6 Zustände werden jetzt zu eleganten 4 Zuständen. Für die am Anfang erwähnten Variablen A, B, C und D</p>
                    <p>Mit dem KV-Digramm findet man diese Formen (es gibt auch andere Lösungen):</p>
                    <p>D' = A</p>
                    <p>C' = ¬C¬A ∨ ¬C¬B</p>
                    <p>B' = ¬C¬B¬A</p>
                    <p>A' = ¬B¬A ∨ ¬C</p>
                    <p>Mit diesen Variablen kann man nun alle Zustände darstellen. Diese Gleichungen sind 1:1 auf eine Schaltung übertragbar. Also die mit NANDs, ANDs und ORs</p>
                    <figure class="figure">
                        <img src="../Assets/wuerfelschaltung.png" style="width: 250px" class="figure-img img-fluid rounded" alt="Schaltung des Würfels; NAND uns ANDs">
                        <figcaption class="figure-caption text-muted bg-info p-1 rounded">Man kann noch viel mit dem De-Morganschen Theroem spielen und weiter vereinfachen</figcaption>
                    </figure>
                    <p>Aber um einen Würfel zu bauen, der automatisch hochzählen kann, braucht man auch noch einen Zähler, der angibt, bei welchem Wert man ist. Hier kommt das DL193D-Gatter ins Spiel. Mit diesem kann man per einfachem CLOCK-Signal von 0-15 hochzählen. </p>
                    <p>Im Datenblatt zu ihm findet man auch die richtige Belegung, um nach oben zu zählen. Wenn man am UP-Pin eine logische 1 anlegt, zählt er um eins hoch. Wenn man das unendlich oft wiederholt, zählt man immer von 0-15. Dieses Taktsignal kann man leicht per Arduino erzeugen. </p>
                    <p>Und damit ist es auch fast geschafft: jetzt müssen wir diesen Zähler mit den verschiedenen Ausgängen verbinden, die mit dem Würfel verbunden sein werden. Aber das ist sehr messi. Ich habe zuerst einen Aufbau mit den Gattern und den jeweiligen Belegungen gezeichnet.</p>
                    <p>Hier kommt auch das letzte Problem ins Spiel: wie setzen wir den Zähler zurück, wenn wir bis 6 gezählt haben?</p>
                    <p>Das macht der Zähler für uns. Wir müssen nur eine logische 1 an den CLR-Pin anlegen. Doch wann wissen wir, wann wir das machen müssen?</p>
                    <p>Einfach! Die Zahl 6 ist in Binär: 0110. Daher müssen wir nur noch eine weitere Formel bauen, mit der wir prüfen, ob der Wert 0110 anliegt.</p>
                    <p>Diese ist:</p>
                    <p>CLR = ¬D C B ¬A</p>
                    <p>Das stellt einfach die binäre Zahl 0110 dar.</p>
                    <p>Wenn wir diese in eine Schaltung umformen und alles zusammenfassen, kommt dieser Aufbau heraus:</p>
                    <figure class="figure">
                        <img src="../Assets/wuerfelaufbau.png" style="width: 330px" class="figure-img img-fluid rounded" alt="Aufbau des Würfels, um ihn 1:1 so aufzubauen">
                        <figcaption class="figure-caption text-muted bg-info p-1 rounded">Hier muss ich wieder etwas erwähnen: ich habe den Schaltungsaufbau im 3. Bild umgeformt. Das muss man nicht machen, aber man hat viele Negationen (diese Punkte) an den Gattern. Diese Negationen kann man leicht mit einem AND Gatter erzeugen, aber das ist sehr nervig. Also habe ich viele Gatter von ANDs in NANDs umgeformt, um diese Negationen zu umgehen</figcaption>
                    </figure>
                    <p>Diesen Aufbau kann man jetzt auch auf einem Steckbrett aufbauen. Und Voilà:</p>
                    <figure class="figure">
                        <img src="../Assets/wuerfel.jpg" style="width: 450px" class="figure-img img-fluid rounded" alt="Steckbrett mit Würfelaufbau">
                    </figure>
                    <p>Man kann jetzt mit ein paar weiteren Anpassungen würfeln!</p>
                    <figure class="figure">
                        <img src="../Assets/wuerfelfunktionierend.jpg" style="width: 300px" class="figure-img img-fluid rounded" alt="Funktionierender Aufbau des Würfels">
                        <figcaption class="figure-caption text-muted bg-info p-1 rounded">Das hier wäre der Aufbau, den ich für die Abgabe verwendet habe (Prüfungsvorleistung)</figcaption>
                    </figure>
                </div>
            </div>

            <hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">

            <div class="project_website">
                <?php include 'p_website.php'; ?>
            </div>

            <hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">

            <div class="project_chess">
                <?php include 'p_schach.php'; ?>
            </div>

            <hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">

            <div class="project_checkers">
                <?php include 'p_dame.php'; ?>
            </div>

            <hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">

            <div class="project_calculator">
                <?php include 'p_taschenrechner.php'; ?>
            </div>

            <hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">

            <div class="projekt_multimengen">
                <?php include 'p_multimengen.php'; ?>
            </div>
        </div>

        
        <?php include '../html/footer.php'; ?>

    </div>

    <script type="application/x-javascript" src="../Script/ButtonListeners/universalButtons.js"></script>
    <script type="application/x-javascript" src="../Script/ReadSpeed/readSpeed.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
