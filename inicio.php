
    <link rel="stylesheet" href="css/inicio.css">

    <?php
        $moviesData = json_decode(file_get_contents('data/movies.json'), true);
    ?>

    <main>
        <div class="content-gradient"></div>
        <div class="content" id="content-panel" data-name="<?php echo $page; ?>">
            <div class="index-panel">
                <section class="hero">
                    <h1>EL CINE ES NUESTRO</h1>
                    <p>Descubre el cine independiente, impulsa la cultura y disfruta la experiencia</p>
                    <?php if(!isset($_SESSION['user-name'])) { ?>

                        <div class="cta">
                            <form action="">

                            </form>
                            <input type="email" id="email-input"  placeholder="Correo electrónico">
                            <button id="landing-reg" class="btn register">Registrarse</button>
                        </div>

                        <script>
                            document.getElementById("landing-reg").addEventListener("click", function () {
                                // Obtener el valor del input de correo
                                const email = document.getElementById("email-input").value;

                                // Validar que no esté vacío
                                if (email.trim() === "") {
                                    alert("Por favor, ingresa un correo electrónico.");
                                    return;
                                }

                                // Redirigir a login.php con el email como variable en la URL
                                window.location.href = `login.php?email=${encodeURIComponent(email)}`;
                            });
                        </script>

                    <?php }else{?>
                        <div class="cta">
                            <label id="greeting">¡Hola, <?php echo $_SESSION['user-name'];?>!</label>
                        </div>
                    <?php }?>
                    <img id="landing-logo" src="assets/cindiev_logo_white.png" alt="">
                </section>

                <section class="carousel">
                    <h2>CARTELERA</h2>
                    <div class="carousel-container">
                    <?php foreach ($moviesData as $movie): ?>
                        <div class="carousel-item">
                            <a href="agendar.php?p=funciones&movie=<?php echo urlencode($movie['title']); ?>">
                                <img src="<?php echo $movie['cover']; ?>" alt="<?php echo $movie['title']; ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>

                        <!--
                        <div class="carousel-item">
                            <img src="assets/movies/bofeton_cover.jpg" alt="Película 1">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/movies/colegial_cover.jpg" alt="Película 2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/movies/huerfanas.jpg" alt="Película 3">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/movies/invisible_cover.jpg" alt="Película 4">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/movies/laxmisteriosa_cover.jpg" alt="Película 5">
                        </div>
                    -->
                    </div>
                </section>

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