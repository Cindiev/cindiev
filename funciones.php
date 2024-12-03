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