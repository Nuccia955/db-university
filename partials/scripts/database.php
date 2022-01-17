<?php
// set database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'university');

//connect database
$cnx = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//check connection
if($cnx && $cnx->connect_error) {
    echo 'Connection failed';
}

