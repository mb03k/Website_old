<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header mit Symbolen und Button</title>
    <!-- Bootstrap CSS (über CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Zusätzliche Anpassungen für den Header */
        /*.header {
            display: flex;
            justify-content: space-between; /* Links und rechts ausrichten d-flex justify-content-between*/
            /*align-items: center; /* Vertikal zentrieren d-flex align-items-center*/
            /*padding: 10px 20px;
        }*/
        .header .icons {
            display: flex;
            gap: 20px; /* Abstand zwischen den Symbolen */
        }
        .header .center-button {
            position: absolute;
            left: 50%;
            transform: translateX(-50%); /* Button zentrieren */
        }
    </style>
</head>
<body>

    <!-- Header Bereich mit Bootstrap -->
    <header class="header bg-dark d-flex justify-content-between align-items-center">
        <a href="#" class="navbar-brand">
            <!--<i class="bi bi-house text-light h1 home_link" id="headerHomeButton"></i>-->
            <i class="bi bi-caret-left-square text-light h1"></i>
        </a>
        
        <div class="center-button">
            <button class="btn btn-primary portfolio_link" id="portfolio_button">Portfolio</button>
        </div>
        
        <div class="icons">
            <a href="#" class="chesscom_link mt-1">
                <img width="48" height="48" src="https://img.icons8.com/color/144/chess-com.png" alt="chess-com"/>
            </a>
            <a href="#" class="d-flex justify-content-center align-items-center mt-1">
                <i class="bi bi-github text-light h1 github_link" id="headerGithubButton"></i>
            </a>

        </div>
    </header>
</body>
</html>



<!--

<header class="bg-dark">
    <div class="header-container">
        <div class="logo home_link">
            <a href="#" class="icon">
                <i class="bi bi-house text-light h1 home_link" id="headerHomeButton"></i>
            </a>
        </div>

        <div>
            <button class="button portfolio_link" id="portfolio_button">Portfolio</button>
        </div>

        <nav class="nav-icons">
            <a href="#" class="chesscom_link">
                <img width="48" height="48" src="https://img.icons8.com/color/144/chess-com.png" alt="chess-com"/>
            </a>
            <a href="#" class="icon">
                <i class="bi bi-github text-light h1 github_link" id="headerGithubButton"></i>
            </a>
        </nav>
    </div>
</header>
