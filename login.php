<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINDIEV</title>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/variables.css">


    <link rel="icon" href="assets/cindiev_logo_white.png">
    <script src="js/login.js"></script>

</head>
<body>
    <main>
        <div class="content-gradient"></div>
        <div class="content" id="content-panel" data-name="<?php echo $page; ?>">
            <div class="main-content">
                <div class="login-container">
                    <div class="left-container">

                    </div>
                    <div class="right-container">

                        <div id="login-panel">

                            <div class="type-button">
                                <div class="type-btn l">Usuario</div>
                                <div class="type-btn r">Emprendedor</div>
                            </div>

                            <form method="post" action="authenticate.php">
                                <input class="text-input" placeholder="Correo electrónico" name="user-name" type="email"></input>
                                <br>
                                <input class="text-input" placeholder="Contraseña" name="password" type="password"></input>
                                <br>
                                <div class="remember-container"><input type="checkbox" id="remember" name="remember-user" value="remember">Recordarme</div>
                                <?php if(isset($_GET['error'])){ ?>
                                    <label class='error'>Access Denied</label>
                                <?php } ?>
                            
                                <br>
                                <button id="login-btn" type="submit">Iniciar Sesión</button>
                            </form>
                            <a href="" target="">¿Olvidaste tu contraseña?</a>
                            <br>
                            <a href="" target="">Registrarse</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="cindiev">
                <div id="header-logo">CINDIE<span class="highlight">V</span></div>
            </div>


            <div class="tentacle tentacle-left"></div>
            <div class="tentacle tentacle-right"></div>
            <div class="icon"></div>
        </div>
    </main>
    <footer>
        <a href="#" class="more-info"></a>      
    </footer>
</body>
</html>