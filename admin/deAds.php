<?php include("common/head.php") ;?>
<body>
<?php include("common/tittle.php") ;?>
    <div class="container-fluid">

        <div class="row">
        <?php include("common/menu.php") ;?>
        <?php include("common/info.php") ;?>
           
                <hr style="background-color: red;">
                
                
                   <!--Table-->
                   <h5 class='mb-3'>Department Ads Management</h5>
                   <div class="btn-group" role="group" aria-label="Third group">
                          <a href="navAds.php" type="button" class="btn btn-secondary">Navbar</a>
                    </div>
                    <div class="btn-group" role="group" aria-label="Third group">
                          <a href="genAds.php" type="button" class="btn btn-secondary">General</a>
                    </div>
                <a href="addAds.php"class="btn btn-primary m-2">Add Ads</a>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Image
      </th>
      <th class="th-sm">Title
      </th>
      <th class="th-sm">Department
      </th>
      <th class="th-sm"> by
    </th>
      <th class="th-sm">Date
      </th>
      <th class="th-sm"> Position
    </th>
      <th class="th-sm">Action
      </th>
    </tr>
  </thead>
  <tbody>
  <?php 
/* Local Database*/

include("conn.php");


 $sql="SELECT `id`, `tittle`, `image`, `cat`, `by`, `status`, `date`, `contact` FROM `ads` WHERE cat='dep'";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {

    $data=$row['id'];

    $link="deactivate/navAdsde.php?id=".urlencode(base64_encode($data));
    $link1="update/navAdsup.php?id=".urlencode(base64_encode($data));
    $link2="delete/navAdsde.php?id=".urlencode(base64_encode($data));

        ?>
    <tr>
      <td>
        <img style="width: 80px;;" src="uploadAds/<?php echo $row['image'] ;?>" alt="">
      </td>
      <td><?php echo $row['tittle'] ;?></td>
      <td><?php echo $row['tittle'] ;?></td>
      <td><?php echo $row['by'] ;?></td>
      <td><?php echo $row['date'] ;?></td>
    

      <?php
      $color="";
      $ac="";
      $de="";
      $active="green";
      $inactive="red";
      $text="";
      if( $row['status']==1){
       $text="Active";
      $color=$active;
     
      $ac="none";
      $de="block";
      }
      else{
        $text="Inactive";
        $color=$inactive;
        $ac="block";
      $de="none";
      }
      
      ?>
      <style>


      </style>
      <td><span style="background: <?php echo $color ?>; color:aliceblue; padding:5px;"><?php echo $text ?></span></td>
      <td>

       <div class="row">
      <!-- <div class="btn col-sm-1 m-2">
            <a href="<?=$link; ?>" tittle="activate" class="btn ac bg-info"><i class="fa fa-check-square-o" aria-hidden="true"></i></a>
        </div> ---->

        <div class="btn col-sm-1 m-2">
            <a href="<?=$link; ?>" tittle="Deactivate" class="btn de bg-warning"><i class="fa fa-ban" aria-hidden="true"></i></a>
        </div>

        <div class="btn col-sm-1 m-2">
            <a href="<?=$link1; ?>" tittle="edit" class="btn bg-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        </div>

        <div class="btn col-sm-1 m-2">
            <a href="<?=$link2; ?>" class="btn bg-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        </div>
    
       </div>
        
      </td>
    </tr>

   <?php } ?>
  
      
  </tbody>
  <tfoot>
    <tr>
        <th class="th-sm">Image
        </th>
        <th class="th-sm">Title
        </th>
        <th class="th-sm">Department
      </th>
        <th class="th-sm"> by
      </th>
        <th class="th-sm">Date
        </th>
        <th class="th-sm"> Position
      </th>
        <th class="th-sm">Action
        </th>
      </tr>
  </tfoot>
</table>
                           
                
  

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