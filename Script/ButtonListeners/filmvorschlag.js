
addWebsiteLinkNewURL(document.getElementsByClassName('funny_movie_name_link'), "https://www.imdb.com/de/title/tt0102569/");

function addWebsiteLinkNewURL(buttons, name) {
    for (let i=0; i<buttons.length; i++) {
        buttons[i].addEventListener('click', function() {
            window.open(name);
        }
    );
    }
}
