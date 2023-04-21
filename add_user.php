<?php session_start() ?>

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
        <link rel="stylesheet" href="">

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
date_default_timezone_set('Africa/Accra');
$date=  date("M-D-Y");
?>



      <!-- Modal Header -->
      <center>
        <div class="logo">
          <img style="width: 200px; padding:3px;" src="image/Picture1.jpg" alt="">
      </div>
        <h4 class="modal-title align-center"> New User Registration</h4>
    
            <!-- Modal body -->
<form action="re_dep.php" method="post" enctype="multipart/form-data" class="form border-dark w-100 p-3">

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
                <label class="form-label" for="form6Example2">Select Image 1</label>
      <input type="file" class="form-control-file border" name="image">
                </div>
                <input type="hidden" class="form-control-file border" name="date" value="<?php echo $data ?>">
            <div class="form-group">
            <label for="pwd">Email</label>
            <input type="email" class="form-control" id="pwd" placeholder="Enter Email" name="email" required>
          </div>

          <div class="form-group">
            <label for="pwd">Student id</label>
            <input type="text" class="form-control" id="pwd" placeholder="0123155d" name="student_id"  title="Please follow the correct format" required>
          </div>

          <div class="row form-group">
            <div class="col">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter new password" name="pass1"   title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>

            <div class="col">
            <label for="pwd">Confirm Password</label>
            <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="pass2" required>
            </div>
          </div>

             
            <?php 
include("conn.php");
    $query ="SELECT department FROM department";
    $result1 = $conn->query($query);
    if($result1->num_rows> 0){
      $options= mysqli_fetch_all($result1, MYSQLI_ASSOC);
    }
?>
<div class=" row form-group">
<label for="department">Choose department:</label>

<select  class="custom-select mb-3" id="department" name="dep">
<option value="select_dep">Select your department</option>
<?php 
  foreach ($options as $option) {
  ?>
  <option value="<?php echo $option['department']; ?>"><?php echo $option['department']; ?> </option>
    <?php 
    }
   ?>
</select>
  </div>

  <div class="form-group">
                <label for="dep">Select Level</label>
               <select class="form-control" name="lev" id="lev">
                <option value="not selected">select level----</option>
                  <option value="1">100</option>
                  <option value="2">200</option>
                  <option value="3">300</option>
                  <option value="4">400</option>
               </select>
              </div>

              <div class="form-group">
                 <label for="cars">Choose Class </label>
                 <select  class="form-control w-10 " id="level" name="class">
                   <option value="A">A</option>
                   <option value="B">B</option>
                   <option value="C">C</option>
                 </select>
              </div>
              <div class="form-group">
                <label for="dep">Select Section</label>
               <select class="form-control" name="sec" id="sec">
                <option value="not selected">select Section----</option>
                  <option value="M">Full Time</option>
                  <option value="E">Part Time</option>
               </select>
              </div>

              <div class="form-group">
                <label for="dep">Select Certificate</label>
               <select class="form-control" name="cert" id="sec">
                <option value="not selected">select Cert----</option>
                  <option value="H">HND</option>
                  <option value="B">BTECH</option>
               </select>
              </div>


          <div class=" form-group">
            <div class="col">
              <label for="pwd">Student contact</label>
              <input type="number" class="form-control" id="studt-con" placeholder="233540948579" name="student_con"  pattern="([0-9]).{12}" title="Please follow the correct format" required>
              </div>


            <div class="form-group">
              <label for="pwd">Place of location
              </label>
              <input type="text" class="form-control" id="parent-con" placeholder="Enter Location" name="location" required>
            </div>
          
           
          <input class="btn bg-warning" type="submit"  name="submit" value="submit">
        </form>
      <!-- Modal footer -->
</center>  



</body>
</html>


