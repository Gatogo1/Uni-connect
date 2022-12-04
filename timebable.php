<?php include("common/check_login.php")  ;?>

<?php include("conn.php")  ;?>
<?php include("common/head.php")  ;?>

    <style>

        body{
            background-color: rgb(46, 121, 121);
        }
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

    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
}

@media (max-width:480px){
    .tab {
    
    font-size: 10px;
    margin: none;
    }
    }


    * { box-sizing: border-box; }

body {
  font-family: sans-serif;
}



/* ---- isotope ---- */

.grid {
  background: #EEE;
  max-width: 1200px;
}

/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ui group */

.ui-group {
  display: inline-block;
  margin-right: 20px;
}

.ui-group h3 {
  display: inline-block;
  margin-right: 0.2em;
  font-size: 16px;
}

.ui-group .button-group {
  display: inline-block;
  margin-right: 20px;
}

/* color-shape */

.color-shape {
  width: 70px;
  height: 70px;
  margin: 5px;
  float: left;
}
 
.color-shape.round {
  border-radius: 35px;
}
 
.color-shape.big.round {
  border-radius: 75px;
}
 
.color-shape.red { background: red; }
.color-shape.blue { background: blue; }
.color-shape.yellow { background: yellow; }
 
.color-shape.wide, .color-shape.big { width: 150px; }
.color-shape.tall, .color-shape.big { height: 150px; }

    </style>
</head>
<?php ?>
<body>

<?php include("common/logo.php") ;?>
<div class="container">
<?php include("common/day_activity.php") ;?>

    <?php include("common/nav.php") ;?>

   

    <?php include("common/ads1.php") ;?>    
<!--Time table-->

  </div>

<!--!time-table-->
<center>
<h1>Page under construction</h1>
</center>




    <!-- start #footer -->
<?php include("common/footer.php") ;?>