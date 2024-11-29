function init() {
    createFunctions();
}

function createFunctions() {
    const parent = document.getElementById("movies");

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

            // Agregar event listener para capturar la película y el horario seleccionado
            scheduleItem.addEventListener('click', function (event) {
                event.preventDefault(); // Evita redirección automática
                
                const selectedMovie = {
                    title: movie.title,
                    details: movie.details,
                    schedule: schedule
                };

                // Guardar datos en localStorage
                localStorage.setItem('selectedMovie', JSON.stringify(selectedMovie));
                console.log("Película seleccionada guardada en localStorage:", selectedMovie);

                // Redirigir manualmente a la sección de tickets
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
}
