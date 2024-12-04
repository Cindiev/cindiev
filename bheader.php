<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINDIEV</title>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/footer.css">

    <script src="js/main.js"></script>

    <link rel="icon" href="assets/cindiev_logo_white.png">
    <?php
        session_start();
    ?>
</head>
<body onload="init()">
    <header>
        <img id="header-icon" src="assets/svg/logo_white.svg">
        <!--
        <div id="header-logo"><span class="highlight"></span></div>
        -->
        <nav>
            <ul>
                <li id="funcs-nav" class="disabled-icon"><a><img class="header-icon" src="assets/svg/movie.svg" alt="Movies">Funciones</a></li>
                    <div class="arrow-separator disabled-icon"><img class="header-separator" src="assets/svg/arrow.svg" alt="Separator"></div>
                <li id="tickets-nav" class="disabled-icon"><a><img class="header-icon" src="assets/svg/ticket.svg" alt="Ticket">Tickets</a></li>
                    <div class="arrow-separator disabled-icon"><img class="header-separator" src="assets/svg/arrow.svg" alt="Separator"></div>
                <li id="food-nav" class="disabled-icon"><a><img class="header-icon" src="assets/svg/food.svg" alt="Food">Alimentos</a></li>
                    <div class="arrow-separator disabled-icon"><img class="header-separator" src="assets/svg/arrow.svg" alt="Ticket"></div>
                <li id="pay-nav"class="disabled-icon"><a><img class="header-icon" src="assets/svg/money.svg" alt="Payment">Pago</a></li>
            </ul>
        </nav>

        <?php if(isset($_SESSION['user-name']) && isset($_SESSION['email'])) { ?>
        <div class="user-content">
            <?php echo $_SESSION['user-name']; ?>
            <img id="logout"  src="assets/svg/logout.svg" onclick="window.location = 'logout.php';">
        </div>   
        <?php
        }else{ ?>
        <div class="buttons">
            <button onclick="window.location.href='login.php';" class="btn login">Ingresar</button>
        </div>
        <?php } ?>
    </header>
    <div id="header-gradient"></div>
    <script src="js/header_manager.js"></script>
