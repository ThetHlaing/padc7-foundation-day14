<?php
   
   $dbhost = 'localhost:3306';
   $dbuser = 'admin';
   $dbpass = '123456';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
   $sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';
   mysqli_select_db($conn,'test_db');
   $retval = $conn->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_connect_error());
   }
   
   while($row = $retval->fetch_assoc()) {
      echo "EMP ID :{$row['emp_id']}  <br> ".
         "EMP NAME : {$row['emp_name']} <br> ".
         "EMP SALARY : {$row['emp_salary']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);