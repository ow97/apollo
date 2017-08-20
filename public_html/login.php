<?php
include "../resources/lib.php";
include "../resources/auth.php";

echo $_SERVER["REQUEST_METHOD"];

if ($_SERVER["REQUEST_METHOD"] = "POST") {
    echo "post";
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
    echo "not";
    $failed = false;
    include "../resources/login.php";
}