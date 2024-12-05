<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINDIEV</title>
    
    <script src="js/fontawesome/solid.js"></script>
    <link href="css/fontawesome/fontawesome.css" rel="stylesheet">
    <link href="css/fontawesome/solid.css" rel="stylesheet">

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
                <?php if (isset($_GET['email'])) { $email = htmlspecialchars($_GET['email']);?>
                <div id="log" class="login-container" style="display: none;">
                <?php } else{ ?>
                <div id="log" class="login-container">
                <?php }?>
                    <div class="left-container"></div>
                    <div class="right-container">

                        <div id="login-panel">

                            <div class="type-button">
                                <div class="type-btn l">Usuario</div>
                                <div class="type-btn r">Emprendedor</div>
                            </div>

                            <form method="post" action="authenticate.php">
                                <input class="text-input tei" placeholder="Correo electrónico" name="user-name" type="email"></input>
                                <br>
                                <input class="text-input tpi" placeholder="Contraseña" name="password" type="password"></input>
                                <br>
                                <div class="remember-container"><input type="checkbox" id="remember" name="remember-user" value="remember">Recordarme</div>
                                <?php if(isset($_GET['error'])){ ?>
                                    <div class='error'>Acceso Denegado: correo o contraseña incorrectos</div>
                                <?php } ?>

                                <br>
                                <button id="login-btn"  type="submit">Iniciar Sesión</button>
                            </form>
                            <br>
                            <label class="login-a register-type">Registrarse</label>

                        </div>
                    </div>
                </div>


                <?php if (isset($_GET['email'])) { $email = htmlspecialchars($_GET['email']);?>
                <div id="reg" class="login-container">
                <?php } else{ ?>
                <div id="reg" class="login-container" style="display: none;">
                <?php }?>
                    <div class="left-container">

                    </div>
                    <div class="right-container">

                        <div id="login-panel">

                            <form method="post" action="post_user.php">
                                <input class="text-input tei" placeholder="Correo electrónico" name="email" type="email" value="<?php if (isset($email)) { echo $email; } ?>"></input>
                                <br>
                                <input class="text-input tei" placeholder="Nombre" name="name" type="text"></input>
                                <br>
                                <input class="text-input tpi" placeholder="Contraseña" name="password" type="password"></input>
                                <br>
                                <input class="text-input tpi" placeholder="Confirmar Contraseña" name="password2" type="password"></input>
                                <br>
                                <input class="text-input tpi" placeholder="Edad" name="age" type="number" max='100' min='18'></input>
                                <div class="remember-container"><input type="checkbox" id="remember" name="remember-user" value="remember">Acepto los términos y condiciones</div>
                                <button id="login-btn"  type="submit">Registrarse</button>
                            </form>
                            <br>
                            <label class="login-a login-type">Iniciar sesión</label>

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