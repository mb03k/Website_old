
addWebsiteLinkNewURL(document.getElementsByClassName('spektrum_link'), "https://www.spektrum.de/lexikon/mathematik/multimenge/7206");
addWebsiteLinkNewURL(document.getElementsByClassName('github_chess_link'), "https://github.com/mb03k/Schach");
addWebsiteLinkNewURL(document.getElementsByClassName('ionos_link'), "https://www.ionos.de/digitalguide/hosting/cms/cms-vergleich/");
addWebsiteLinkNewURL(document.getElementsByClassName('wetechs_link'), "https://w3techs.com/technologies/overview/content_management");

function addWebsiteLinkNewURL(buttons, name) {
    for (let i=0; i<buttons.length; i++) {
        buttons[i].addEventListener('click', function() {
            window.open(name);
        }
    );
    }
}