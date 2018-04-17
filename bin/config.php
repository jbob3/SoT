<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '7y7N$$xU');
define('DB_NAME', 'sot');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link == false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

?>