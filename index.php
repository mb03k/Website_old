<!DOCTYPE html>
<html lang="de">
<head>
    <?php include 'html/head.php'; ?>
    <title>Start</title>

    <meta name="description" content="Wer ist Matthes? Sich kurz oder lang in meiner Website verlieren und den Inhalt bewundern. Projekte, Filme, etwas über mich ansehen oder auch einen Vorschlag für einen Film geben!">
    <meta name="keywords" content="Matthes, Projekte, Filme, FAQ, Volunteering">

    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Dots:wght@400..700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Londrina+Sketch&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Style/homestyle.css">
    <link rel="stylesheet" href="Style/colorpalette.css">
</head>

<body class="gradient">
    <div>
        <?php 
            include 'html/header.php'; 
            include 'projekte/Service.php';

            $pID_1 = 6;
            $pID_2 = 1;

            $projektname = 1;
            $projektbeschreibung = 2;
            $projektbild = 3;
        ?>

        <a href="addmovie/">addmovie</a>
        <a href="addmovie/processing.php">addmovie/processing.php</a>
        <a href="portfolio/">portfolio</a>
        <a href="portfolio/welcome.php">portfolio/welcome</a>
        <a href="portfolio/bewerbung/">portfolio/bewerbung</a>
        <a href="sicherheit/logout.php">logout</a>

        <div class="container">
            <div class="mt-4 p-1 border text-white text-center" style="background-color: rgba(255, 0, 0, 0.3);">
                <p class="h2">weristmatthes.de v2</p>
                <p class="mb-0">Endlich! Endlich habe ich Zeit gefunden um hier weiterzumachen!</p>
                <p>Schau dich gern um. Ich habe nahezu jede Seite zumindest ein bisschen überarbeitet!</p>
            </div>  
            
            <div class="row bg-blue text-center text-white">
                <div class="" >
                    <p class="line-1 anim-typewriter yoSoyMatthes mt-4" style="line-height:1.1em; font-weight: bold; font-size: 3.5em; margin: 0;">
                        Hallo, ich bin Matthes👋
                    </p>
                </div>
                <div>
                    <p>
                        Schlaue Menschen sagen, man sollte bei Webdesign zuerst für Handys
                        Designen, und danach für PCs. Ich sage: we don't do that here
                        <img src="Assets/we_dont_do_that_here.jpg" class="rounded" style="width:50px;">
                    </p>
                </div>
            </div>

            <br>

            <div class="row text-dark text-center d-flex align-items-center" style="height:100%;">
                <div class="col-md m-2 projectsContainer projects_link">
                    <div class="col p-2">
                        <div class="rowOneCurrentProjects">
                            <h1>Aktuelle Projekte</h1>
                        </div>
                        <div class="container row projectOne m-2" id="projectChess">
                            <div class="col">
                                <img class="img-fluid" src="Assets/<?php echo $projekte[$pID_1][$projektbild]; ?>">
                            </div>
        
                            <div class="col">
                                <span>
                                    <h5><?php echo $projekte[$pID_1][$projektname]; ?>
                                    </h5>
                                    <p><?php echo $projekte[$pID_1][$projektbeschreibung]; ?></p>
                                </span>
                            </div>
                        </div>

                        <hr>

                        <div class="container row projectTwo m-2" id="projectCheckers">
                            <div class="col">
                                <img class="img-fluid" src="Assets/<?php echo $projekte[$pID_2][$projektbild]; ?>">
                            </div>
        
                            <div class="col">
                                <span>
                                    <h5><?php echo $projekte[$pID_2][$projektname]; ?>
                                    </h5>
                                    <p><?php echo $projekte[$pID_2][$projektbeschreibung]; ?></p>
                                </span>
                            </div>
                        </div>
                    </div>   
                </div>
                
                <div class="col-md m-2 projectsContainer" id="educationalPath">
                    <div class="col rowTwo p-2">
                        <div>
                            <span class="h1">
                                Warum hier?
                            </span>
                        </div>
                        <p class="p-4">
                            Studieren ist anstrengend. Auch wenn viele Quellen anderes behaupten.
                            Bei mir hat dafür endlich die Vorlesungsfreie Zeit angefangen.
                            Mehr Zeit mich hiermit und 1000 anderen Sachen auseinanderzusetzen!
                        </p>
                        
                    </div>
                </div>

                <div class="col-md m-2 projectsContainer aboutme_link">
                    <div class="col rowThree p-2">
                        <h1>Über mich</h1>
                        Ich könnte hier viel schreiben. Ich bin ein Entrepreneur. Ich bin Gott. Ich bin alles.
                        Aber nichts würde passen. Lieber leite ich dich auf den Feed weiter, auf dem ich versuche
                        mich selbst zu verstehen. Eine Art <strike>Jakobsweg</strike> Matthesweg
                    </div>
                </div>
            </div>
        </div>


        <div class="container text-center">
            <p class="m-4">
                <span>
                    Ich habe unglaublich viele Ideen darüber, was ich hier alles 'veröffentlichen' will. 
                    Ich habe mich aber etwas zu sehr reingestürzt und den ganzen Aufwand unterschätzt,
                    wie schwer es sein kann eine Seite überhaupt mit Text zu füllen. Deshalb lasse ich es
                    klein angehen. Wie wäre es denn in der Zwischenzeit mit einer - zugegebenermaßen - 
                    sehr schönen Auswahl an <a href="https://weristmatthes.de/popcornphilosoph">Filmen</a>?
                </span>
            </p>

            
            <p>
                <span>
                    Oder schau dich sonst um. Hier hast du eine Liste aller aktuell verfügbaren Seiten
                </span>
            </p>
            <div class="mb-4" style="display: flex; justify-content: center;">
                <div class="list-group w-75">
                    <button type="button" class="list-group-item list-group-item-action available_sites aboutme_link" id="aboutme_link">Über mich</button>
                    <button type="button" class="list-group-item list-group-item-action available_sites movies_link" id="popcornphilosoph_link">Filme / Bücher</button>
                    <button type="button" class="list-group-item list-group-item-action available_sites readspeed_link" id="readspeed_link">Lesegeschwindigkeit</button>
                    <button type="button" class="list-group-item list-group-item-action available_sites projects_link" id="projekte_link">Projekte</button>
                    <button type="button" class="list-group-item list-group-item-action available_sites faq_link" id="faq_link">FAQ</button>
                </div>
            </div>
        </div>

        <div class="container text-center mt-4">
            <div class="row justify-content-center">
                <div class="text-center w-75 mb-2">
                    <p class="m-0">Abschließend ein großes Dankeschön an die zwei wundervollen 
                        CSS Frameworks, durch die selbst ich eine einigermaßen okay-aussehende 
                        Website erstellen konnte:</p>
                </div>

                <p class="m-1 bootswindfont">
                    <span class="p-1 m-2 rounded bootswindhover" id="bootstrap_button">
                        Bootstrap
                        <img src="Assets/bootstrap.png" class="mb-1" style="width:35px;">
                    </span>

                    <span class="p-1 m-2 rounded bootswindhover" id="tailwind_button">
                        Tailwind
                        <img src="Assets/tailwind.png" class="img-fluid pb-1" style="width: 2em; height: 2em;">
                    </span>
                </p>
            </div>
        </div>


        <div class="container " style="margin-top: 100px;">
            <div>
                <p class="h2 bg-purple-700 p-2 mb-0 mt-4 rounded">Volunteering!</p>
                <p class="bg-purple-600 p-2 mb-0 rounded">
                    Ich schaue gerne Filme <a class="bg-purple-300 p-1 rounded movies_link" href="https://weristmatthes.de/popcornphilosoph"
                    >*hust*</a>
                </p>
                <p class="bg-purple-500 p-2 mb-0 rounded">
                    Möchtest du mir eine Empfehlung geben?
                </p>
                <p class="bg-purple p-2 mb-0 rounded">
                    Das ist nämlich gern gesehen!
                </p>
                <p class="bg-purple-400 p-2 mb-0 rounded">
                    Einfach auf diesen Button klicken:
                    <input class="btn btn-light" type="submit" value="yes yes yes" id="movievolunteer">
                </p>
                
                <p class=" mb-0 mt-4"><small>
                &#8321 über dich werden keine Daten gespeichert. Nur deine eigenen Eingaben!
                </small></p>

                <p class=" mb-0"><small>
                &#8322 <u>NIEMAND</u> außer mir kann deine eingegebenen Daten sehen
                </small></p>

                <p class=""><small>
                    &#8323 Wie garantiere ich das? Die JSON Datei (keine Datenbank), in der die Daten gespeichert sind,
                    wird im privaten Bereich des Apache-Webservers gespeichert. Niemand außerhalb des Servers (wie du)
                    hast Zugriff auf diese Daten. Das speichern regelt PHP (Backend-Programmiersprache), auf welche
                    Nutzer ebenso keinen Zugriff haben
                </small></p>
            </div>
        </div>

        <?php include 'html/footer.php'; ?>
    </div>

    <script type="application/x-javascript" src="Script/ButtonListeners/universalButtons.js"></script>
    <script type="application/x-javascript" src="Script/ButtonListeners/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
