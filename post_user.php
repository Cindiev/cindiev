<?php
    require_once('models/user.php');
    require_once('config/config.php');

    // receive data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $age = $_POST['age'];

    if ($password == $password2) {
        if ($age >= 18) {
            if (User::add($email, $name, $password, $age)){
                header('Location:login.php?p=success');
            }else{
                echo 'Could not register user';
            }
        }else{
            header('Location:login.php?p=errage');
        }
    }else{
        header('Location:login.php?p=errpass');

    }
    
?>