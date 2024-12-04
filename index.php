<?php
    $page = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';
    require_once 'header.php';
    require_once $page.'.php';