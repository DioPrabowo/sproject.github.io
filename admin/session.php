<?php
session_start();

function isUserLoggedIn() {
    return isset($_SESSION['username']) && isset($_SESSION['level']) && $_SESSION['level'] == 'user';
}

function isAdminLoggedIn() {
    return isset($_SESSION['username']) && isset($_SESSION['level']) && $_SESSION['level'] == 'admin';
}

function redirectToLogin() {
    header("Location: login.php");
    exit();
}

function redirectToHome() {
    if (isAdminLoggedIn()) {
        header("Location: admin_home.php");
    } elseif (isUserLoggedIn()) {
        header("Location: user_home.php");
    } else {
        redirectToLogin();
    }
}
?>