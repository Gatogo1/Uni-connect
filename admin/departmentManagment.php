<?php include("common/head.php") ;?>
<?php include('usablel/dep.php');?>
<body>
<?php include("common/tittle.php") ;?>
    <div class="container-fluid">

        <div class="row">
        <?php include("common/menu.php") ;?>
        <?php include("common/info.php") ;?>
           
                <hr style="background-color: red;">
                
                
                
   <!--Table-->
   <h5 class='mb-3'>Departments Management</h5>
                <button type="button" class="btn btn-primary m-2" data-toggle="modal" data-target="#myModal">Add Department</button>
<table id="dtBasicExample" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Department
      </th>
      <th class="th-sm">HOD
      </th>
      <th class="th-sm"> Location
    </th>
    <th class="th-sm"> Total users
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


 $sql="select * from department";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));


 while ($row=mysqli_fetch_array($result)) {
  $data=$row['id'];

  $link="delete/del_dep.php?id=".urlencode(base64_encode($data));


        ?>
       

    <tr>
      <td>
      <?php echo  $row['department'];?> 
      </td>
      <td><?php echo  $row['HOD'];?></td>
      <td><?php echo  $row['location'];?></td>
      <td>UNKNOWN</td>
      <td>

       
  
            <a href="" class="btn btn-sm  bg-info "><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

            <a  href="<?=$link; ?>" class="btn btn-sm  bg-danger "><i class="fa fa-sm fa-trash-o" aria-hidden="true"></i></a>
     
    
        
      </td>
    </tr>
    <?php }?>

   
  
      
  </tbody>
  <tfoot>
    <tr>
        <th class="th-sm">Department
        </th>
        <th class="th-sm">HOD
        </th>
        <th class="th-sm"> Location
      </th>
      <th class="th-sm"> Total users
      </th>
        <th class="th-sm">Action
        </th>
      </th>
    
      </tr>
  </tfoot>
</table>
                           
                
           <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Department  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post" class="was-validated p-3">
            <div class="form-group">
              <label for="department">Department Name</label>
              <input type="text" class="form-control" id="department" placeholder="Enter Department" name="dep" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <input type="hidden" class="form-control" id="department" name="code1mh" value="<?php echo $code1mh ?>" required>
            <input type="hidden" class="form-control" id="department" name="code1eh" value="<?php echo $code1eh ?>" required>
            <input type="hidden" class="form-control" id="department" name="code1mb" value="<?php echo $code1mb ?>" required>
            <input type="hidden" class="form-control" id="department" name="code1eb" value="<?php echo $code1eb ?>" required>

            <input type="hidden" class="form-control" id="department" name="code2mh" value="<?php echo $code2mh ?>" required>
            <input type="hidden" class="form-control" id="department" name="code2eh" value="<?php echo $code2eh ?>" required>
            <input type="hidden" class="form-control" id="department" name="code2mb" value="<?php echo $code2mb ?>" required>
            <input type="hidden" class="form-control" id="department" name="code2eb" value="<?php echo $code2eb ?>" required>

            <input type="hidden" class="form-control" id="department" name="code3mh" value="<?php echo $code3mh ?>" required>
            <input type="hidden" class="form-control" id="department" name="code3eh" value="<?php echo $code3eh ?>" required>
            <input type="hidden" class="form-control" id="department" name="code3mb" value="<?php echo $code3mb ?>" required>
            <input type="hidden" class="form-control" id="department" name="code3eb" value="<?php echo $code3eb ?>" required>

  
            <input type="hidden" class="form-control" id="department" name="code4mb" value="<?php echo $code4mb ?>" required>
            <input type="hidden" class="form-control" id="department" name="code4eb" value="<?php echo $code4eb ?>" required>
            
           





            <div class="form-group">
                <label for="hod">HOD</label>
                <input type="text" class="form-control" id="hod" placeholder="Enter HOD name" name="hod" >
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>

            <!-- <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>

              --> 
             
            <div class="form-group">
              <label for="pwd">Location</label>
              <input type="text" class="form-control" id="pwd" placeholder="Enter location" name="location" >
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>

            
            
            <button  name="submit" type="submit" class="btn btn-primary">Submit</button>
          </form>

         


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    
<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>


<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

    
<script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});


</script>
    

            </div>

        </div>

    </div>







