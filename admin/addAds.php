<?php include("common/head.php");?>

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
                  <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
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
                    <label for="comment">Owner contact</label>
                    <input type="number" class="form-control" id="title"  name="contact">
                  </div>
                  <input type="hidden" class="form-control" id="title" value="<?php echo $_SESSION['usertype'] ?>" name="by">

           

    <!-- Sign in button -->
    <button class="btn btn-success   btn-block" name="submit" type="submit">Submit </button>


</form>

<?php 


include('conn.php');


if(isset($_POST['submit'])){

	$filename = $_FILES['image']['name'];
    $tittle=$_POST['title'];
    $cat=$_POST['cat'];
    $contact=$_POST['contact'];
    $by=$_POST['by'];


    
    echo $_POST['title'];
	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'uploadAds/'.$filename)){
		// Image db insert sql
		$sql = "INSERT INTO `ads`( `tittle`, `image`, `cat`, `by`, `contact`, `status`) VALUES ('$tittle','$filename','$cat','$by','$contact',1)";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('ads added'); window.location='index.php'</script>";
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