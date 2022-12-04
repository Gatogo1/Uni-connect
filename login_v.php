<?php 
session_start(); 
include "../conn.php";

if (isset($_POST['student_id']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$student_id = validate($_POST['student_id']);
	$pass = validate($_POST['pass']);

	if (empty($student_id)) {
		header("Location: ../login.php?error=Student id is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE student_id='$student_id' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['student_id'] === $student_id && $row['password'] === $pass) {
            	$_SESSION['sname'] = $row['sname'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../index.php");
		        exit();
            }else{
				header("Location: ../login.php?error=Incorrect student id name or password");
		        exit();
			}
		}else{
			header("Location: ../login.php?error=Incorrect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}