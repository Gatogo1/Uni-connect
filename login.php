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
        <link rel="stylesheet" href="">
      

<?php

include('conn.php');


?>
<?php /*
// Get user device details
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Print user device details
echo "User device details: " . $user_agent;
?>

<?php
// Get user IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// Print user IP address
echo "User IP address: " . $user_ip; */
?>

<?php


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST["student_id"];
    $pass=$_POST["password"];
    
//to prevent php injection

$id=stripcslashes($id);
$pass=stripcslashes($pass);


$sql = "SELECT * FROM users WHERE student_id='$id' AND pass='$pass' AND status='1'";

$result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

    if($row["student_id"]==$id && $row['pass'] == $pass && $row['status']==1)
    {   
      $email=$row["email"];
      $_SESSION['id']=$row["id"];
      $_SESSION['sname']=$row["username"];
        $_SESSION["dep"]=$row['dep'];
        $_SESSION["code"]=$row['codes'];
        $_SESSION['email']=$email;
        header("location:index.php");
    } 


    else{
      echo"<script>alert(' Your login details are incorrect! please make sure your details are correct and try agian !'); window.location='login.php'</script>";
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

</style>



    <title>
        Login
    </title>
</head>
<body>
<center> 

       
<form action="" method="POST" class="form border-dark badge-info  m-3 w-90 p-3">
   <div class="logo">
       <img style="width: 200px; ;" src="image/Picture1.jpg" alt="">
   </div>
   <h4>Login</h4>
   <h5></h5> 
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

<a href="add_user.php"   class="btn btn-warning w-25 btn-block" type="button">Sign up</a>

</form>

</center>
</body>
</html>