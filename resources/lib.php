<?php

function testPort($address)
{
    $addressParts = explode(':', $address, 2);
    $host = $addressParts[0];
    $port = $addressParts[1];

    $connection = fsockopen($host, $port);
    $success = is_resource($connection);
    fclose($connection);

    return $success;
}