<?php include("common/head.php") ;?>
<body>
<?php include("common/tittle.php") ;?>
    <div class="container-fluid">
        <div class="row">
        <?php include("common/menu.php") ;?>
        <?php include("common/info.php") ;?>           
                <hr style="background-color: red;">
                  <h5 class='mb-3'>Class Time Table</h5>
                <button type="button" class="btn btn-primary m-2" data-toggle="modal" data-target="#myModal">Add New</button>
<!--Show table by---->
<h4>Filter Table</h4>
<form class="m-6  form-inline" method="post" action="class_time_table_by_department.php">
<label for="cars">Choose Session:</label>
<select  class="form-control w-10 bg-warning" id="session" name="session">
  <option value="Morning">Morning</option>
  <option value="Evening">Evening</option>
</select>
<label for="cars">Choose Level:</label>
<select  class="form-control w-10 bg-secondary" id="level" name="year">
  <option value="100">100</option>
  <option value="200">200</option>
  <option value="300">300</option>
  <option value="400">400</option>
</select>

</select>
<label for="cars">Choose Class </label>
<select  class="form-control w-10 bg-secondary" id="level" name="class">
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
</select>


<?php 
include("conn.php");
    $query ="SELECT department FROM department";
    $result1 = $conn->query($query);
    if($result1->num_rows> 0){
      $options= mysqli_fetch_all($result1, MYSQLI_ASSOC);
    }
?>
<label for="department">Choose department:</label>

<select  class="form-control w-25 bg-info" id="department" name="department">
<?php 
  foreach ($options as $option) {
  ?>
  <option value="<?php echo $option['department']; ?>"><?php echo $option['department']; ?> </option>
    <?php 
    }
   ?>
</select>




<input class="bg-success" type="submit" name="submits" value="Submit">
</form>




<!---end shaw table by--->




<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">Days
            </th>
            <th class="th-sm">Department
            </th>
            <th class="th-sm">Time
          </th>
            <th class="th-sm">Subject
            </th>
            <th class="th-sm">Location
            </th>
            <th class="th-sm">Course code
          </th>
            <th class="th-sm">Level
            </th>
            <th class="th-sm">Action
            </th>
          </tr>
    </thead>
    <tbody>
      
  
    <?php 
