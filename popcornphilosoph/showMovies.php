<?php 
    $data_path = [
        "../Assets/json/comedy.json",
        "../Assets/json/action.json",
        "../Assets/json/history.json",
        "../Assets/json/thriller.json",
        "../Assets/json/horror.json",
        "../Assets/json/romantic.json",
        "../Assets/json/just_watch.json",
        "../Assets/json/books.json"
    ];

    $movie_genre = [
        "😃 Comedy",
        "😱 Action",
        "🏛️ Geschichte",
        "🔪 Thriller",
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
        "bg-dark",
        "bg-danger",
        "bg-info",
        "bg-light"
    ];

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
            printMovies($movies, $bg_color[$i]);
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
            if ($ending_div_counter == 4) {
                echo('</div>'); // Schließe die Zeile
                $ending_div_counter = 0;
            }
    
            if ($div_counter % 4 == 0) {
                echo('<div class="row justify-content-center">'); // Öffne eine neue Zeile
            }
            echo('
                <div class="movie_class rounded-3 col-6 col-md-3 mt-3 '.$bg_color.'" style="--bs-bg-opacity: '.$movie["bg_opacity"].';">
                    <img src="'.$movie["path"].'" class="img-fluid mt-2" alt="Responsive image">
                    <div class="movie_title">'.$movie["name"].'</div>
                    <div class="movie_stars">'.$movie["rating"].'</div>
                </div>
            ');
    
            $div_counter++;
            $ending_div_counter++;
        }

        if ($div_counter % 4 != 4) {
            echo('</div>');
        }
    }      
?>
