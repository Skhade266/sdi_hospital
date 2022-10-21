<?php
$host = "localhost";
$port = "5432";
$dbname = "db_gis-hos";
$user = "postgres";
$password = "Saurabh"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
?>