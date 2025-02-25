<!DOCTYPE html>
<html lang="de">
<head>
    <?php include '../html/head.php'; ?>
    <title>FAQ</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <meta name="description" content="Eine tendenziell eher sarkastisch gehaltene Seite. Ein paar Fragen beantworten, die man sich unter anderem so stellen könnte">
    <meta name="keywords" content="FAQ, Fragen, Antworten, Matthes, Vorschläge">
</head>

<body class="gradient">
    <div>
        <?php include '../html/header.php' ?>

        <div class="container mt-5">
            <div class="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Was bedeutet FAQ?
                        </button>
                    </h2>
                    
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <b>F</b>requently <b>A</b>sked <b>Q</b>uestions
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Kann ich Verbesserungsvorschläge geben?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <p>Das ist natürlich sehr gerne gesehen!</p>
                            <p>Ich bin etwas komisch wenn es darum geht, persönliche Daten im Internet
                            Freizugeben. Schreib mich doch gerne auf WhatsApp an.
                            Du hast meine Nummer nicht? 
                            Na gut. Ein Tipp: schau doch meine Datenschutzerklärung an. Dort wird sich etwas finden!</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Wieso weristmatthes und nicht ichbinmatthes - wenn die Website für Bewerbungen sein soll?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Du hast mich erwischt. Die Website dient natürlich nicht nur für Bewerbungen.
                                Vielleicht geht es nicht nur mir so, aber weristmatthes.de hört sich doch um weites
                                besser an, als ichbinmatthes.de ; zumindest vom visuellen und auditiven her. Auch wenn
                                ichbinmatthes eine wesentlich aussagekräftigere URL wäre.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            Wer hat die Fragen gestellt?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Viele Menschen aus den verschiedensten Ländern. Nicht ich.</p>
                            <p>Es scheint nicht so, aber <a href="#" class="weristmatthes_link">weristmatthes.de</a>
                                ist eine sehr, sehr, <i>sehr</i> beliebte Website. Zumindest wird sie das sein.</p>
                            <p>*mentales, optimistisches ausatmen* Sie wird es sein!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                        <p>Was ist der Sinn der Website?</p>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Meinen Gedanken einen Raum geben, in dem sie sich ausbreiten können. Nicht nur 
                                Erinnerungen, sondern einen anfassbaren Ort - im Sinne von Ionen die 
                                durch Metall schlittern - erschaffen.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                            <p>Wie teuer ist die Website?</p>
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="h5">Lets talk about <i>money</i>!</p>
                            <p>Die Kosten gliedern sich auf 2 Bereiche auf.</p>

                            <p><b>Faktor A:</b> die URL <br>
                            <span>Sie kostet mich pro Monat 0,05€, was pro Jahr 0,60€ sind.</span></p>

                            <p><b>Faktor B:</b> der Server <br>
                            <span>Ich hoste einen VC 1-1 Server mit der <a href="#" class="strato_link">Strato AG</a>.
                                Dieser besitzt alles was ich brauche. 10GB NVMe Speicher (vollkommen ausreichend
                                für solch eine kleine Website). Er kostet mich 1,00€ pro Monat, was per Quartal
                                abgerechnet wird. Sprich: 3,00€ für 3 Monate, 12,00€ pro Jahr.</span></p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
                            <p>Ich habe alles angeschaut... WER ist jetzt dieser Matthes??!?</p>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p><a href="#" class="aboutme_link">Ich</a>😎</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include '../html/footer.php'; ?>

    </div>

    <script type="application/x-javascript" src="../Script/ButtonListeners/headerfooter.js"></script>
    <script type="application/x-javascript" src="../Script/ButtonListeners/faq.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>