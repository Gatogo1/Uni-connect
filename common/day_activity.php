<?php
date_default_timezone_set('Africa/Accra');
$date=  date("M-D-jS-Y");

$_SESSION['date']=$date;

?>





<?php
$st='2:00AM';
$ed='3:00PM';
$hourdiff = round((strtotime($ed) - strtotime($st))/3600, 1);
?>


<style>
        .navbar{
       
        }
</style>


         <nav class="navbar  mb-3 navbar-expand-lg fixed-top navbar-light bg-light">
                <div class="logo">
                        <img style="width: 100px; padding:3px;" src="image/Picture1.jpg" alt="">
                    </div>
                    
               <div class="calender"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $_SESSION['date']; ?> |</b> |<i class="fa fa-user-circle" aria-hidden="true"></i> User: <b><?php echo $_SESSION['sname']; ?></b>   | <i class="fa fa-sign-out" aria-hidden="true"></i> <a style="color:black ;" href="logout.php">Logout</a>   |<i class="fa fa-cogs" aria-hidden="true"></i> <a style="color:black ;" href="">Profile</a>|
        
     <nav class=" container navbar navbar-expand-md  navbar-dark">
      
       <!-- <a class="navbar-brand" style="font-size:20px" href="#">ATU STUDENT AFEIRS</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
    
            <div class=" navbar-right collapse navbar-collapse" id="collapsibleNavbar">
             
                <ul class=" list nav navbar-nav text-dark   ml-auto">
                  
                  <li><a href="index.php"><i class="fa fa-mortar-board"></i>Academics</a></li>
                  <li class="active"><a href="news.php"><i class="fa fa-newspaper-o"></i>News</a></li>
                  <li><a href="#about"><i class="fa fa-book"></i>Library</a></li>
                  <li><a href="#port"><i class="fa fa-cart-arrow-down"></i>Shop</a></li>
                  <li><a href="profile.php"><i class="fa fa-pencil"></i>Report</a></li>
                  <li><a href="profile.php"><i class="fa fa-user-circle-o"></i>Profile</a></li>
                </ul>
            </div>  
          </nav> 
       </nav>
