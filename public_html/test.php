<?php
//var_dump($_POST);
//
//echo $_SERVER["REQUEST_METHOD"];

echo urldecode(file_get_contents('php://input'));

//phpinfo();