    <link rel="stylesheet" href="css/billboard.css">
    <script src="js/billboard.js"></script>
    <script src="data/conf.js"></script>
    <?php
        $moviesData = json_decode(file_get_contents('data/movies.json'), true);
        $selectedMovie = null;

        if (isset($_GET['movie'])) {
            foreach ($moviesData as $movie) {
                if ($movie['title'] === $_GET['movie']) {
                    $selectedMovie = $movie;
                    break;
                }
            }
        }
    ?>
    <main>
        <div class="content-gradient"></div>
        <div class="content" id="content-panel" data-name="<?php echo $page; ?>">
            <div class="billboard-container">
                <h2 id="billboard-title">Ver Cartelera</h2>
                <div class="floating-container">
                    Selecciona tu cine
                    <select class="floating-selector">
                        <option value="CICUE">Cine Cuervos</option>
                        <option value="TONAL">Cine Tonalá</option>
                    </select>
                    <div class="floating-text2 gray-text">¿No encuentras tu cine?</div>
                </div>
                <div class="floating-container">
                    Selecciona el día
                    <input type="date" min="2024-12-04" max="2024-12-18" class="floating-selector">
                    </input>
                </div>
            </div>
            <div class="movie-billboard-container" id="movies">

            <div class="movie-detail" style="display: <?= $selectedMovie ? 'flex' : 'none' ?>;">
                <div class="detail-top">
                    <div class="movie-trailer">
                        <div class="movie-detail-video">
                            <div id="movie-detail-title" class="movie-detail-name"><?= htmlspecialchars($selectedMovie['title'] ?? '') ?> <div>B15</div></div>
                            <video alt="<?= htmlspecialchars($selectedMovie['title'] ?? '') ?>" controls>
                                <source src="<?= htmlspecialchars($selectedMovie['trailer'] ?? '') ?>" type="video/mp4">
                                Este navegador no soporta videos.
                            </video>
                        </div>
                    </div>
                    <div class="movie-detail-schedules">
                        <div class="schedule-header">
                            Horarios <div id="movie-detail-info"><?= htmlspecialchars($selectedMovie['details'] ?? '') ?></div>
                        </div>
                        <div id="details-schedules" class="schedule-items">
                            <?php if ($selectedMovie): ?>
                                <?php foreach ($selectedMovie['schedules'] as $schedule): ?>
                                    <a class="schedule-item" href="?p=ticket"><?= htmlspecialchars($schedule) ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div id="detail-description" class="detail-bottom">
                    <div class="movie-description">
                        <?= htmlspecialchars($selectedMovie['description'] ?? '') ?>
                    </div>
                    <div class="bottom-buttons">
                        <button>Volver a la Cartelera</button>
                    </div>
                </div>
            </div>



            </div>
            <div class="tentacle tentacle-left"></div>
            <div class="tentacle tentacle-right"></div>
            <div class="icon"></div>
        </div>
    </main>
    <footer>
        <a href="#" class="more-info">Más sobre nosotros</a>      
    </footer>
</body>
</html>