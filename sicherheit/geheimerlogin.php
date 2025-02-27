<?php
    session_start();

    if (isset($_SESSION['ring']) && $_SESSION['ring'] === 0) {
        header("Location: https://weristmatthes.de/#schonEingeloggt");
    }
?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitte nicht hacken!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="https://weristmatthes.de/Assets/M.png">
</head>
<body>
    <div class="d-flex justify-content-center container mt-5">
        <form action="matthesLogin.php" method="POST">
            <input type="text" placeholder="xXWeristmatthes.deXx" name="username"></input>
            <input type="password" placeholder="Passwörtchen" name="password"></input>
            <input type="submit" value="Anmelden"></input>
        </form>
    </div>
</body>
</html>