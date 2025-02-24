
addWebsiteLink(document.getElementsByClassName('projects_link'), "projekte");
addWebsiteLink(document.getElementsByClassName('aboutme_link'), "aboutme");
addWebsiteLink(document.getElementsByClassName('movies_link'), "popcornphilosoph");
addWebsiteLink(document.getElementsByClassName('readspeed_link'), "readspeed");
addWebsiteLink(document.getElementsByClassName('faq_link'), "faq");
addWebsiteLink(document.getElementsByClassName('movieproposal_link'), "filmvorschlag");

addWebsiteLinkNewURL(document.getElementsByClassName('bootstrap_link'), "https://getbootstrap.com/");
addWebsiteLinkNewURL(document.getElementsByClassName('tailwind_link'), "https://tailwindcss.com/");



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