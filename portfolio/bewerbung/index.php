<?php 
session_start();

if (!isset($_SESSION['ring']) || !$_SESSION['ring']<=1) {
    header("Location: https://weristmatthes.de/portfolio/");
}

include '../sicherheit/sessionTimeoutCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../../html/head.php'; ?>
    <title>Portfolio</title>
</head>

<body class="gradient">
    <div>
        <?php include '../../html/header.php';?>
        
        <div class="container">
            <p class="h2 text-center mt-4 mb-4">
                Sehr !!!NAME!!! -> durch $_SESSION['id'] holen,

                abhängig davon, wie viel Sie bisher von meiner Website gesehen haben, wird Ihnen bestimmt
                aufgefallen sein, dass ich mich teils von einer sehr sarkastischen Seite zeige.
            </p>
            <p>Dies ist jedoch unvorteilhaft, sobald man sich versucht bei einem Unternehmen zu bewerben.</p>
            <p>Deshalb möchte ich Ihnen diese Seite von mir zeigen. Die Seite, die auch ernst sein kann. Die, die
                auch in einer professionellen Art und Weise mit seinen Mitmenschen umgehen kann.
            </p>
            <p>Ich werde Ihnen im weiteren etwas mehr zu meiner Person erläutern und versuchen, Sie von mir zu überzeugen.
            </p>
            <p class="mt-5">Mein Name ist Matthes Böttcher, ich wurde am 30.09.2003 in Weiden i.d.OPf geboren und
                habe in der Zeit der Mittelstufe (Sekundarstufe I) durchweg eine Mittelschule (bzw. Hauptschule)
                besucht. 
            </p>
            <p>Diese habe ich in der 9. Klasse mit einem qualifizierenden Mittelschulabschluss abgeschlossen
                und zwei Jahre später mit der mittleren Reife. 
            </p>
            <p class="mb-0">Im Anschluss darauf habe ich eine Ausbildung als Pflegefachmann gestartet, welche ich jedoch
                knappe zwei Monate später abbrach.
            </p>
            <p>Danach wurde ich von der ISA Industrieelektronik Weiden um ein Langzeitpraktikum als Fachinformatiker 
                in Anwendungsentwicklung akzeptiert, in welchem ich meine seit Kindesalter beständige Faszination über
                Technologie, verfolgen und darüber lernen konnte. 
            </p>
            <p>Jedoch habe ich bei diesem Unternehmen keine Ausbildung angefangen, da ich mich entschloss mein Fachabitur
                nachzuholen und mir die konkretere berufliche Zukunft vorerst freizuhalten.
            </p>
            <p>Ich besuchte die FOS Weiden für zwei Jahre, nach denen ich mein Fachabitur als Klassenbester mit einem
                Schnitt von 2,2 abschloss. 
            </p>
            <p>Während dieser Zeit kam auch allmählich meine Faszination für die Informatik zurück, weshalb ich mich
                im Anschluss um zwei Studienplätze für Informatik bewarb. An der OTH Regensburg, als auch an der HTWK
                Leipzig. Zwar bekam ich bei beiden Fachhochschulen eine Zusage, jedoch überwog für mich die HTWK,
                da sie einen sehr hohen Bezug zur technischen Informatik bietet. 
            </p>
            <p class="mt-5">Ich würde mich vermutlich als jemanden beschreiben, den man trifft und sich denkt: "Wow, ich bin
                froh, dass ich nicht so planlos im Leben stehe".
            </p> 
            <p>
                Jedoch denke ich, dass das nur die Sicht auf außenstehende Personen ist. Ich bin ein sehr 
                zielstrebiger Mensch, auch wenn viele Personen etwas anderes sehen - vor Allem durch meinen Sarkasmus und die Weise,
                wie ich erscheine mit Aufgaben umzugehen.
                Wenn ich mir ein Ziel setze, verfolge ich dieses, bis ich es erreicht habe.
            </p>
            <p>
                Sollten Sie mir die Chance geben, mich in Ihrem Unternehmen zu beweisen, nehme ich diese gerne an und
                überzeuge Sie von mir!
            </p>
            <p>Nun werde ich etwas auf meine Projekte eingehen, welche Sie im detailliertesten unter 
                 erreichen.</p>
            <p>Ich versuche ein breites Spektrum der Informatik abzudecken, um mir das größtmöglichste und allumfassendste 
                Wissen über die Funktionsweisen der verschiedensten Projekte zu geben. 
            </p>
            <p>Ich werde auf dieser Seite jedoch nicht auf meine Projekte eingehen, da es mir überraschend schwer fällt, einen allumfassenden
                Text über diese mit einem Fazit zu schreiben. Allerdings können Sie meine Projekte sehr gerne unter <a href="https://weristmatthes.de/projekte/">
                diesem Link</a> ansehen.
            </p>
            <p>Bei Fragen zu diesen oder über mich stehe ich Ihnen selbstverständlich zur Verfügung!</p>
            <p></p>
            <p></p>
            <p>Hinweis: da ich versuche Sie persönlich Anzusprechen, habe ich diese Seite unter Passwortschutz gestellt, um nicht Ihre
                Daten ohne Einverständnis zu veröffentlichen. Des weiteren habe ich via PHP eine Session erstellt, durch die diese Seite
                nicht per einfachen Eingabe der URL erreichbar ist.
            </p>
            <p>Hier können Sie sich ausloggen:</p>

            <form action="../logout.php" type="POST">
                <input type="submit" value="Ausloggen"></input>
            </form>

        </div>

        <?php include '../../html/footer.php'; ?>
    </div>

    <script type="application/x-javascript" src="../Script/ButtonListeners/universalButtons.js"></script>
    <script type="application/x-javascript" src="../Script/ReadSpeed/readSpeed.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
