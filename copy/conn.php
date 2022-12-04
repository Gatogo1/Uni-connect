<?php

$uname= "localhost";
$nmae= "root";
$password = "";
$db_name = "atu_student_con_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

?>