<?php

session_start();

function login($user, $pw) {
    $logins = file('usuarios.csv');
    for ($i = 0; $i < sizeof($logins); $i++) {
        $logins[$i] = trim($logins[$i]);
    }
    $user_pw = $user . ',' . $pw;
    if (in_array($user_pw, $logins)) {
        $_SESSION['user-logged'] =  $user;
        return true;
    }
    return false;
}

function is_logged() {
    return isset($_SESSION['user-logged']);
}

function logout() {
    unset($_SESSION['user-logged']);
}

function redirect($page) {
    header('location: ' . $page);
}

?>