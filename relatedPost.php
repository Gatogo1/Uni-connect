
    



<div class=" shadow-lg p-3 mb-5 rounded  col-lg-4 new-rel">
                <h2>Related Post</h2>
                <hr>
                <?php 
/* Local Database*/

include("conn.php");


 $sql="select * from news where cat='$cat'";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {
  $data=$row['id'];

  $link="new_datails.php?id=".urlencode(base64_encode($data));


        ?>
                <div class="row  mb-3 shadow-lg">
  <div class="column1" >
  <img style="width:130px; height: 130px;" src="admin/upload/<?php echo $row['image'] ;?>" alt="">
  </div>
  <div class="column2" >
  <p class="text-white">* <?php echo $row['tittle'] ;?> </p>
  </div>
  
</div>
<?php }?>