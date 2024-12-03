function init() {
    createFunctions();
}

function createFunctions() {
    const parent = document.getElementById("movies");
    const movieDetailPanel = document.querySelector(".movie-detail");
    const detailTitle = document.getElementById("movie-detail-title");
    const detailInfo = document.getElementById("movie-detail-info");
    const detailSchedules = document.getElementById("details-schedules");
    const detailDescription = document.getElementById("detail-description");
    const detailVideoSource = document.querySelector(".movie-detail-video video source");
    const detailVideo = document.querySelector(".movie-detail-video video");
    const backButton = movieDetailPanel.querySelector(".bottom-buttons button");

    // Crear elementos basados en los datos
    moviesData.forEach(movie => {
        // Crear contenedor principal de movie-item
        const movieItem = document.createElement('div');
        movieItem.className = 'movie-item';

        // Crear y agregar movie-image
        const movieImage = document.createElement('div');
        movieImage.className = 'movie-image';
        const img = document.createElement('img');
        img.src = movie.image;
        img.alt = movie.title;

        // Agregar evento al hacer clic en la imagen
        img.addEventListener('click', () => {
            // Asignar valores al panel de detalles
            detailTitle.textContent = movie.title;
            detailInfo.textContent = movie.details;
            detailDescription.querySelector(".movie-description").textContent = movie.description;
            detailVideoSource.src = movie.trailer;
            detailVideo.load(); // Recargar el video con el nuevo source

            // Limpiar y generar los horarios
            detailSchedules.innerHTML = '';
            movie.schedules.forEach(schedule => {
                const scheduleItem = document.createElement('a');
                scheduleItem.className = 'schedule-item';
                scheduleItem.href = '?p=ticket';
                scheduleItem.textContent = schedule;

                // Agregar evento para guardar la película y horario seleccionado
                scheduleItem.addEventListener('click', function (event) {
                    event.preventDefault();
                    const selectedMovie = {
                        title: movie.title,
                        details: movie.details,
                        cover: movie.cover,
                        schedule: schedule
                    };
                    localStorage.setItem('selectedMovie', JSON.stringify(selectedMovie));
                    console.log("Película seleccionada guardada en localStorage:", selectedMovie);
                    window.location.href = scheduleItem.href;
                });

                detailSchedules.appendChild(scheduleItem);
            });

            // Mostrar el panel de detalles
            movieDetailPanel.style.display = "flex";
        });

        movieImage.appendChild(img);

        // Crear y agregar movie-info
        const movieInfo = document.createElement('div');
        movieInfo.className = 'movie-info';
        const movieTitle = document.createElement('div');
        movieTitle.className = 'movie-title';
        movieTitle.textContent = movie.title;
        const movieDetails = document.createElement('div');
        movieDetails.className = 'movie-details gray-text';
        movieDetails.textContent = movie.details;
        movieInfo.appendChild(movieTitle);
        movieInfo.appendChild(movieDetails);

        // Crear y agregar movie-schedule
        const movieSchedule = document.createElement('div');
        movieSchedule.className = 'movie-schedule';
        movie.schedules.forEach(schedule => {
            const scheduleItem = document.createElement('a');
            scheduleItem.className = 'schedule-item';
            scheduleItem.href = '?p=ticket';
            scheduleItem.textContent = schedule;

            scheduleItem.addEventListener('click', function (event) {
                event.preventDefault();
                const selectedMovie = {
                    title: movie.title,
                    details: movie.details,
                    cover: movie.cover,
                    schedule: schedule
                };
                localStorage.setItem('selectedMovie', JSON.stringify(selectedMovie));
                console.log("Película seleccionada guardada en localStorage:", selectedMovie);
                window.location.href = scheduleItem.href;
            });

            movieSchedule.appendChild(scheduleItem);
        });

        // Ensamblar movie-item
        movieItem.appendChild(movieImage);
        movieItem.appendChild(movieInfo);
        movieItem.appendChild(movieSchedule);

        // Agregar movie-item al contenedor principal
        parent.appendChild(movieItem);
    });

    // Ocultar el panel de detalles al hacer clic en el botón "Volver a la Cartelera"
    // Ocultar el panel de detalles al hacer clic en el botón "Volver a la Cartelera"
    backButton.addEventListener('click', () => {
        // Pausar y reiniciar el video
        detailVideo.pause();
        detailVideo.currentTime = 0; // Reiniciar el tiempo a 0 (opcional)

        // Ocultar el panel de detalles
        movieDetailPanel.style.display = "none";
    });
}
