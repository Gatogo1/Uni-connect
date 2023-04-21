
<?php include("common/check_login.php")  ;?>

<?php include("conn.php")  ;?>
<?php include("common/head.php")  ;?>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .img-item img{
            width: 100%;
       
           
        }

</style>
<body>
<?php include("common/logo.php") ;?>
<div class="container">
<?php include("common/day_activity.php") ;?>


<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

.column:hover{
 background:#ddd;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 50%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: px;
  text-align: center;
  background-color: #f1f1f1;
}

.card-img-top{
    max-width:100%;
max-height:100%;

}
.filterDiv {
 
 display: none;
}

.show {
 display: block;
}

.container {
 margin-top: 20px;
 overflow: hidden;
}

.checked {
  color: orange;
}


</style>

<body>
<div class="img-item mb-3  col-sm-12">
<img src="image/cons.gif" alt="">             
</div>


<section id="special-price">
  <div class="  shadow-lg mt-5 p-3 rounded ">
    <h3 class="font-rubik text-center  text-white " ><b>Library</b></h3>
    <div id="filters" class="button-group m-2 text-right font-baloo font-size-16">
      <button class="btn m-2   btn-light active is-checked" onclick="filterSelection('all')">All </button>
      <button class="btn btn-light" onclick="filterSelection('Apple')">Electricals</button>
      <button class="btn  m-2 btn-light" onclick="filterSelection('Samsung')">Accounting</button>
      <button class="btn  btn-light" onclick="filterSelection('Redmi')">Physics</button>
    </div>

<div class="row ">
 <div class="column filterDiv   Redmi">
  <div class="card ">
  <img class="card-img-top  " src="image/elec.jpg" alt="Card image cap">
  <p class=""><b> Introduction to Financial Accounting</b></p>
  <p>by:Henry Dauderis</p>
  <div class="">
  <span class="   fa fa-star checked"></span>
<span class=" fa fa-star checked"></span>
<span class=" fa fa-star checked"></span>
<span class=" fa fa-star"></span>
<span class=" fa fa-star"></span>
  </div>

  <a class="btn btn-success " href=""> Reserve</a>
    </div>
  </div>

  <div class="column filterDiv   Apple">
  <div class="card ">
  <img class="card-img-top  " src="image/me.jpg" alt="Card image cap">
  <p class=""><b> Introduction to Financial Accounting</b></p>
  <p>by:Henry Dauderis</p>
  <div class="">
  <span class="   fa fa-star checked"></span>
<span class=" fa fa-star checked"></span>
<span class=" fa fa-star checked"></span>
<span class=" fa fa-star"></span>
<span class=" fa fa-star"></span>
  </div>

  <a class="btn btn-success " href=""> Reserve</a>
    </div>
  </div>

  <div class="column filterDiv  Apple">
  <div class="card ">
  <img class="card-img-top  " src="image/ac.jpg" alt="Card image cap">
  <p class=""><b> Introduction to Financial Accounting</b></p>
  <p>by:Henry Dauderis</p>
  <div class="">
  <span class="   fa fa-star checked"></span>
<span class=" fa fa-star checked"></span>
<span class=" fa fa-star checked"></span>
<span class=" fa fa-star"></span>
<span class=" fa fa-star"></span>
  </div>

  <a class="btn btn-success " href=""> Reserve</a>
    </div>
  </div>

  
  <div class="column filterDiv  Apple">
  <div class="card ">
  <img class="card-img-top  " src="image/ac.jpg" alt="Card image cap">
  <p class=""><b> Introduction to Financial Accounting</b></p>
  <p>by:Henry Dauderis</p>
  <div class="">
  <span class="   fa fa-star checked"></span>
<span class=" fa fa-star checked"></span>
<span class=" fa fa-star checked"></span>
<span class=" fa fa-star"></span>
<span class=" fa fa-star"></span>
  </div>

  <a class="btn btn-success " href=""> Reserve</a>
    </div>
  </div>


</div>
</div>
</section>


<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

/* Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}*/
</script>


</body>