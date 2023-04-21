<!--ads-->
<?php
$sql = "SELECT * FROM ads WHERE cat='dep' AND status='1'";

$result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);
?>
<section class="ads">
    <center>
    <div  class="  mt-3 w-50 container ads1">
     <a href=""> <img  style="width: 100%;" src="admin/uploadAds/<?php echo $row['image']?>" alt="Third slide"></a>
    </div>
  </center>
  </section>
  <!--!ads-->