<?php
foreach ($_REQUEST as $index => $item) {
    echo "$index => $item";
}

echo array_key_exists("redirect", $_REQUEST) ? urldecode($_REQUEST["redirect"]) : "index.php";