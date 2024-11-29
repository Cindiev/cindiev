<?php
    $page = isset($_GET['p']) ? strtolower($_GET['p']) : 'funciones';
    require_once 'bheader.php';
    require_once $page.'.php';