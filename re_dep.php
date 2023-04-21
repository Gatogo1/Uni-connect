
<input type="hidden" name="code" value="<?php echo $code ?>">

<?php 

include('conn.php');

if (isset($_POST['submit'])) {
     # code...

  $filename = $_FILES['image']['name'];
$student_id=test_input($_POST['student_id']);
$fname=test_input($_POST['fname']);
$sname=test_input($_POST['sname']);
$email=test_input($_POST['email']);
$pass1=test_input($_POST['pass1']);
$date=test_input($_POST['date']);
$pass2=test_input($_POST['pass2']); 
$student_con=test_input($_POST['student_con']);
$location=test_input($_POST['location']);

$cert=$_POST['cert'];
$lev=$_POST['lev'];
$sec=$_POST['sec'];
$class=$_POST['class'];
$dep=$_POST['dep'];
$codes=$_POST['code'];
$dep_code=substr($dep,0,3);
$code=$dep_code."".$lev."".$class."".$sec."".$cert;





$number = preg_match('@[0-9]@', $pass1);

if(! $number||strlen($pass1) < 8) {
  echo"<script>alert(' $codes  You Password must be greater than 8    ');window.location='add_user.php' </script>";
}

else if ($pass1 != $pass2) {
  echo "<script> alert(' Please enter same password') ;window.location='add_user.php'</script>";
}

else{




  $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'userimage/'.$filename)){
		// Image db insert sql
    $sql = "INSERT INTO `users`(  `student_id`, `codes`, `firstname`, `username`, `image`, `email`, `pass`, `date`, `dep`, `student_con`, `location`, `status`) VALUES ('$student_id','$code','$fname','$sname','$filename','$email','$pass1','$date','$dep','$student_con','$location',1)"; 
		if(mysqli_query($conn,$sql)){
      echo"<script>alert(' $fname  You are welcomed to ATU student connect  , you can now login '); window.location='add_user.php'</script>";
		}
		else{
		 
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
	}
	}
} 
}

/*
    
$sql = "INSERT INTO `users`( `student_id`, `firstname`, `username`, `email`, `pass`, `dep`, `student_con`, `location`, `status`) VALUES ('$student_id','$fname','$sname','$email','$pass1','$dep','$student_con','$location',1)";   
$query_run= mysqli_query($conn, $sql);
if($query_run){
echo"<script>alert('$fname  You are welcomed to ATU student connect  , you can now login '); window.location='login.php'</script>";
}
else {
  echo"<script>alert('$fname  You details are not correct please retry '); window.location='add_user.php'</script>";

}
}

}*/

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




?>
