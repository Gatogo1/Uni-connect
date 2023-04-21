<?php include("common/head.php") ;?>
<body>
<?php include("common/tittle.php") ;?>
    <div class="container-fluid">

        <div class="row">
        <?php include("common/menu.php") ;?>
        <?php include("common/info.php") ;?>
           
                <hr style="background-color: red;">
                <div class="container ">
                    <div class="row">
                        <div class=" col-sm-6">
                            <canvas id="myChart" style="width:100%;max-width:400px"></canvas>
                        </div>
                        <div class=" col-sm-6">
                            <canvas id="myChart2" style="width:100%;max-width:400px"></canvas>
                        </div>
                    </div>
                </div>
                
                

            </div>

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    


    
<!--pie chart-->
    <script>
        var xValues = ["January", "Febuary", "March", "April", "May", "June", "July", "August", "September", "october", "November", "December"];
        var yValues = [55, 49, 44, 24, 15];
        var barColors = ["red", "green","blue","orange","brown"];
        
        new Chart("myChart2", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            title: {
              display: true,
              text: "Page visiters"
            }
          }
        });
        </script>
<!--Graph chart-->
<script>
   
   
var xValue = ["Eletricals", "Auto", "Fashion", "Catering", "Science"];
var yValue = [55, 49, 44, 24, 15];
var barColor = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValue,
    datasets: [{
      backgroundColor: barColor,
      data: yValue
    }]
  },
  options: {
    title: {
      display: true,
      text: "Page Users According To Department"
    }
  }
});

    </script>
    
        
    </body>
</html>