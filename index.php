
<?php include("common/check_login.php")  ;?>

<?php include("conn.php")  ;?>
<?php include("common/head.php")  ;?>
<style>
       body{
    background-color: rgb(10, 143, 161);
    font-family: 'Alexandria';
}
    .btn {
        font-size: 5px;
        font-weight: 500;
        color: antiquewhite;
        width: x;
  padding: 10px 10px 20px 10px;
  border: 1px solid #BFBFBF;
  background-color: white;

  border-radius:30px;
    }

    .button1:hover {
  width: 300px;
}
    a{
        color: antiquewhite;
    }
    .row{
        margin: 20px;
  width: 100%;

  padding: 10px;
    }

    .column {
  float: left;
  width: 25%;
  padding: 5px;
  margin: 5px;
  height:100hv;
  text-align:center;
  border-radius:5px;
  
    }

    .column:hover{
        width: 25.2%;
    }

    .column p{
        font-size:9px;
    }
    .row:after {
  content: "";
  display: table;
  clear: both;
}

.row a{
color : black;
}

</style>
<body >
<?php include("common/logo.php") ;?>
<div class="container">
<?php include("common/day_activity.php") ;?>



   
<?php include("welMassege.php")?>

    <div class="container ">
    
  


    <div class="row">
    <a href="timebable.php" class="column" style="background-color:#bbb;">
  <div class="col-sm-12"><i class="fa fa-calendar" aria-hidden="true"></i></i></div>
    <p>class timetable</p>
  </a>

  <a href="news.php" class="column shadow" style="background-color:#aaa;">
  <div class="col-sm-12"><i class="fa fa-newspaper-o"></i></div>
    <p>Entertainm..</p>
  </a>
  <a href="https://myatu.net/login/index.php" class="column" style="background-color:#ccc;">
  <div class="col-sm-12"><i class="fa fa-ravelry" aria-hidden="true"></i></div>
    <p>LMS</p>
  </a>
  <a href="https://icampus.atu.edu.gh/" class="column" style="background-color:#ccc;">
  <div class="col-sm-12"><i class="fa fa-ravelry" aria-hidden="true"></i></div>
    <p>icampus </p>
  </a>
    <a href="academicCalaneder.php" class="column" style="background-color:#ccc;">
  <div  class="col-sm-12"><i class="fa fa-university" aria-hidden="true"></i></div>
    <p>Academic act</p>
  </a>
  <a href="report.php" class="column shadow" style="background-color:#aaa;">
  <div class="col-sm-12"><i class="fa fa-paper-plane"></i></div>
    <p>Report</p>
  </a>
  <a href="location.php" class="column" style="background-color:#bbb;">
  <div class="col-sm-12"><i class="fa fa-map-o" aria-hidden="true"></i></i></div>
    <p>Locations</p>
  </a>
  <a href="news.php" class="column" style="background-color:#ccc;">
  <div class="col-sm-12"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></div>
    <p>Shop</p>
  </a>
    <a href="advertise.php" class="column" style="background-color:#ccc;">
  <div  class="col-sm-12"><i class="fa fa-newspaper-o" aria-hidden="true"></i></div>
    <p>Advertise</p>
  </a>

  <a href="course.php" class="column shadow" style="background-color:#aaa;">
  <div class="col-sm-12"><i class="fa fa-newspaper-o"></i></div>
    <p>Course outline</p>
  </a>
  <a href="library.php" class="column" style="background-color:#bbb;">
  <div class="col-sm-12"><i class="fa fa-book" aria-hidden="true"></i></i></div>
    <p>Library</p>
  </a>
  <a href="massege.php" class="column" style="background-color:#ccc;">
  <div class="col-sm-12"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
    <p>Massage<span style="background-color: brown;">0</span> </p>
  </a>
    <a href="profile.php" class="column" style="background-color:#ccc;">
  <div  class="col-sm-12"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
    <p>Profile</p>
  </a>
</div>








       
   
    </div>


</body>
</html>