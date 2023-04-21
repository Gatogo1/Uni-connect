<?php include("common/head.php");?>
<style>
    .table{
        font-size: 12px;
        margin: px;
        
    }

    .table tr ,td,th{
        text-align: center;
    }
    .btn{
        font-size: 13px;
    }
</style>

<body>
    <!---Tittle bar-->
    <?php include("common/tittle.php");?>
    <!--end tittle bar-->
    <div class="container-fluid">

        <div class="row">
        <?php include("common/menu.php") ;?>
        <?php include("common/info.php") ;?>
           
                <hr style="background-color: red;">
                <!-- end info-->
                <!--Table-->
                <h5 class='mb-3'>News Management</h5>
                <a href="edit-news.php"class="btn btn-primary m-2">News</a>
<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Image
      </th>
      <th class="th-sm">Title
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


 $sql="select * from news";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {



        ?>
    <tr>
      <td>
        <img style="width: 80px;;" src="upload/<?php echo $row['image'] ;?>" alt="">
      </td>
      <td><?php echo $row['tittle'] ;?></td>
      <td><?php echo $row['by'] ;?></td>
      <td><?php echo $row['date'] ;?></td>
    

      <?php
      $color="";
      $active="green";
      $inactive="red";
      $text="";
      if( $row['status']==1){
       $text="Active";
      $color=$active;
      }
      else{
        $text="Inactive";
        $color=$inactive;
      }
      
      ?>
      <td><span style="background: <?php echo $color ?>; color:aliceblue; padding:5px;"><?php echo $text ?></span></td>
      <td>

       <div class="row">
       <div class="btn col-sm-1 m-2">
            <a href="" class="btn bg-warning"><i class="fa fa-ban" aria-hidden="true"></i></a>
        </div>
        <div class="btn col-sm-1 m-2">
            <a href="" tittle="Deactivate" class="btn bg-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        </div>

        <div class="btn col-sm-1 m-2">
            <a href="" class="btn bg-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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