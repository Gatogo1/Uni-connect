<!DOCTYPE html>
<html lang="en">
<?php include("common/head.php");?>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <title>Edit News</title>
</head>
<body>
           
          <!-- Default form subscription -->
          <center>

               <h4>Add News</h4>
            <form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-50 p-3">
                <div class="form-group">
                  <label for="title">News Title</label>
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
                    <option value="Academics">Academics</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Blogs">Blogs</option>
                    <option value="Sports">Sports</option>
                   </select>
                  </div>
      
                  <div class="form-group">
                    <label for="comment">News Details</label>
                    <textarea value="3"  class="form-control" rows="5"  id="summernote"   name="news"></textarea>
                  </div>
                  <input type="hidden" class="form-control" id="title" value="<?php echo $usertype ?>" name="by">

    <?php $_SESSION['usertype']=$usertype ?>

    <!-- Sign in button -->
    <button class="btn btn-success   btn-block" name="submit" type="submit">Submit</button>


</form>

<?php 


include('conn.php');


if(isset($_POST['submit'])){

	$filename = $_FILES['image']['name'];
    $tittle=$_POST['title'];
    $cat=$_POST['cat'];
    $news=$_POST['news'];
    $by=$_POST['by'];

    
    echo $_POST['title'];
	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename)){
		// Image db insert sql
		$sql = "INSERT INTO `news`( `tittle`, `image`, `cat`, `news`,`status`) VALUES ('$tittle','$filename','$cat','$news',1)";
		if(mysqli_query($conn,$sql)){
		  echo 'News added successfully';
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


</center>
<!-- Default form subscription --> 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>    
        $('#summernote').summernote({
       
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
            </script>

<script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
    
        





</body>
</html>