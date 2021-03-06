<?php
include("../resources/lib.php");

$tests = array(
    "local"    => "127.0.0.1:80",
    "firewall" => "192.168.2.1:443",
    "gateway"  => "192.168.0.1:80",
    "dns"      => "8.8.8.8:53",
    "google"   => "google.co.uk:443",
    "facebook" => "facebook.com:443",
    "durham"   => "durham.ac.uk:443",
);

$address = $tests[$_REQUEST['test']];

if (is_null($address)) {
    echo "error";
} else if (testPort($address)) {
    echo "up";
} else {
    echo "down";
};