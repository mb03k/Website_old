
addWebsiteLink(document.getElementsByClassName('logout_link'), "sicherheit/logout.php");
addWebsiteLinkNewURL(document.getElementsByClassName('projects_link'), "https://weristmatthes.de/projekte");

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


