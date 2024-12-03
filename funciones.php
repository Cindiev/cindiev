    <link rel="stylesheet" href="css/billboard.css">
    <script src="js/billboard.js"></script>
    <script src="data/conf.js"></script>

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
                    <div class="floating-selector">
                        13 de Noviembre
                    </div>
                </div>
            </div>
            <div class="movie-billboard-container" id="movies">

                <div class="movie-detail" style="display: none;">
                    <div class="detail-top">
                        <div class="movie-trailer">
                            <div class="movie-detail-video">
                                <div id="movie-detail-title" class="movie-detail-name">Mirrors <div>B15</div></div>
                                <video alt="La X Misteriosa" controls>
                                    <source src="assets/movies/trailers/xtrailer.mp4" type="video/mp4">
                                    Este navegador no soporta videos.
                                </video>
                            </div>
                        </div>
                        <div class="movie-detail-schedules">
                            <div class="schedule-header">
                                Horarios <div id="movie-detail-info">70 min ESP SUB</div>
                            </div>
                            <div id="details-schedules" class="schedule-items">
                                <a class="schedule-item" href="?p=ticket">10:00</a>
                                <a class="schedule-item" href="?p=ticket">11:10</a>
                                <a class="schedule-item" href="?p=ticket">12:20</a>
                                <a class="schedule-item" href="?p=ticket">13:30</a>
                                <a class="schedule-item" href="?p=ticket">14:40</a>
                            </div>
                        </div>
                    </div>
                    <div id="detail-description" class="detail-bottom">
                        <div class="movie-description">
                            Angela frente al espejo es un encuentro durante el juego en los apartamentos Blue Creek donde ella se encuentra acostada en el centro de una habitacion que tiene un gran espejo. No obstante, ella no esta viendo su reflejo a traves del espejo sino que lo mira a traves del cuchillo que sostiene, simbolizando el pensamiento autodestructivo que ella sufre.
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