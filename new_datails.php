
<?php include("common/check_login.php")  ;?>

<?php include("conn.php")  ;?>
<?php include("common/head.php")  ;?>
    <style>
            body{
    background-color::rgb(199, 226, 231);
    font-family: 'Alexandria';
}
        .item-img img{
            width: 550px;
        }
        @media (max-width:480px){
    .item-img img{
      width: 100%;
    }
    }
    .list-group{
      margin: 10px;
    }
    @media (max-width:480px){
    .list-group{
      width: 100%;

    }
    }

    .list-item{
        
        padding: 2px;
        font-size: 10px;
        color: orangered;
       
    }
    .list-comment{
        
        padding: 10px;
        font-size: 15px;
        color: rgb(17, 51, 94);
    }
    .img-item{
        width: 150px;
        
  
    }

    .fa1 {
  padding: 10px;
  margin: 0px;
  font-size: 15px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa1:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  border-radius: 20%;
  color: white;
  margin-left: 20px;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
  border-radius: 20%;
}


.fa-linkedin {
    border-radius: 20%;
  background: #007bb5;
  color: white;
}



.fa-instagram {
  background: #125688;
  color: white;
  border-radius: 20%;
}
.ads-related{
    margin-top: 30px;
}
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin-top: 70px;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
padding: 5px;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column1,.column2 {

  padding: 5px;
  height: 100hv; /* Should be removed. Only for demonstration */
}
.column1{
  flex: 45%;
}
.column2{
  flex: 55%;
}
.related_text{
  font-size:13px;
}



    </style>
</head>

<body>
<?php include("common/logo.php") ;?>

<?php include("common/day_activity.php") ;?>


     <!-- Topbar Start -->
    

    <!-- Topbar End -->

    

       
      <div class="container">
        <div class="row">
            <div class="  col-sm-8 new-d">
             <h2>  News  Details   </h2>
             <hr>
             <?php 
/* Local Database*/

include("conn.php");
if (isset($_GET['id'])) {
  $id=mysqli_real_escape_string($conn, $_GET['id']);
  $id2=base64_decode($id);
}

$sql = "SELECT * FROM news WHERE id='$id2' ";

$result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

$cat= $row['cat'];

        ?>
          
        <div class=" shadow-lg  mb-5  p-2 rounded ">
               <div class="item-img">
                <h4 class="text-center" style="color:rgb(10, 10, 68) ;"><b><?php echo $row['tittle'] ;?></b></h3>

                <div class="row">
                <div class="list-group list-group-horizontal">
                    <div class="list-item text-warning "><i> <?php echo $row['by'] ;?></i></div>
                    
                    <div class="list-item  text-warning"><i> <?php echo $row['date'] ;?> </i></div>
                    <div class="list-item text-warning" ><i>Comments</i><a href=""><span style="color: red;">0</span></a></div>
                    <div class="list-item  text-warning"><i> <?php echo $row['cat'] ;?></i></div>
                </div>
               
</div>
                 <img id="myImg" src="admin/upload/<?php echo $row['image'] ;?>" alt="">
               </div>
               <div class="item-text text-white">
                <p><?php echo $row['news'] ;?></p>
               </div>
               <!--share section-->
               <div class="">
                <div class="row">
                <div class="list-group list-group-horizontal">
                    <div class="list-item text-warning "><i></i></div>
                    
                    <div class="list-item  text-warning"><i> <?php echo $row['date'] ;?> </i></div>
                    <div class="list-item text-warning" ><i>Comments</i><a href=""><span style="color: red;">0</span></a></div>
                    <div class="list-item  text-warning"><i> <?php echo $row['cat'] ;?></i></div>
                </div>

               

                <div class="share-social">
                   
                    <a href="#" class="fa1 fa fa-facebook"></a>
                    <a href="#" class="fa1  fa fa-twitter"></a>
                    <a href="#" class="fa1 fa fa-linkedin"></a>
                    <a href="#" class="fa1 fa fa-instagram"></a>
                </div>
             </div>
            </div>
  </div>
            <!--!share section-->
               <!--Comment section-->
                <div class="">
                    <h3>Comments</h3>
                    <div class="row  shadow-lg p-3  text-white rounded">
                      <div class="row  shadow-lg">
                         <div class="column1" >
                         <img class="img-item" src="./image/bs.jpg" alt="">
                      </div>
                     <div class="column2" >
                         <p class="related_text">*  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor labore in accusantium? Blanditiis  </p>
                       </div>
                     
                           <p class="p-2 text-warning text-center"><i> Gatogo</i> |</p>
                           <p class="p-2  text-warning text-center"><i> Electrical</i> |</p>
                           <p class="p-2  text-warning text-center">  <i>12/12/2023</i></p>
                      
                    </div>
</div>

                   
                    
                    <div class="comment  shadow-lg p-2 mt-5  ">
                      <form method="post">
                        <input class="comment rounded form-control w-95 mb-3" type="text" id="comment" name="comment" placeholder="input comment">
                        <button class=" btn btn-primary " type="submit" id="submit" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <!--!Comment section-->
               </div>
            <!--Related post section-->
             <?php include("relatedPost.php")?>

                
              <!--ads section-->
              
          <!---carosel-->
            <div class="ads-related">
          <div  id=" carouselExampleIndicators" class=" container carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="./image/b1.jpg" alt="First slide">
               <!-- <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>-->
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./image/b2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="./image/b3.jpg" alt="Third slide">
              </div>
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
        </div>
<!--!carousel-->
              <!--ads section-->

            </div>
            </div>
           
           </div>
           <!--ads-->
<section class="ads">
    <center>
    <div  class=" container ads1">
      <img  style="height: 200px;" src="./image/banner2-cr-500x150.jpg" alt="Third slide">
    </div>
  </center>
  </section>
  <!--!ads-->
    </div>

    <!-- start #footer -->

   <?php include("common/footer.php")?>
  <!-- !start #footer -->
   

    <!-- Owl Carousel Js file -->
<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

<!-- Custom Javascript -->
<script src="./js/script.js"></script>

<!-- The Modal -->
<div id="myModal" class="modal">
  <img class="modal-content" id="img01">
  <span class="close">&times;</span>
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</body>
</html>