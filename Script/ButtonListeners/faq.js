
addWebsiteLink(document.getElementsByClassName('aboutme_link'), "aboutme");
addWebsiteLink(document.getElementsByClassName('weristmatthes_link'), "");
addWebsiteLinkNewURL(document.getElementsByClassName('strato_link'), "https://www.strato.de/");

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


