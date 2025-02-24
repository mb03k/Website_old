addWebsiteLink(document.getElementsByClassName('dataProtection_link'), "datenschutz");
addWebsiteLink(document.getElementsByClassName('faq_link'), "faq");
addWebsiteLink(document.getElementsByClassName('aboutme_link'), "aboutme");
addWebsiteLink(document.getElementsByClassName('readspeed_link'), "readspeed");
addWebsiteLink(document.getElementsByClassName('projects_link'), "projekte");
addWebsiteLink(document.getElementsByClassName('movies_link'), "popcornphilosoph");


function addWebsiteLink(buttons, name) {
    for (let i=0; i<buttons.length; i++) {
        buttons[i].addEventListener('click', function() {
            window.open('https://weristmatthes.de/'+name, '_self');
        }
    );
    }
}

