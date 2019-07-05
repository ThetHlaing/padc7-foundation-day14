<?php

$dbhost = 'localhost:3306';
$dbuser = 'admin';
$dbpass = '123456';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

$sql = 'CREATE Database test_db';
$retval = $conn->query($sql);

if (!$retval) {
    die('Could not create database: ' . mysqli_connect_error());
}

echo "Database test_db created successfully\n";
mysqli_close($conn);
