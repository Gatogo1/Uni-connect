<?php 

include('conn.php');

if (isset($_POST['submit'])) {

$cert=$_POST['cert'];
$lev=$_POST['lev'];
$sec=$_POST['sec'];
$class=$_POST['class'];
$dep=$_POST['dep'];
$codes=$_POST['code'];
$dep_code=substr($dep,0,3);
$code=$dep_code."".$lev."".$class."".$sec."".$cert;
   
$sql = "INSERT INTO `users`( `codes`,`status`) VALUES ('$codes',1)"; 
if(mysqli_query($conn,$sql)){
 
      }

}
?>
<?php echo $codes ?>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" class="form border-dark w-100 p-3">
      
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

              <input type="hidden" name="code" value="<?php echo $code ?>">
          <input class="btn bg-warning" type="submit"  name="submit" value="submit">
        </form>


