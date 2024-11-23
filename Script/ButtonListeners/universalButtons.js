addWebsiteLink(document.getElementsByClassName('home_link'), "");
addWebsiteLink(document.getElementsByClassName('portfolio_link'), "portfolio");
addWebsiteLink(document.getElementsByClassName('dataProtection_link'), "datenschutz");
addWebsiteLink(document.getElementsByClassName('faq_link'), "faq");
addWebsiteLink(document.getElementsByClassName('aboutme_link'), "aboutme");
addWebsiteLink(document.getElementsByClassName('readspeed_link'), "readspeed");
addWebsiteLink(document.getElementsByClassName('projects_link'), "projekte");

addLocalWebsiteLink(document.getElementsByClassName('movies_link'), "popcornphilosoph");
addWebsiteLinkNewURL(document.getElementsByClassName('github_link'), "https://www.github.com/mb03k");


function addWebsiteLink(buttons, name) {
    for (let i=0; i<buttons.length; i++) {
        buttons[i].addEventListener('click', function() {
            window.open('https://weristmatthes.de/'+name, '_self');
        }
    );
    }
}

function addLocalWebsiteLink(buttons, name) {
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
