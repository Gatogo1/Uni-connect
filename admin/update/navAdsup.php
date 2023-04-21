<?php 
include('../common/head.php');
include('../conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);
}
?>
<!-----

<?php

/*
if (isset($_POST['submit'])) {
	$filename = $_FILES['image']['name'];
    $tittle=$_POST['title'];
    $cat=$_POST['cat'];
    $contact=$_POST['contact'];
    $by=$_POST['by'];
    $status=$_POST['status'];


    

    // Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'../uploadAds/'.$filename)){
		// Image db insert sql
    $sql = "UPDATE ads SET `tittle`='$tittle',`image`='$filename',`cat`='$cat',`by`='$by',`status`='$status',`contact`='$contact' WHERE id=$id2";

		if(mysqli_query($conn,$sql)){
      echo"<script>alert('Ads updated successfully '); window.location='../navAds.php'</script>";
		}
		else{
      echo"<script>alert('Ads not updated '); window.location='../navAds.php'</script>";
		  echo 'Error: '.mysqli_error($conn);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
	}
	}
} 

*/
?>
   
  
            <center>
<?php 
$sql = "SELECT * FROM ads WHERE id='$id2' ";

$result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);


?>
<h4>Add ads</h4>
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-50 p-3">
 <div class="form-group">
   <label for="title">Ads Title</label>
   <input type="text" class="form-control" id="title" value="<?php echo $row['tittle'] ?>" name="title" required>
   <div class="valid-feedback">Valid.</div>
   <div class="invalid-feedback">Please fill out this field.</div>
 </div>
 <div class="form-group">
 <label class="form-label" for="form6Example2">Select Image 1</label>
<input type="file" class="form-control-file border" name="image">
 </div>

 <div class="form-group">
     <label for="pwd">category</label>
    <select class=" form-control w-50"name="cat" id="cat">
    <option value="<?php echo $row['cat'] ?>"><?php echo $row['cat'] ?></option>
     <option value="nav">Navbar</option>
     <option value="dep">Department</option>
     <option value="selling">Shop</option>
     <option value="organ">Organization</option>
    </select>
   </div>

   <div class="form-group">
     <label for="pwd">Status</label>
    <select class=" form-control w-50"name="status" id="cat">
    <option value="<?php echo $row['status'] ?>">chose status</option>
     <option value="1">Active</option>
     <option value="0">Deactivate</option>

    </select>
   </div>

   <div class="form-group">
     <label for="comment">Owner contact</label>
     <input type="number" class="form-control" value="<?php echo $row['contact'] ?>" id="title"  name="contact">
   </div>
   <input type="hidden" class="form-control" id="title" value="<?php echo $_SESSION['usertype'] ?>" name="by">



<!-- Sign in button 
<button class="btn btn-success   btn-block" name="submit" type="submit">Submit </button>


</form>
---->





<!DOCTYPE html>
<html lang="en">

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <title>Add ads</title>
</head>
<body>
           
          <!-- Default form subscription -->
          <center>

               <h4>Add ads</h4>
            <form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-50 p-3">
                <div class="form-group">
                  <label for="title">Ads Title</label>
                  <input type="text" class="form-control" id="title"  value="<?php echo $row['tittle'] ?>" name="title" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                <label class="form-label" for="form6Example2">Select Image 1</label>
      <input type="file" class="form-control-file border" name="image">
                </div>

                <div class="form-group">
                    <label for="pwd">category</label>
                   <select class=" form-control w-50"name="cat" id="cat">
                    <option value="nav">Navbar</option>
                    <option value="dep">Department</option>
                    <option value="selling">Shop</option>
                    <option value="organ">Organization</option>
                   </select>
                  </div>

                  <div class="form-group">
     <label for="pwd">Status</label>
    <select class=" form-control w-50"name="status" id="cat">
    <option value="<?php echo $row['status'] ?>">chose status</option>
     <option value="1">Active</option>
     <option value="0">Deactivate</option>

    </select>
   </div>
                  <div class="form-group">
                    <label for="comment">Owner contact</label>
                    <input type="number" class="form-control" id="title"  name="contact">
                  </div>
                  <input type="hidden" class="form-control" id="title" value="<?php echo $_SESSION['usertype'] ?>" name="by">

           

    <!-- Sign in button -->
    <button class="btn btn-success   btn-block" name="submit" type="submit">Submit </button>


</form>

<?php 


include('../conn.php');


if(isset($_POST['submit'])){

	$filename = $_FILES['image']['name'];
    $tittle=$_POST['title'];
    $cat=$_POST['cat'];
    $contact=$_POST['contact'];
    $by=$_POST['by'];
    $status=$_POST['status'];


    
    echo $_POST['title'];
	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'../uploadAds/'.$filename)){
		// Image db insert sql
    $sql = "UPDATE `ads` SET `tittle`='$tittle',`image`='$filename',`cat`='$cat',`by`='$by',`contact`='$contact',`status`='$status' WHERE id='$id2'";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('ads added'); window.location='../index.php'</script>";
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
	}
	}
} 

?>


<script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
    
        





</body>
</html>