<?php
    // variable pendefinisian kredensial
    $usernamelogin = 'worker';
    $passwordlogin = 'worker';

    // memulai session
    session_start();

    // mengambil isian dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // pengecekan kredensial login
    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: task.html");
    } 
    else {        
        header("Location: login.html");
   }
?>