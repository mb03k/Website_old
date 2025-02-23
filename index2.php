<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>


    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Navbar</a>

        <div class="bg-dark">
            <input class="" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>
    </nav>

    <br>
    <br>
    <br>
    <br>
    <br>

    <nav class="navbar navbar-dark bg-dark">
        <div class="logo home_link">
            <a href="#" class="icon">
                <i class="bi bi-house text-light h1 home_link" id="headerHomeButton"></i>
            </a>
        </div>    
    </nav>


    <br>
    <br>
    <br>
    <br>

    <header class="bg-dark py-3 shadow-sm">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center position-relative">
                <i class="bi bi-house text-light h1 home_link mt-2" id="headerHomeButton"></i>

                <div class="position-absolute start-50 translate-middle-x">
                    <button class="btn btn-primary">Portfolio</button>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <img width="48" height="48" src="https://img.icons8.com/color/144/chess-com.png" alt="chess-com"/>
                    <i class="bi bi-github text-light h1 github_link mt-2" id="headerGithubButton"></i>
                </div>
            </div>
        </div>
    </header>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
