<?php

$dbhost = 'localhost:3306';
$dbuser = 'admin';
$dbpass = '123456';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

//$sql = 'create database test_db';
//$sql = 'create table employee(emp_id int, emp_name text, emp_salary bigint)';
$sql = 'insert employee set emp_id=2,emp_name="aung aung",emp_salary=1500000';
mysqli_select_db($conn,'test_db');
$retval = $conn->query($sql);

if (!$retval) {
    die('Could not create database: ' . mysqli_connect_error());
}
else{
    var_dump($retval);
}

echo "Table employee created successfully\n";
mysqli_close($conn);
