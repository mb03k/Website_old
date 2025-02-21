<?php echo('
<div class="rounded p-4" style="background-color: #00003F;">
    <p class="h3 text-center mt-3 mb-3"><b>Drone</b></p>
    <p>Das wird wahrscheinlich das mit Abstand komplexeste Projekt meiner bisherigen,
        zugegebenermaßen kleineren Projekte. Und zwar eine Drone zu bauen!
        Das werde ich so gut es geht in den aktuellen Semesterferien versuchen - 3. FS
    </p>
    <p>Bisher kann ich leider noch nicht viel dazu sagen. Ich befinde mich aktuell
        noch in der Phase die Anforderungsspezifikationen festzustellen. Mein Plan sieht aktuell
        so aus: ich brauche viel Hardware. Um genau zu sein:
    </p>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Motor Control Panel - L298N
            <span class="badge bg-primary rounded-pill">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Step Down Converter
            <span class="badge bg-primary rounded-pill">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            RC Bürstenlose Motoren - DX2205 2300KV
            <span class="badge bg-primary rounded-pill">4</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Arduino Nano
            <span class="badge bg-primary rounded-pill">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            3S Batterie - +11 V
            <span class="badge bg-primary rounded-pill">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Abstandsmesser
            <span class="badge bg-primary rounded-pill">4</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Bewegungssensor
            <span class="badge bg-primary rounded-pill">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Kamera
            <span class="badge bg-primary rounded-pill">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Steuerung
            <span class="badge bg-primary rounded-pill">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Rahmen
            <span class="badge bg-primary rounded-pill">1</span>
        </li>
    </ul>
    <p class="mt-4 mb-0">Wobei die Kamera, der Bewegungssensor und der Abstandsmesser Ideen für zukünftige
        Projekte sind
    </p>
    <p>Nämlich: die Drone so auszubauen, dass sie autonom fliegen und einen Raum
        ausmessen kann. Sprich eine 3D-Welt mit Daten ermessen, die sie per Entfernungsmessungen
        erhält. Eine weitere Idee wäre daraus eine \'simple\' FPV-Drone zu bauen. Viele Ideen die
        man umsetzen könnte!
    </p>
    <p>Mir macht aktuell vermutlich das Gehäuse die größten Kopfschmerzen. Es entstehen durch
        die Motoren Mikro-Vibrationen, die einen Bewegungssensor sehr durcheinander bringen könnten.
        Bzw. ist die Frage generell, ob ein 3D-Gehäuse eine Option wäre
    </p>
    <p>Zum Glück haben wir einen 3D-Drucker in unserer WG:</p>
    <div class="d-flex justify-content-center">
        <img src="../Assets/3D_Drucker.jpg" style="width: 300px" class="figure-img img-fluid rounded" alt="3D Drucker">
    </div>
</div>
')

?>