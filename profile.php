<?php include("common/head.php");
  ?>
    <style>

     
        .row1{
          background-color: blanchedalmond;  
        }
        .img-item img{
            width: 100%;
       
           
        }

        .bt{
         width: 100px;
         border-radius: 20px;
         height: 30px;
            
        }

        .was-validated{
            padding: 10px;
        }
     

    </style>
</head>

<body>

 
    <!--ads-->
<?php include("common/day_activity.php")?>
  </section>
  <!--!ads-->
     <!--profile-->
          <div class="container">
            <div class="row m-2 border">
              <?php
              include("conn.php");

             $id= $_SESSION['id'];
              $sql = "SELECT * FROM users WHERE id=$id   ";

              $result=mysqli_query($conn,$sql);
              
                  $row=mysqli_fetch_array($result);
              ?>
                <div class="img-item   col-sm-4">
                    <img style="height: 200px;" src="userImage/<?php echo $row['image'] ;?>" alt="profile">
                    
                </div>
                <div class="profile-detail  col-sm-6 ">
                    <div class="row  row1">
                        <div class="profile-item  col-sm-6 m-2"> <b>User:</b> <?php echo $row['firstname']." " .$row['username'];?>
                        </div>

                        <div class="profile-item col-sm-6 m-2">  <b>Student id:</b> <?php echo $row['student_id'];?>
                        </div>

                        <div class="profile-item col-sm-6 m-2">  <b>Department:</b> <?php echo $row['dep'];?> 
                        </div>

                        <div class="profile-item col-sm-6 m-2">  <b>Level:</b>  300
                        </div>

                        <div class="profile-item col-sm-6 m-2">  <b>School fees:</b> Ghc3500
                        </div>

                        <div class="profile-item col-sm-6 m-2">  <b>School fees paid:</b> Ghc2000
                        </div>
                        <div class="profile-item col-sm-6 m-2">  <b>School fees remaining :</b> Ghc1500
                        </div>
                      
                        <div class="profile-item col-sm-6 m-2">  <b>Atendance:</b>  40/100
                        </div>

        
                        <div class="profile-item col-sm-6 m-2">  <b>Tell Phone:</b><?php echo $row['student_con'];?> 
                        </div>

                        <button type="button  " class="btn btn-primary m-2" data-toggle="modal" data-target="#myModal">
                            Edit info
                          </button>
                    </div>

                </div>
            </div>
          </div>

          <!--modal-->
             <!-- Button to Open the Modal -->
  

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit info</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post" class="was-validated">
            <div class="form-group">
              <label for="uname">Firstname:</label>
              <input type="text" class="form-control" id="uname" value=" <?php echo $row['firstname'];?>" name="firstname" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="uname">Lastname:</label>
                <input type="text" class="form-control" id="uname" value=" <?php echo $row['username'];?>" name="username" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            <div class="form-group">
              <label for="pwd">Student id</label>
              <input type="text" class="form-control" id="pwd" value=" <?php echo $row['student_id'];?>" name="student_id" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
              <label for="pwd">Email</label>
              <input type="email" class="form-control" id="pwd" value=" <?php echo $row['email'];?>" name="email" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>


                        <?php 
include("conn.php");
    $query ="SELECT department FROM department";
    $result1 = $conn->query($query);
    if($result1->num_rows> 0){
      $options= mysqli_fetch_all($result1, MYSQLI_ASSOC);
    }
?>

<div class=" row container form-group">
<label for="department">Choose department:</label>

<select  class=" form-control mb-3" id="department" name="dep">
<option value=" <?php echo $row['dep'];?>"> <?php echo $row['dep'];?></option>
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
                <label for="pwd">Student contact</label>
                <input type="text" class="form-control" id="studt-con" value=" <?php echo $row['student_con'];?>" name="number" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            

              <div class="form-group">
                <label for="pwd">Place of location
                </label>
                <input type="text" class="form-control" id="parent-con" value=" <?php echo $row['location'];?>" name="location" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<?php 
 include('conn.php');


 if(isset($_POST['submit'])){
 

     $firstname=$_POST['firstname'];
     $username=$_POST['username'];
     $email=$_POST['email'];
     $student_id=$_POST['student_id'];
     $dep=$_POST['dep'];
     $contact=$_POST['number'];
     $location=$_POST['location'];

     $sql = "UPDATE `users` SET `student_id`='$student_id',`firstname`='$firstname',`username`='$username',`email`='$email',`dep`='$dep',`student_con`='$contact',`location`='$location' WHERE id=$id";
     if(mysqli_query($conn,$sql)){
       echo"<script>alert('Your Profile was Updated'); window.location='profile.php'</script>";
     }
     else{
       echo"<script>alert('Retry'); window.location='profile.php'</script>" ;
     }
    }
   ?>
          <!--!modal-->
      <!--!profile-->
 

    <!-- start #footer -->
<?php include("common/footer.php")?>
  <!-- !start #footer -->
   

    <!-- Owl Carousel Js file -->
<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

<!-- Custom Javascript -->
<script src="./js/script.js"></script>
</body>
</html>