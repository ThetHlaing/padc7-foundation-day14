<?php

$dbhost = 'localhost:3306';
$dbuser = 'admin';
$dbpass = '123456';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

//$conn =  new mysqli('p:'.$dbhost, $dbuser, $dbpass, 't2');

//var_dump($conn);
if (!$conn) {
   die('Could not connect:' . mysqli_connect_error());
}

echo 'Connected successfully';
mysqli_close($conn);

//https://dev.mysql.com/doc/refman/8.0/en/upgrading-from-previous-series.html#upgrade-caching-sha2-password-compatible-connectors

//https://secure.phabricator.com/T13141
