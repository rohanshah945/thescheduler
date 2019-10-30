<?php
//initialize variables to hold connection parameters
$username = 'root';
$dsn = 'localhost';
$dbname = 'thescheduler';
$password = '';

$connect = mysql_connect($dsn, $username, $password) or die("Failed to Connect to the Database.");
mysql_select_db("thescheduler")  or die("Failed to Connect to the Database."); 

?>