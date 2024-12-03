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
        $_SESSION['full-name'] = $user->get_full_name();
        $_SESSION['photo'] = $user->get_photo();
        // redirect to index.php
        header('location:index.php');
    }else{
        header('location:login.php?error=true');
    }

    
?>