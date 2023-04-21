<?php include("common/check_login.php")  ;?>

<?php include("conn.php")  ;?>
<?php include("common/head.php")  ;?>

    <style>

        body{
            background-color: rgb(46, 121, 121);
        }
        .row .button{
            margin: 30px;
        }
.button-head{
    text-align: center;
}

    .button a{
        background-color: aqua;
        border-radius: 10px;
        padding: 5px;
    }


    .button a{
       color: #000;
    }
    
    .button:hover{
        cursor: pointer;
    }

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

    </style>
    <style>
.filterDiv {
 
  display: none;
}

.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  margin: 10px;
  background-color: #f1f1f1;
  cursor: pointer;
}



.btn.active {
  background-color: blue;
  color: white;
}
</style>
</head>
<?php ?>
<body>

<?php include("common/logo.php") ;?>
<div class="container">
<?php include("common/day_activity.php") ;?>



   

   
<!--Time table-->

  </div>

<!--!time-table-->
<center>
<!---<h2><?php echo $_SESSION['dep']?></h2> --->

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn bg-warning " onclick="filterSelection('monday')"> Monday</button>
  <button class="btn bg-secondary" onclick="filterSelection('tuesday')"> Tuesday</button>
  <button class="btn bg-primary" onclick="filterSelection('wednesday')"> Wednesday</button>
  <button class="btn bg-success" onclick="filterSelection('thursday')"> Thursday</button>
  <button class="btn bg-info" onclick="filterSelection('friday')"> Friday</button>

</div>




</div>

<div class="container ">
 <!--
  <div class="filterDiv monday ">
    <table class="table table-striped table-warning">

  <thead>
  <tr>
  
  <td style="font-size:25px;font-weight:bold;" colspan=" 4">Monday</td>

</tr>
    <tr>
      <th scope="col">Course hour</th>
      <th scope="col">Time</th>
      <th scope="col">Lectures</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>
  <?php 
/* Local Database*/

include("conn.php");



 $sql="SELECT * FROM classtimetable  ";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {

  $code=$_SESSION["code"];
  $dep=$_SESSION['dep'];

        ?>
    <tr>
      <th scope="row"><?php echo  $row['code'];?></th>
      <td><?php echo  $row['start'].'-'.$row['end'];?></td>
      <td><?php echo  $row['Subject'];?></td>
      <td><?php echo  $row['location'];?></td>
    </tr>
<?php } ?>
  </tbody>
</table>
  </div> ---->


  <div class="filterDiv monday">
  <table class="table table-striped table-warning">

<thead>
<tr>

<td style="font-size:25px;font-weight:bold;" colspan=" 4">Monday</td>

</tr>
  <tr>

    <th scope="col">Time</th>
    <th scope="col">Lectures</th>
    <th scope="col">Location</th>
  </tr>
</thead>
<tbody>
<?php 
/* Local Database*/

include("conn.php");

$dep=$_SESSION['dep'];


 $sql="SELECT * FROM classtimetable WHERE day='Monday' AND code='$code' ";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {

  $code=$_SESSION["code"];
  $dep=$_SESSION['dep'];

        ?>
  <tr>

      <td><?php echo  $row['start'].'-'.$row['end'];?></td>
      <td><?php echo  $row['Subject'];?></td>
      <td><?php echo  $row['location'];?></td>
  </tr>
<?php }?>

</tbody>
</table>
  </div>

  
  <div class="filterDiv tuesday">
  <table class="table table-striped table-secondary">

<thead>
<tr>

<td style="font-size:25px;font-weight:bold;" colspan=" 4">Tuesday</td>

</tr>
  <tr>

    <th scope="col">Time</th>
    <th scope="col">Lectures</th>
    <th scope="col">Location</th>
  </tr>
</thead>
<tbody>
  
<?php 
/* Local Database*/

include("conn.php");

$dep=$_SESSION['dep'];


 $sql="SELECT * FROM classtimetable WHERE day='Tuesday' AND code='$code'";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {

  $code=$_SESSION["code"];
  $dep=$_SESSION['dep'];

        ?>
  <tr>
 
      <td><?php echo  $row['start'].'-'.$row['end'];?></td>
      <td><?php echo  $row['Subject'];?></td>
      <td><a href="#" class="btn bg-secondary"><?php echo  $row['location'];?></a></td>
  </tr>
  <?php }?>
</tbody>
</table>
  </div>
  
  <div class="filterDiv  wednesday">
  <table class="table table-striped table-primary">

<thead>
<tr>

<td  style="font-size:25px;font-weight:bold;"colspan=" 4">Wednesday</td>

</tr>

  <tr>
   
    <th scope="col">Time</th>
    <th scope="col">Lectures</th>
    <th scope="col">Location</th>
  </tr>
</thead>
<tbody>


<?php 
/* Local Database*/

include("conn.php");

$dep=$_SESSION['dep'];


 $sql="SELECT * FROM classtimetable WHERE day='Wednesday' AND code='$code' ";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {

  $code=$_SESSION["code"];
  $dep=$_SESSION['dep'];

        ?>
  <tr>
  
      <td><?php echo  $row['start'].'-'.$row['end'];?></td>
      <td><?php echo  $row['Subject'];?></td>
      <td><?php echo  $row['location'];?></td>
  </tr>
<?php }?>

</tbody>
</table>
  </div>
  <div class="filterDiv  thursday">
  <table class="table table-striped table-success">

<thead>
<tr>

<td style="font-size:25px;font-weight:bold;" colspan=" 4">Thursday</td>

</tr>
  <tr>
    
    <th scope="col">Time</th>
    <th scope="col">Lectures</th>
    <th scope="col">Location</th>
  </tr>
</thead>
<tbody>
  <tr>
  <?php 
/* Local Database*/

include("conn.php");

$dep=$_SESSION['dep'];


$sql="SELECT * FROM classtimetable WHERE day='Thursday' AND code='$code' ";
$result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

while ($row=mysqli_fetch_array($result)) {

 $code=$_SESSION["code"];
 $dep=$_SESSION['dep'];

        ?>
  
      <td><?php echo  $row['start'].'-'.$row['end'];?></td>
      <td><?php echo  $row['Subject'];?></td>
      <td><?php echo  $row['location'];?></td>
  </tr>
  <?php } ?>
</tbody>
</table>
  </div>
  <div class="filterDiv friday">
  <table class="table table-striped table-info">

<thead>
<tr>

<td style="font-size:25px;font-weight:bold;"colspan=" 4">Friday</td>

</tr>
  <tr>
    
    <th scope="col">Time</th>
    <th scope="col">Lectures</th>
    <th scope="col">Location</th>
  </tr>
</thead>
<tbody>
<?php 
/* Local Database*/

include("conn.php");

$dep=$_SESSION['dep'];


$sql="SELECT * FROM classtimetable WHERE day='Friday' AND code='$code' ";
$result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

while ($row=mysqli_fetch_array($result)) {

 $code=$_SESSION["code"];
 $dep=$_SESSION['dep'];

        ?>
  <tr>
  
      <td><?php echo  $row['start'].'-'.$row['end'];?></td>
      <td><?php echo  $row['Subject'];?></td>
      <td><?php echo  $row['location'];?></td>
  </tr>
<?php }?>
</tbody>
</table>
  </div>
</div>



</center>



<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

/* Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}*/
</script>
    <!-- start #footer -->
<?php include("common/footer.php") ;?>


