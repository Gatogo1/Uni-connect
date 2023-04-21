
<?php include("conn.php")  ;?>

<?php include("common/head.php")  ;?>
<?php include("common/check_login.php") ;?>
<?php/* include("common/logo.php") */;?>

<div class="">
<?php include("common/day_activity.php") ;?>

    <?php include("common/nav.php") ;?>

    <!-- Top Sale -->
    <section id="top-sale">
      <div class=" py-5">
        <h4 class="font-rubik font-size-20">Latex News</h4>
        <hr>
        <!-- owl carousel -->

        
          <div class=" shadow-lg  owl-carousel owl-theme">
          <?php 
/* Local Database*/

include("conn.php");


 $sql="select * from news";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {

  $data=$row['id'];

  $link="new_datails.php?id=".urlencode(base64_encode($data));

        ?>
            <div class="item py-2">
              <div class="product font-rale">
                <a href="<?=$link; ?>"><img class="new-img" src="admin/upload/<?php echo $row['image']?>" alt="product1" class="img-fluid"></a>
                <div class="item-content">
                  <div class="main-content">
                    <div class="meta-category">
                      <span><?php echo $row['cat']?></span>
                    </div>
                    <a href="<?=$link; ?>"><h4><?php echo $row['tittle']?></h4></a>
                    <ul class="post-info">
                      <li><a href="<?=$link; ?>"><?php echo $row['by']?></a></li>
                      <li><a href="<?=$link; ?>"><?php echo $row['date']?></a></li>
                      <li><a href="<?=$link; ?>">48 Comments</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
           <?php } ?>

          </div>
        <!-- !owl carousel -->
      </div>
    </section>
  <!-- !Top Sale -->
   

<!--ads-->
<section class="ads">
<?php include("common/depAds.php")  ;?>
</section>
<!--!ads-->
<!-- Top intertainment -->
<section id="top-sale">
  <div class="mt-5  shadow-lg ">
    <h4 class="font-rubik text-center font-size-20"> <b> Academic News</b></h4>
 
    <!-- owl carousel -->
      <div class="  shadow-lg  rounded owl-carousel owl-theme">
      <?php 
/* Local Database*/

include("conn.php");


 $sql="select * from news where cat='Academics'";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {
  $data=$row['id'];

  $link="new_datails.php?id=".urlencode(base64_encode($data));


        ?>
            <div class="item ">
              
              <div class="product font-rale">
                <a href="<?=$link; ?>"><img class="new-img" src="admin/upload/<?php echo $row['image']?>" alt="product1" class="img-fluid"></a>
                <div class="item-content">
                  <div class="main-content">
                    <div class="meta-category">
                      <span><?php echo $row['cat']?></span>
                    </div>
                    <a href="post-details.html"><h4><?php echo $row['tittle']?></h4></a>
                    <ul class="post-info">
                      <li><a href="<?=$link; ?>"><?php echo $row['by']?></a></li>
                      <li><a href="<?=$link; ?>"><?php echo $row['date']?></a></li>
                      <li><a href="<?=$link; ?>">48 Comments</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
           <?php } ?>
      </div>
    <!-- !owl carousel -->
  </div>
</section>
<!-- !intertainment -->

<!-- Special Price
<section id="special-price">
  <div class="  shadow-lg mt-5 p-3 rounded ">
    <h4 class="font-rubik text-center font-size-20"><b>Shop</b></h4>
    <div id="filters" class="button-group text-right font-baloo font-size-16">
      <button class="btn is-checked" data-filter="*">All Brand</button>
      <button class="btn" data-filter=".Apple">Apple</button>
      <button class="btn" data-filter=".Samsung">Samsung</button>
      <button class="btn" data-filter=".Redmi">Redmi</button>
    </div>

    <div class="grid">
      
       <div class="grid-item  Redmi border ">
        <div class="item py-2" style="width: 200px;">
          <div class="sproduct font-rale">
            <div class="d-flex flex-column">
              <a href="#"><img src="./image/pen.png" class="img-fluid" alt="pro1"></a>
              <div class="text-center">
                <h6>Pen</h6>
                <div class="price py-2">
                  <span>$152</span>
           
                </div>
                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-item  Redmi border ">
        <div class="item py-2" style="width: 200px;">
          <div class="sproduct font-rale">
            <div class="d-flex flex-column">
              <a href="#"><img src="./image/3.png" class="img-fluid" alt="pro1"></a>
              <div class="text-center">
                <h6>Redmi Note 7 Pro</h6>
               
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-item  Redmi border ">
        <div class="item py-2" style="width: 200px;">
          <div class="sproduct font-rale">
            <div class="d-flex flex-column">
              <a href="#"><img src="./image/lap1.png" class="img-fluid" alt="pro1"></a>
              <div class="text-center">
                <h6>Redmi Note 7 Pro</h6>
                
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid-item  Redmi border">
        <div class="item py-2" style="width: 200px;">
          <div class="sproduct font-rale">
            <div class="d-flex flex-column">
              <a href="#"><img src="./image/food.png" class="img-fluid" alt="pro1"></a>
              <div class="text-center">
                <h6>Redmi Note 7 Pro</h6>
               
                <div class="price py-2">
                  <span>$152</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="grid-item Apple border  " >
        <div class="item py-2" style="width: 200px;">
          <div class="sproduct font-rale">
            <div class="d-flex flex-column">
              <a href="#"><img src="./image/note.png" class="img-fluid" alt="pro1"></a>
              <div class="text-center">
                <h6>Apple iPhone 10</h6>
                
                <div class="price py-2">
                  <span>$252</span>
                </div>
                <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
