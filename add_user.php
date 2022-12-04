
<?php 

include('conn.php');

if (isset($_POST['submits'])) {
$student_id=test_input($_POST['student_id']);
$fname=test_input($_POST['fname']);
$sname=test_input($_POST['sname']);
$email=test_input($_POST['email']);
$pass1=test_input($_POST['pass1']);
$pass2=test_input($_POST['pass2']); 
$dep=test_input($_POST['dep']);
$student_con=test_input($_POST['student_con']);
$parent_con=test_input($_POST['parent_con']);
$location=test_input($_POST['location']);




$number = preg_match('@[0-9]@', $pass1);

if(! $number||strlen($pass1) < 8) {
  echo"<script>alert('$fname  You Password must be greater than 8    ');window.location='add_user.php' </script>";
}

else if ($pass1 != $pass2) {
  echo "<script> alert(' Please enter same password') ;window.location='add_user.php'</script>";
}

else if ($fname == $sname) {
  echo "<script> alert(' Your first name cant be used as your second name') ;window.location='add_user.php'</script>";
}

else if ($student_con == $parent_con) {
  echo "<script> alert(' Your number cant be used as your parents number') ;window.location='add_user.php'</script>";
}


else{

  $chek_id=substr($student_id,0,3);


    
$sql = "INSERT INTO `users`(`student_id`, `fname`, `sname`, `email`, `pass`,`dep`, `student_con`, `parent_con`, `location`) VALUES ('$student_id','$fname','$sname','$email','$pass1','$dep','$student_con','$parent_con','$location')";   
$query_run= mysqli_query($conn, $sql);
if($query_run)
echo"<script>alert('$fname  You are welcomed to ATU student connect  , you can now login '); window.location='login.php'</script>";

}

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>





