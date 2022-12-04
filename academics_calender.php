<?php include("common/head.php") ;?>

    <style>
        .row .button{
            margin: 30px;
        }
       .button-head{
                text-align: center;
          }

            .button a{
              background-color: aqua;
                border-radius: 10px;
              padding: 5px;
                }


    .button a{
       color: #000;
    }
    
    .button:hover{
        cursor: pointer;
    }

    #course {
  width: 100%;
  padding: 50px 0;
  display: none;
  text-align: center;
  background-color: lightblue;
  margin: 20px;
}

@media (max-width:480px){
    #course {
    
    font-size: 10px;
    margin: none;
    }
    }

    </style>
</head>

<body>

     <!-- Topbar Start -->
     <div class="container">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-white text-center py-2" style="width: 100px;">Tranding</div>
                    <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                        <div class="text-truncate"><a class="text-secondary" href="">Labore sit justo amet eos sed, et sanctus dolor diam eos</a></div>
                        <div class="text-truncate"><a class="text-secondary" href="">Gubergren elitr amet eirmod et lorem diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
                <div class="date">
                Monday, January 01, 2045
            </div>
            
            </div>
        </div>

        </div>
    </div>
    <!-- Topbar End -->

      <nav class=" container navbar navbar-expand-md  navbar-dark">
        <a class="navbar-brand" style="font-size:15x" href="#">ATU STUDENT </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
    
            <div class=" navbar-right collapse navbar-collapse" id="collapsibleNavbar">
             
                <ul class=" list nav navbar-nav  ml-auto">
                  <li class="active"><a href="#"><i class="fa fa-newspaper-o"></i>News</a></li>
                  <li><a href="#about"><i class="fa fa-mortar-board"></i>Academics</a></li>
                  
                  <li><a href="#port"><i class="fa fa-cart-arrow-down"></i>Shop</a></li>
                  <li><a href="#"><i class="fa fa-pencil"></i>Report</a></li>
                  <li><a href="#contact"><i class="fa fa-user-circle-o"></i>Profile</a></li>
                </ul>
            </div>  
      </nav>
      
      <!---carosel-->
      <div  id=" carouselExampleIndicators" class=" container carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block " src="./image/b1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block " src="./image/b2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block " src="./image/b3.jpg" alt="Third slide">
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
<!--!carousel-->
    
      <div class="container">
        <div class="row">
        
          
          <div class="button-head  col-sm-4">
              <div   class="button"><a onclick="myFunction()" href="#course">Track A</a></div>
          </div>
          
          <div class="button-head col-sm-4">
              <div  class="button"><a  onclick="myFunction()" href="#course">Track B</a></div>
          </div>
        
        
          <div id="course">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th  colspan="3" >Academics Calender Track A</th>
                        </tr>
                  <tr>
                    <th scope="col">Week</th>
                    <th scope="col">Date</th>
                    <th scope="col">Program</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">1</td>
                    <td>	COMMUNICATION SKILLS II</td>
                    <td>3</td>
                    
                  </tr>
                  <tr>
                    <td >1</td>
                    <td>THERMODYNAMICS</td>
                    <td>3</td>
                    
                  </tr>
                  
                  
                </tbody>
              </table>

              <script>
                function myFunction() {
                  var x = document.getElementById("course");
                  if (x.style.display === "none") {
                    x.style.display = "block";
                  } else {
                    x.style.display = "none";
                  }
                }
                </script>
            </div>
      </div>
      </div>
 

    <!-- start #footer -->
<footer id="footer" class=" container bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">ATU STUDENT CONNECT</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Newslatter</h4>
                <form class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email *">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Menu</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">New</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Academics</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Contact</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Massages <span style="color:red;">0</span></a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">
                      claims <span style="color:red;">0</span>
                    </a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>
            </div>
        </div>
    </div>
  </footer>
  <div class=" container copyright text-center bg-dark text-white py-2">
    <p class="font-rale font-size-14">&copy; Copyrights 2022. Desing By <a href="#" class="color-second">Gat software</a></p>
  </div>
  <!-- !start #footer -->
   

    <!-- Owl Carousel Js file -->
<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

<!-- Custom Javascript -->
<script src="./js/script.js"></script>


</body>
</html>