/* Local Database*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atu_student_con_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


 $sql="select * from classtimetable";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {



        ?>
        <tr>
          <td>
          <?php echo  $row['day'];?>
          </td>
          <td><?php echo  $row['department'];?></td>
          <td><?php echo  $row['start'].'-'.$row['end'];?></td>
          <td><?php echo  $row['Subject'];?></td>
          <td><?php echo  $row['location'];?></td>
          <td><?php echo  $row['code'];?></td>
          <td><?php echo  $row['level'];?></td>
          <td>
    
           <div class="row">
            <div class="btn col-sm-1 m-2">
            <a name="btn"  title="Read/Reply" id="Btn" class="btn btn-primary" href="<?=$link; ?>" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
            </div>
    
            <div class="btn col-sm-1 m-2">
           
          <a name="btn"   title="When click it will auto delete" id="btndel"  onclick="deleteProfile();" class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        
            </div>
        
           </div>
            
          </td>
        </tr>
      
    <?php } ?>
        
    </tbody>
    <tfoot>
        <tr>
            <th class="th-sm">Days
            </th>
            <th class="th-sm">Department
            </th>
            <th class="th-sm">Time
          </th>
            <th class="th-sm">Subject
            </th>
            <th class="th-sm">Location
            </th>
            <th class="th-sm">Course code
          </th>
            <th class="th-sm">Level
            </th>
            <th class="th-sm">Action
            </th>
          </tr>
    </tfoot>
  </table>
    
 <!-- time-table-->

           <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Time Table</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <center>
            <div class="logo">
                <img style="width: 200px; ;" src="image/picture1.png" alt="">
            </div>
        <form method="post" class="form  border-dark badge-info  mt- p-3">
            <div class="form-group">
              <label for="dep">Select Department</label>
              <?php 
include("conn.php");
    $query ="SELECT department FROM department";
    $result1 = $conn->query($query);
    if($result1->num_rows> 0){
      $options= mysqli_fetch_all($result1, MYSQLI_ASSOC);
    }
?>
<label for="department">Choose department:</label>

<select class="form-control" id="department" name="dep">
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
                  <option value="M">Morning</option>
                  <option value="E">Evening</option>
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


            <div class="form-group">
                <label for="course">Subject</label>
                <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>

              <div class="form-group">
                <label for="course">Location</label>
                <input type="text" class="form-control" id="location" placeholder="Enter Location" name="location" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>

              <div class="form-group">
                <label for="course">Lecture</label>
                <input type="text" class="form-control" id="Lecture" placeholder="Enter Lecture Name" name="lecture" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>


              <div class="form-group">
                <label for="dep">Day</label>
               <select name="day" id="day">
                  <option value="Monday">Monday</option>
                  <option value="Tuesday">Tuesday</option>
                  <option value="Wednesday">Wednesday</option>
                  <option value="Thursday">Thursday</option>
                  <option value="Friday">Friday</option>
               </select>
              </div>

              <div class="form-group">
                <label for="course">Start Time</label>
                <input type="text" class="form-control" id="str-time" name="str-time" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>

              <div class="form-group">
                <label for="course">End Time</label>
                <input type="text" class="form-control" id="end-time" name="end-time" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
          <input type="hidden" name="code" value="<?php echo $code ?>">

<!-- Sign in button -->
<button class="btn btn-success  btn-block" name="submit" type="submit">Submit</button>


</form>

<?php 
include("conn.php") ;

if (isset($_POST['submit'])) {
$dep=$_POST['dep'];
$lev=$_POST['lev'];
$sec=$_POST['sec'];
$cert=$_POST['cert'];
$class=$_POST['class'];
$subject=$_POST['subject'];
$location=$_POST['location'];
$lecture=$_POST['lecture'];
$hour=$_POST['hour'];
$day=$_POST['day'];
$str_time=$_POST['str-time'];
$end_time=$_POST['end-time'];
$code=$_POST['code'];


$dep_code=substr($dep,0,3);

$code=$dep_code."".$lev."".$class."".$sec."".$cert;



$sql =" INSERT INTO `classtimetable`(  `department`, `code`, `level`, `Subject`, `day`, `start`, `end`, `location`, `lecture`) VALUES ('$dep','$code','$lev','$subject','$day','$str_time','$end_time','$location','$lecture')";
    
    
if(mysqli_query($conn,$sql)){
echo"<script>alert('Class timetable added successful '); window.location='class_time_table.php'</script>";
}
else{
  echo"<script>alert('Class timetable not added  '); window.location='class_time_table.php'</script>";
}

}




?>





</center>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>     

            </div>

        </div>

    </div>
                

            </div>

        </div>

    </div>



<style>
    
    * { box-sizing: border-box; }

body {
  font-family: sans-serif;
}



/* ---- isotope ---- */

.grid {
  background: #EEE;
  max-width: 1200px;
}

/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ui group */

.ui-group {
  display: inline-block;
  margin-right: 20px;
}

.ui-group h3 {
  display: inline-block;
  margin-right: 0.2em;
  font-size: 16px;
}

.ui-group .button-group {
  display: inline-block;
  margin-right: 20px;
}

/* color-shape */

.color-shape {
  width: 70px;
  height: 70px;
  margin: 5px;
  float: left;
}
 
.color-shape.round {
  border-radius: 35px;
}
 
.color-shape.big.round {
  border-radius: 75px;
}
 
.color-shape.red { background: red; }
.color-shape.blue { background: blue; }
.color-shape.yellow { background: yellow; }
 
.color-shape.wide, .color-shape.big { width: 150px; }
.color-shape.tall, .color-shape.big { height: 150px; }





    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
}

@media (max-width:480px){
    .tab {
    
    font-size: 10px;
    margin: none;
    }
    }
    .btn{
        font-size: 13px;
    }
</style>

              
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    
<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>


<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">



        
 
  <!--  isotope plugin cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
   

<script>






    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});



</script>
    
        
    </body>
</html>