<?php

function logout() {
    if($_COOKIE['is_login']==1 or isset($_COOKIE['username'])){
        setcookie("is_login", 0, time()-3600);
        setcookie("username", "", time()-3600);
    }
}

function login($username) {
    setcookie("is_login", 1);
    setcookie("username", $username);
}

function require_login() {
    if(!isset($_COOKIE['is_login']) or $_COOKIE['is_login']==1) {
        Header("Location: login.php");
    }
}