<?php

function testPort($address)
{
    $addressParts = explode(':', $address, 2);
    $host = $addressParts[0];
    $port = $addressParts[1];

    $connection = @fsockopen($host, $port, $errNo, $errMsg, 1);
    $accessible = is_resource($connection);
    if ($accessible) fclose($connection);

    return $accessible;
}

function http_redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}