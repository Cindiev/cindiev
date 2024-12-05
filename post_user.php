<?php
    require_once('models/character.php');
    require_once('config/config.php');

    // receive data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $age = $_POST['age'];

    if ($password == $password2) {
        // add
        if (User::add($name, $race, $strength, $speed)){
            header('Location:character.php');
        }else{
            echo 'Could not add character';
        }

    }else{
        echo "Error: Ambas contraseñas deben ser iguales";
    }
    
?>