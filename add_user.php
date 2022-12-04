

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
            <!-- Bootstrap CDN -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Owl-carousel CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
       
    
        <!-- font awesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <!-- Custom CSS file -->
        <link rel="stylesheet" href="css/style.css">

        <style>
             body{
    background-color: rgb(10, 143, 161);
    font-family: 'ABeeZee';font-size: 22px;
}

            label, h4{
              color: white;
              font-size: 20px;
            }
        </style>
</head>
<body>
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


      <!-- Modal Header -->
      <center>
        <div class="logo">
          <img style="width: 200px; padding:3px;" src="image/Picture1.jpg" alt="">
      </div>
        <h4 class="modal-title align-center">New User Registration</h4>
      
      
      <!-- Modal body -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="form border-dark   m-3 w-50 p-3">

          <div class=" row form-group">
            <div class="col">
            <label for="uname">First name:</label>
            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="fname" pattern="[A-Za-z]{2,}" title="Please we dont accept 2 letter names " required>
            </div>
            <div class="col">
            <label for="uname">Last name:</label>
              <input type="text" class="form-control" id="sname" placeholder="Enter Last" name="sname"  pattern="[A-Za-z]{2,}" title="Please we dont accept 2 letter names " required>
            </div>
          </div>
         

            <div class="form-group">
            <label for="pwd">Email</label>
            <input type="email" class="form-control" id="pwd" placeholder="Enter Email" name="email" required>
          </div>

          <div class="form-group">
            <label for="pwd">Student id</label>
            <input type="number" class="form-control" id="pwd" placeholder="0123155d" name="student_id" pattern="[a-zA-Z0-9-].{8}" title="Please follow the correct format" required>
          </div>

          <div class="row form-group">
            <div class="col">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter new password" name="pass1"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>

            <div class="col">
            <label for="pwd">Confirm Password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="pass2" required>
            </div>
          </div>




          <div class="form-group">
              <label for="pwd">Department</label>
              <select name="dep" class="custom-select mb-3">
                  <option selected> Select Department </option>
                  <option value="Fashion">Fashion</option>
                  <option value="Electricals">Electricals</option>
                  <option value="Auto Mechanical">Auto Mechanical
                  </option>
                </select>
            </div>

          <div class="row form-group">
            <div class="col">
              <label for="pwd">Student contact</label>
              <input type="number" class="form-control" id="studt-con" placeholder="233540948579" name="student_con"  pattern="([0-9]).{12}" title="Please follow the correct format" required>
              </div>
              <div class="col">
              <label for="pwd">Parent contact</label>
              <input type="number" class="form-control" id="studt-con" placeholder="233540948579" name="parent_con"  pattern="([0-9]).{12}" title="Please follow the correct format" required>
              </div>
                 </div>

            <div class="form-group">
              <label for="pwd">Place of location
              </label>
              <input type="text" class="form-control" id="parent-con" placeholder="Enter Location" name="location" required>
            </div>
          
          
          <input class="btn bg-warning" type="submit"  name="submits" value="submit">
        </form>
      <!-- Modal footer -->
</center>  



</body>
</html>


