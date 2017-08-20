<?php
include "../resources/lib.php";
include "../resources/auth.php";

if (array_key_exists("username", $_GET) && array_key_exists("password", $_GET)) {
    if ((array_key_exists("username", $_REQUEST) && array_key_exists("password", $_REQUEST)) &&
        authPassword($_REQUEST["username"], $_REQUEST["password"])) {
        setcookie("username", $_REQUEST["username"]);
        setcookie("token", "abc123");

        if (array_key_exists("redirect", $_REQUEST)) {
            $redirectDest = $_REQUEST["redirect"];
        } else {
            $redirectDest = "index.php";
        }

        http_redirect(array_key_exists("redirect", $_REQUEST) ? urldecode($_REQUEST["redirect"]) : "index.php");
    } else {
        $failed = true;
        include "../resources/login.php";
    }
} else {
    include "../resources/login.php";
}