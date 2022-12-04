
<?php include("common/check_login.php")  ;?>

<?php include("conn.php")  ;?>
<?php include("common/head.php")  ;?>
<style>
       body{
    background-color: rgb(10, 143, 161);
    font-family: 'Alexandria';
}
    .btn {
        font-size: 15px;
        font-weight: 500;
        color: antiquewhite;
        width: 284px;
  padding: 10px 10px 20px 10px;
  border: 1px solid #BFBFBF;
  background-color: white;
  box-shadow: 10px 10px 5px #aaaaaa;
  border-radius:30px;
    }

    .button1:hover {
  width: 300px;
}
    a{
        color: antiquewhite;
    }
    .row{
        margin: auto;
  width: 100%;

  padding: 10px;
    }
</style>
<body >
<?php include("common/logo.php") ;?>
<div class="container">
<?php include("common/day_activity.php") ;?>

    <?php include("common/nav.php") ;?>

   

    <?php include("common/ads1.php") ;?>
    <div class="container ">
    
        <div class="row">
            <a href="news.php" class="   btn row col-sm-3 m-3 btn-sm bg-primary">
                <div class="col-sm-12"><i class="fa fa-newspaper-o"></i></div>
                <div href="news.php" class="col-sm-12">News</div>
        </a>

        <a href="" class="  row btn col-sm-3 m-3 btn-sm bg-primary">
            <div class="col-sm-12"><i class="fa fa-university" aria-hidden="true"></i></div>
            <div class="col-sm-12">Academics Activities</div>
        </a>

    <a href="timebable.php" class="   row btn col-sm-3 m-3 btn-sm bg-primary">
        <div class="col-sm-12"><i class="fa fa-calendar" aria-hidden="true"></i></i></div>
        <div class=" link col-sm-12">Class Timetable</div>
    </a>

    <a href="academics_calender.php" class=" row btn col-sm-3 m-3 btn-sm bg-primary">
        <div class="col-sm-12"><i class="fa fa-calendar" aria-hidden="true"></i></div>
        <div href="" class=" link col-sm-12">Academics Calender</div>
</a>
      
<a  href="" class=" row btn col-sm-3 m-3 btn-sm bg-primary">
    <div class="col-sm-12"><i class="fa fa-calendar" aria-hidden="true"></i></div>
    <div class=" link col-sm-12">SRC Calender</div>
</a>

<a  href="report.html" class=" row btn col-sm-3 m-3 btn-sm bg-primary">
    <div class="col-sm-12"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
    <div class=" link col-sm-12">Report</div>
</a>

<a href="" class=" row btn col-sm-3 m-3 btn-sm bg-primary">
    <div class="col-sm-12"><i class="fa fa-map-o" aria-hidden="true"></i></div>
    <div  class=" link col-sm-12">Locations</div>
</a>

<a href="" class=" row btn col-sm-3 m-3 btn-sm bg-primary">
    <div class="col-sm-12"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></div>
    <div  class=" link col-sm-12">Shop</div>
</a>

<a href="" class=" row btn col-sm-3 m-3 btn-sm bg-primary">
    <div class="col-sm-12"><i class="fa fa-newspaper-o"></i></div>
    <div  class=" link col-sm-12">Advertise</div>
</a>

<a href="course_outling.html" class=" row btn col-sm-3 m-3 btn-sm bg-primary">
    <div class="col-sm-12"><i class="fa fa-newspaper-o"></i></div>
    <div class=" link col-sm-12">Course outling</div>
</a>

<a class=" row btn col-sm-3 m-3 btn-sm bg-primary">
    <div class="col-sm-12"><i class="fa fa-book" aria-hidden="true"></i></div>
    <div href="" class=" link col-sm-12">Library</div>
</a>
<a href="" class=" row btn col-sm-3 m-3 btn-sm bg-primary">
    <div class="col-sm-12"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
    <div class=" link col-sm-12">Massage <span style="background-color: brown;">0</span></div>
</a>

<a href="" class=" row btn col-sm-3 m-3 btn-sm bg-primary">
    <div class="col-sm-12"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
    </div>
    <div class=" link col-sm-12">Profile </div>
</a>

       
   
    </div>

<?php include("common/footer.php") ;?>
</body>
</html>