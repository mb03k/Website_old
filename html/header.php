<?php /*echo('
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
</header>'*/

echo('
<header class="bg-dark py-1 shadow mt-2">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center position-relative">
            <i class="bi bi-house text-light h1 home_link symbol_link mt-2" id="headerHomeButton"></i>

            <div class="position-absolute start-50 translate-middle-x">
                <button class="btn btn-primary portfolio_link">Portfolio</button>
            </div>

            <div class="d-flex align-items-center gap-2">
                <img width="48" height="48" class="chess_link symbol_link" src="https://img.icons8.com/color/144/chess-com.png" alt="chess-com"/>
                <i class="bi bi-github text-light h1 github_link symbol_link mt-2" id="headerGithubButton"></i>
            </div>
        </div>
    </div>
</header>
');
