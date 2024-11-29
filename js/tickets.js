function init() {
    loadTime();
}

function loadTime(){
    // Obtener los parámetros de la URL
    const urlParams = new URLSearchParams(window.location.search);

    // Extraer el horario y título de la película
    const selectedTime = urlParams.get('time');
    const selectedTitle = urlParams.get('title');

    if (selectedTime && selectedTitle) {
        // Mostrar la información en el HTML
        const timeDisplay = document.getElementById('selected-time');
        const titleDisplay = document.getElementById('selected-title');
        timeDisplay.textContent = `${selectedTime}`;
        titleDisplay.textContent = `${decodeURIComponent(selectedTitle)}`;
    }
}