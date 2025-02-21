<?php
session_start();

include '../sicherheit/addMovieAccessCheck.php';
include '../sicherheit/sessionTimeoutCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film hinzufügen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container mt-4">
    <form action="uploadMovie.php" method="POST" enctype="multipart/form-data">
        <div class="form-group mt-2">
            <label for="moviename">Titel</label>
            <input type="text" name="titel" class="form-control" id="moviename" placeholder="21 Jump Street" required>
        </div>

        <div class="form-group mt-2">
            <label class="my-1" for="inlineFormCustomSelectPref">Genre</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="genre">
                <option value="1">Action</option>
                <option value="2">Comedy</option>
                <option value="3">Geschichte</option>
                <option value="4">Horror</option>
                <option value="5">Just Watch</option>
                <option value="6">Romantik</option>
                <option value="7">Thriller</option>
                <option value="8">Bücher</option>
            </select>
        </div>

        <div class="form-group mt-2">
            <label for="movieImagePath">Pfad des Bildes</label>
            <input type="text" name="path"class="form-control" id="movieImagePath" placeholder="21_jump_street.jpg" required>
        </div>

        <div class="form-group mt-2">
            <label for="movieRating">Bewertung</label>
            <input type="number" name="rating" class="form-control" id="movieRating" placeholder="7" required>
        </div>

        <div class="form-group mt-2">
            <label for="movieDescription">Beschreibung</label>
            <input type="text" name="description" class="form-control" id="movieDescription" placeholder="Toller Film in der Tat ja ja so ist das">
        </div>

        <div class="form-group mt-2">
            <label for="movieWatchDate">Zum ersten mal angeschaut am...</label>
            <input type="date" name="date"class="form-control" id="movieWatchDate">
        </div>

        <div class="mt-4">
            <label for="imageToUpload">Bild des Films</label>
            <br>
            <input type="file" name="fileToUpload" id="imageToUpload" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Sign in</button>
    </form>

    <div class="mt-3 bg-success">
        <p class="text-light">Erfolgreich hochgeladen!</p>
    </div>

</div>
</body>
</html>