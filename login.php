<?php session_start(); ?>

<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width, initial-scale=1.0">
        <title>Login</title>
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
      

<?php

include('conn.php');


?>

<?php


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST["student_id"];
    $pass=$_POST["password"];
    
//to prevent php injection

$id=stripcslashes($id);
$pass=stripcslashes($pass);


$sql = "SELECT * FROM users WHERE student_id='$id' AND pass='$pass'";

$result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

    if($row["student_id"]==$id && $row['pass'] == $pass)
    {   
      $email=$row["email"];
      $_SESSION['stu_id']=$row["student_id"];
      $_SESSION['sname']=$row["sname"];
        $_SESSION["usertype"]=$row['usertype'] ;

        $_SESSION['email']=$email;
        header("location:index.php");
    } 


    else{
      echo"<script>alert('your mother!'); window.location='login.php'</script>";
    }


}


?>




<style>
    body{
    background-color: rgb(10, 143, 161);
    font-family: 'ABeeZee';font-size: 22px;
}

.form{
    border: 1px solid;
  padding: 10px;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

}

.logo img{
  width: 200px;
}
.modal-content{
  background: rgb(10, 143, 161);
}

</style>



    <title>
        Login
    </title>
</head>
<body>
<center>

       
<form action="add_user.php" method="POST" class="form border-dark badge-info  m-3 w-90 p-3">
   <div class="logo">
       <img style="width: 200px; ;" src="image/Picture1.jpg" alt="">
   </div>
   <h4>Login</h4>
    
   <div class="  form-group">

       <label for="course">Student Id</label>
       <input type="number" class="form-control w-100 " id="subject" placeholder="Enter your Id" name="student_id" required>
      
     </div>

     <div class="form-group">
       <label for="course">Password</label>
       <input type="password" class="form-control w-100" id="subject" placeholder="Enter Valid Password" name="password" required>
       
     </div>



     
  

<!-- Sign in button -->
<button class="btn btn-success  w-25 btn-block" type="submit">Login</button>
<p>Don't have account ?  <a href="">forget password</a></p>

<button data-toggle="modal" data-target="#exampleModal" href="add_user.php"   class="btn btn-warning w-25 btn-block" type="button">Sign up</button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title text-light" id="exampleModalLabel">New User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">
          <!--modal content-->
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="form border-dark   m-3 w-50 p-3">
          <div class="logo">
            <img src="image/picture1.png" alt="">
          </div>
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>

</center>
</body>
</html>