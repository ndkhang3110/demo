<?php

define('DB_SERVER', 'ec2-52-44-55-63.compute-1.amazonaws.com');
define('DB_USERNAME', 'jjzswlalijzhnz');
define('DB_PASSWORD', 'e8842ef951eec774b0b7fdd7da7e56c3585430bbb2fb1b6e8fc25f5fdb536770');
define('DB_NAME', 'd3eli4djv12ike');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
