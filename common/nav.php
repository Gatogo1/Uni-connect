 <!---carosel-->
 
 <style>
  .carousel{
    
  }

  
@media only screen and (max-width: 425px){
	/*Small smartphones [325px -> 425px]*/



}
 </style>
 
 
 
 <div  id=" carouselExampleIndicators" class=" carousel slide"  data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./image/b1.jpg" alt="First slide">
          </div>
          <?php 
/* Local Database*/

include("conn.php");


 $sql="SELECT `id`, `tittle`, `image`, `cat`, `by`, `status`, `date`, `contact` FROM `ads` WHERE cat='nav'";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {

    $data=$row['id'];

    
        ?>
          <div class="carousel-item ">
            <img class="d-block w-100" src="admin/uploadAds/<?php echo $row['image'] ?>" alt="Second slide">
          </div>
        <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
<!--!carousel-->