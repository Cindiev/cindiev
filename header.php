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
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/base.css">


    <link rel="stylesheet" href="css/variables.css">
    <link rel="icon" href="assets/cindiev_logo_white.png">
    <script src="js/main.js"></script>

    <?php
        session_start();
    ?>

</head>
<body>
    <header>
        <div id="header-logo">CINDIE<span class="highlight">V</span></div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="agendar.php">Funciones</a></li>
                <li><a href="index.php?p=eventos">Eventos</a></li>
            </ul>
        </nav>
            <?php if(isset($_SESSION['user-name']) && isset($_SESSION['email'])) { ?>
                <div class="user-content">
                    <?php echo $_SESSION['user-name']; ?>

                    <img id="logout"  src="assets/svg/logout.svg" onclick="window.location = 'logout.php';">
                </div>   
            <?php
            }else{ ?>
                <?php if($page == 'inicio'){?>
                    <div class="buttons" style="margin-left: 132px;">
                <?php } else{?>
                    <div class="buttons">
                <?php }?>
                
                <button onclick="window.location.href='login.php';" class="btn login">Ingresar</button>

                <?php if($page != 'inicio'){?>
                    <button class="btn register">Registrarse</button>
                <?php }?>

            <?php } ?>
        </div>
    </header>
    <div id="header-gradient"></div>
