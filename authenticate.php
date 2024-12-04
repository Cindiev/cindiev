<?php
    // require files
    require_once ('models/user.php');
    // get values
    $user_name = $_POST['user-name'];
    $password = $_POST['password'];

    //authenticate
    $user = User::authenticate($user_name, $password);
    if($user != null){
        session_start(); // start session
        // save user info in session
        $_SESSION['user-name'] =  $user->get_name();
        $_SESSION['email'] =  $user->get_email();

        // redirect to index.php
        header('location:index.php');
    }else{
        header('location:login.php?error=true');
    }

    
?>