function setupButtons(){
    const userButton = document.querySelector('.l');
    const adminButton = document.querySelector('.r');

    adminButton.addEventListener('click', () => {
        adminButton.style.background = '#181818';
        userButton.style.background = '#3c3c3c';
    });
    userButton.addEventListener('click', () => {
        adminButton.style.background = '#3c3c3c';
        userButton.style.background = '#181818';
    });
}


document.addEventListener('DOMContentLoaded', () => {
    setupButtons();
});
