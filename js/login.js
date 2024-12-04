document.addEventListener('DOMContentLoaded', () => {
    setupButtons();
});


function setupButtons(){
    const userButton = document.querySelector('.l');
    const adminButton = document.querySelector('.r');

    adminButton.addEventListener('click', () => {
        goWhite();
    });
    userButton.addEventListener('click', () => {
        goBlack();
    });
}

function goWhite(){
    const userButton = document.querySelector('.l');
    const adminButton = document.querySelector('.r');

    adminButton.style.background = '#181818';
    userButton.style.background = 'var(--EcEcEc)';

    var r = document.querySelector(':root');
    r.style.setProperty('--solidPanel', '#fff');

    document.querySelector('.tentacle-left').style.filter = "invert(1)";
    document.querySelector('.tentacle-right').style.filter = "invert(1)";
    document.querySelector('.left-container').style.filter = "invert(1)";

    document.querySelector('.content-gradient').style.background = "#00000000";
    document.querySelector('body').style.background = "#e6e6e6";
    document.querySelector('#login-panel').style.color = "black";
    document.querySelector('#login-btn').style.background = "#ededed";
    document.querySelector('#login-btn').style.color = "black";

    document.querySelector('.l').style.background = "#dbdbdb";
    document.querySelector('.r').style.background = "rgb(185 185 185)";
    document.querySelector('.type-button').style.background = "#dbdbdb";
    document.querySelector('#header-logo .highlight').style.color = "black";

    document.querySelector('.tei').style.color = "black";
    document.querySelector('.tpi').style.color = "black";


    r.style.setProperty('--hoverBorder', '#000');

}

function goBlack() {
    const userButton = document.querySelector('.l');
    const adminButton = document.querySelector('.r');

    adminButton.style.background = '';
    userButton.style.background = '';

    var r = document.querySelector(':root');
    r.style.setProperty('--solidPanel', '#1b1b1b');

    document.querySelector('.tentacle-left').style.filter = "";
    document.querySelector('.tentacle-right').style.filter = "";
    document.querySelector('.left-container').style.filter = "";


    document.querySelector('.content-gradient').style.background = "";
    document.querySelector('body').style.background = "";
    document.querySelector('#login-panel').style.color = "";
    document.querySelector('#login-btn').style.background = "";
    document.querySelector('#login-btn').style.color = "";

    document.querySelector('.l').style.background = "";
    document.querySelector('.r').style.background = "";
    document.querySelector('.type-button').style.background = "";
    
    document.querySelector('.tei').style.color = "";
    document.querySelector('.tpi').style.color = "";
    document.querySelector('#header-logo .highlight').style.color = "";

    r.style.setProperty('--hoverBorder', '#FFFFFF');

}
