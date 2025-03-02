<?php echo('
<div class="rounded p-4" style="background-color: #00003F;">
    <p class="h3 text-center mt-3 mb-3"><b>Bluetooth Audio Control</b></p>

    <p>Was ist das schlimmste beim Motorradfahren?</p>
    <p><del>Einen Unfall zu bauen</del> seine Musik nicht lauter / leiser machen zu können.
    Aber dafür gibt es einen sehr einfachen, definitiv nicht übertriebenen Weg, es zu lösen!</p>
    <p>Und dieser Weg heißt: Blueotooth</p>
    <p>Das Projekt gestalte ich für einen Bekannten von mir. Er kann sein Handy während des Fahrens nicht 
        nutzen, hat aber einen Schalter der bestens geeignet ist. Bei der Recherche für eine Bluetooth
        Verbindung von einem Arduino bzw. einem ESP32-Chip bin ich aber wirklich erschrocken
    </p>
    <p>NIEMAND hat die selbe Frage auch nur jemals im Internet gestellt</p>
    <p>Aber ich habe nicht aufgegeben. Nach glorreichen 4 Stunden Internetsuche bin ich über
        einen Forenbeitrag gestolpert, welcher 6 Upvotes und einen Kommentar hatte. Dieser Nutzer
        hatte das selbe Prinzip wie ich vor, umzusetzen (vermutlich für ein anderes Projekt). Es gab
        aber eine gute und eine schlechte Nachricht. Die schlechte Nachricht: der Fragesteller hat sich
        als <i>einzige</i> Person selbst geantwortet. Die gute Nachricht: er hat eine Lösung gefunden.
        Es gibt nämlich eine GitHub-Bibliothek, die Bluetooth Low Energy nutzt (es gibt Abstufungen von
        Bluetooth). Diese verwaltet alle Funktionen, des (ziemlich komplexen) BLEs. Also habe ich sie direkt
        heruntergeladen und wahrscheinlich eins der größten Glücksgefühle jemals erlebt: es hat 
        funktioniert. Und das war eigentlich schon alles, das ich machen hab müssen. Vieles geht nur noch
        darum ein Gehäuse zu drucken und die Controller anzuschließen. Im Endeffekt ein ganz lustiges
        Projekt. Es ist wirklich cool, zwei Geräte mit dem Handy verbunden zu haben, von welchem eins die Kopfhörer
        sind, und das andere der Controller. Damit die Musik - per einfachen Knopfdruck - lauter und leiser 
        zu machen ist irgendwie ein schon fast falsches Gefühl.
    </p>
    <p>Naja, wie dem auch sei. Ich habe keine wirklichen Bilder (eventuell werde ich noch welche machen), also
        zeige ich ein anderes nettes Gerät:
    </p>
    <figure class="figure d-flex justify-content-center">
        <img src="../Assets/mikrocontroller.jpg" style="width: 450px" class="figure-img img-fluid rounded" alt="verschiedene Mikrocontroller">
    </figure>
    <p>Links: ESP32-Mikrocontroller, Mitte & Rechts: Arduino Nano mit USB C bzw. Mikro USB</p>
    <p>Nicht zu sehen ist jedoch der Held: das Mini D1 ESP-WROOM-32 - Board. Auf diesem läuft
        alles wunderbar zusammen. Diesen erkennt man in der finalen Version des Projektes:
    </p>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 col-12 mb-3 mb-md-0">
                <img src="../Assets/bt_audio_control_2.png" style="width: 400px;" class="img-fluid rounded" alt="Mini D1 ESP-WROOM-32 mit Verkabelung">
            </div>
            <div class="col-md-6 col-12">
                <img src="../Assets/bt_audio_control_hell.jpg" style="width: 400px;" class="img-fluid rounded" alt="Mini D1 ESP-WROOM-32 mit Verkabelung">
            </div>
        </div>
    </div>
</div>
');
?>