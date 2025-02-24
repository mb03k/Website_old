
// Header
addWebsiteLink(document.getElementsByClassName('home_link'), "");
addWebsiteLink(document.getElementsByClassName('portfolio_link'), "portfolio");
addWebsiteLinkNewURL(document.getElementsByClassName('github_link'), "https://www.github.com/mb03k");
addWebsiteLinkNewURL(document.getElementsByClassName('chess_link'), "https://www.chess.com/member/mb03k");

// Footer
addWebsiteLink(document.getElementsByClassName('dataProtection_link'), "datenschutz");
addWebsiteLink(document.getElementsByClassName('faq_link'), "faq");
addWebsiteLink(document.getElementsByClassName('memes_link'), "");


function addWebsiteLink(buttons, name) {
    for (let i=0; i<buttons.length; i++) {
        buttons[i].addEventListener('click', function() {
            window.open('https://weristmatthes.de/'+name, '_self');
        }
    );
    }
}

function addWebsiteLinkNewURL(buttons, name) {
    for (let i=0; i<buttons.length; i++) {
        buttons[i].addEventListener('click', function() {
            window.open(name);
        }
    );
    }
}
