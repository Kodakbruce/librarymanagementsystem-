<?php
session_start();

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function loginUser($user_id) {
    $_SESSION['user_id'] = $user_id;
}

function logoutUser() {
    session_unset();
    session_destroy();
}
?>
