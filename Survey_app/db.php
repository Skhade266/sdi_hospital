<?php

$server = 'localhost';
$username = 'postgres';
$password = 'Saurabh';
$db_name = 'db_gis-hos';

$dbconn = pg_connect("host=$server port=5432 dbname=$db_name user=$username password=$password");


?>