<?php
include_once "lib.php";

function authPassword($username, $password)
{
    return $username == "admin" && $password == "admin";
}

function authToken($username, $token)
{
    return $username == "admin" && $token == "abc123";
}

function checkToken()
{
    if (!array_key_exists("username", $_COOKIE)) return false;
    if (!array_key_exists("token", $_COOKIE)) return false;

    return authToken($_COOKIE["username"], $_COOKIE["token"]);
}

function enforceAuthToken()
{
    if (!checkToken()) {
        http_redirect("login.php?redirect=" . urlencode($_SERVER["REQUEST_URI"]));
    }
}