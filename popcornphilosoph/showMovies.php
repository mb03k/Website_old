<?php
    $data_path = [
        "../Assets/json/comedy.json",
        "../Assets/json/action.json",
        "../Assets/json/history.json",
        "../Assets/json/thriller.json",
        "../Assets/json/drama.json",
        "../Assets/json/horror.json",
        "../Assets/json/romantic.json",
        "../Assets/json/just_watch.json"
        //"../Assets/json/books.json" -> temporär rausgenommen um gesamte Datei 
        // erneut aufzubauen (sieht sehr ... aus)
    ];

    $movie_genre = [
        "😃 Comedy",
        "😱 Action",
        "🏛️ Geschichte",
        "🔪 Thriller",
        "🎭 Drama",
        "👻 Horror",
        "😍 Romantik",
        "🤯 Einfach schauen",
        "📚 Bücher"
    ];

    $bg_color = [
        "bg-success",
        "bg-warning",
        "bg-light",
        "bg-danger",
        "bg-primary",
        "bg-dark",
        "bg-danger",
        "bg-info",
        "bg-light"
    ];

    $colArray = [0.8, 0.6, 0.4, 0.2, 0.1, 0.2, 0.4, 0.6];
    $colCounter = 0;

    // ein Block an Film-Genres
    echo('<hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">');
    for ($i=0; $i<count($data_path); $i++) {
        echo ('<div class="text-center">
                    <div>
                        <span class="genre_title p-1 rounded-2" style="font-size:3em; background-color:#fd7e14">'.$movie_genre[$i].'</span>
                    </div>
        ');

        $jsonDatei = $data_path[$i];
        $jsonInhalt = file_get_contents($jsonDatei);

        $movies = json_decode($jsonInhalt, true); 
        
        if (json_last_error() === JSON_ERROR_NONE) {
            global $colCounter;
            $colCounter = 0;
            printMovies($movies, $bg_color[$i]); // alle Filme der JSON Datei ausgeben
            echo('<hr class="m-4" style="border-width: 0.5vh; width: 90%; margin:auto;">');
        } else {
            echo "Fehler beim öffnen der JSON-Datei: " . json_last_error_msg();
        }
        echo("</div>");
    }

    function printMovies($movies, $bg_color) {
        $div_counter = 0;
        $ending_div_counter = 0;
    
        foreach ($movies as $movie) {
            global $colCounter;
            if ($ending_div_counter == 4) {
                echo('</div>'); // Schließe die Zeile
                $ending_div_counter = 0;
            }
    
            if ($div_counter % 4 == 0) {
                echo('<div class="row justify-content-center">');
            }
            echo('
                <div class="movie_class rounded-3 col-6 col-md-3 mt-3 '.$bg_color.'" style="--bs-bg-opacity: '.getHelligkeit().';">
                    <img src="../Assets/movies/'.$movie["path"].'" class="img-fluid mt-2" alt="Responsive image">
                    <div class="movie_title">'.$movie["name"].'</div>
                    <div class="movie_stars">'.$movie["rating"].'/10</div>
                </div>
            ');
    
            $div_counter++;
            $ending_div_counter++;
            $colCounter++;
        }

        if ($div_counter % 4 != 4) {
            echo('</div>');
        }
    }    
    
    function getHelligkeit() {
        global $colCounter, $colArray;
        if ($colCounter == count($colArray)) {
            $colCounter = 0;
        }
        return $colArray[$colCounter];
    }
?>
