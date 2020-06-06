<?php

define('DB_SERVER', 'ec2-34-200-72-77.compute-1.amazonaws.com');
define('DB_USERNAME', 'd9jar073obinfh');
define('DB_PASSWORD', '56f76d5da1e08c1335f08d1db7d56ecc05cecfe91f3857de3770633f212c677b');
define('DB_NAME', 'mpowahuvgjorzq');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