</section>---->
<?php include("common/shop.php");?>
<!-- !Special Price -->
<br>
 <!-- Blogs -->
 <section id="blogs">
  <div class="  shadow-lg p-3 rounded container py-4">
    <h4 class="font-rubik font-size-20">Latest Blogs</h4>
    <hr>

    <div class="owl-carousel owl-theme">

    <?php 
/* Local Database*/

include("conn.php");


 $sql="select * from news where cat='Blogs'";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {
  $data=$row['id'];

  $link="new_datails.php?id=".urlencode(base64_encode($data));


        ?>
      <div class="item">
        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
          <p class="card-title font-size-5">by :<span class="text-danger" ><?php echo $row['by']?></span></p>
          <p><?php echo $row['date']?></p>
          <img src="admin/upload/<?php echo $row['image']?>" alt="cart image" class="card-img-top">
          <p class="card-text font-size-14  py-1"><a href=""> <?php echo $row['tittle']?></a></p>

          <a href="#" class="color-second text-left">Read More</a>
        </div>
       
      </div>
      <?php } ?>
      <div class="item">
        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
        <p class="card-title font-size-5">by :<span class="text-danger" >Gatogo</span></p>
          <p>January,14th 2022</p>
          <img src="./image/11.png" alt="cart image" class="card-img-top">
          <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
          <a href="#" class="color-second text-left">Read More</a>
        </div>
      </div>
      <div class="item">
        <div class="card border-0 font-rale mr-5" style="width: 18rem;">
        <p class="card-title font-size-5">by :<span class="text-danger" >Gatogo</span></p>
          <p>January,14th 2022</p>
          <img src="./image/12.png" alt="cart image" class="card-img-top">
          <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
          <a href="#" class="color-second text-left">Read More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- !Blogs -->

<!--SRC-->
<div class="   shadow-lg p-3 rounded container">

  <div class="heading-title text-center">
    <h3 class="text-uppercase"> SRC 2022/2023 </h3>
   <hr>
</div>
  <div class="row">
      

      <div class="col-md-4 col-sm-4">
          <div class="team-member">
              <div class="team-img">
                  <img src="https://image.freepik.com/free-photo/man-standing-with-a-black-t-shirt_1187-1045.jpg" alt="team member" class="img-responsive">
              </div>
              <div class="team-hover">
                  <div class="desk">
                      <h4>Hi There !</h4>
                      <p>I love to introduce myself as a hardcore Web Designer.</p>
                  </div>
                  <div class="s-link">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                  </div>
              </div>
          </div>
          <div class="team-title">
              <h5>Martin Smith</h5>
              <span class="text-white">founder & ceo</span>
          </div>
      </div>
      <div class="col-md-4 col-sm-4">
          <div class="team-member">
              <div class="team-img">
                  <img src="https://image.freepik.com/free-photo/elegant-man-with-thumbs-up_1149-1595.jpg" alt="team member" class="img-responsive">
              </div>
              <div class="team-hover">
                  <div class="desk">
                      <h4>Hello World</h4>
                      <p>I love to introduce myself as a hardcore Web Designer.</p>
                  </div>
                  <div class="s-link">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                  </div>
              </div>
          </div>
          <div class="team-title">
              <h5>Franklin Harbet</h5>
              <span>HR Manager</span>
          </div>
      </div>
      <div class="col-md-4 col-sm-4">
          <div class="team-member">
              <div class="team-img">
                  <img src="https://image.freepik.com/free-photo/well-dressed-executive-with-crossed-arms_1098-3930.jpg" alt="team member" class="img-responsive">
              </div>
              <div class="team-hover">
                  <div class="desk">
                      <h4>I love to design</h4>
                      <p>I love to introduce myself as a hardcore Web Designer.</p>
                  </div>
                  <div class="s-link">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                  </div>
              </div>
          </div>
          <div class="team-title">
              <h5>Linda Anderson</h5>
              <span>Marketing Manager</span>
          </div>
      </div>

  </div>

</div>
<!--!SRC-->

<!--ads-->
<section class="ads">
  <center>
  <div  class=" container ads1">
    <img  style="height: 200px;" src="./image/banner2-cr-500x150.jpg" alt="Third slide">
  </div>
</center>
</section>
<!--!ads-->

<!-- start #footer -->
<?php include("common/footer.php") ?>
<!-- !start #footer -->
