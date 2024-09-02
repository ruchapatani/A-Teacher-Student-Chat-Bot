<?php
 $con=mysqli_connect('localhost','root','','divacode');
 session_start();
 $email=$_SESSION['email'];
 $query = "SELECT count(*)as NUMBER FROM teacher";
 $row = mysqli_query($con, $query);

 $query2="SELECT count(*)as NUMBER FROM forum";
 $row2=mysqli_query($con,$query2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CHAT BOX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
      /* Remove the navbar's default margin-bottom and rounded borders */
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
      }

      /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
      .row.content {height: 450px}

      /* Set gray background color and 100% height */
      .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
      }

      /* Set black background color, white text and some padding */
      footer {
        background-color: #555;
        color: white;
        padding: 15px;
      }

      /* On small screens, set height to 'auto' for sidenav and grid */
      @media screen and (max-width: 767px) {
        .sidenav {
          height: auto;
          padding: 15px;
        }
        .row.content {height:auto;}
      }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">C H A T  B O X</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="dashboardteach.php">Forum</a></li>
        <li><a href="#">Stats</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if (!isset($_SESSION['email'])) { ?>
       <li><a href="logstud.php"><span class="icon-text"> <span class="glyphicon glyphicon-user"style="color:#000000"></span><span class="icon-text" style="color:#000000">LogIn/SignUp </span></a></li>
   </ul>
 </div>
</nav>
           </div>


                               <?php
   } else { 			  ?>



      <li><p style="padding-top:15px"><i class="fa fa-user fa-2x"></i><span class="icon-text"> <span class="glyphicon glyphicon-user"style="color:#ffffff" ></span><span class="icon-text" style="color:#ffffff" ><?php print_r($_SESSION['email'])  ?></span></p></li>
   <li><a href="logout.php"><i class="fa fa-user fa-2x"></i><span class="icon-text"> <span class="glyphicon glyphicon-log-out"style="color:#ffffff"></span><span class="icon-text" style="color:#ffffff">  Logout  </span> </a></li>
 </ul>
 </div>

</nav>
           </div>


           <?php 	} ?>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>- S T A T I S T I C S -</h1>
    <p>Teachers who are actively enrolled and clearing doubts.</p>
  </div>
</div>
<div class="container">
 <h1>P I E   C H A R T</h1>

 <div id="piechart"></div>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript">
 // Load google charts
 google.charts.load('current', {'packages':['corechart']});
 google.charts.setOnLoadCallback(drawChart);

 // Draw the chart and set the chart values
 function drawChart() {
   var data = google.visualization.arrayToDataTable([
   ['labels', 'counts'],
   <?php
   $total=12;
   	while($result=mysqli_fetch_array($row)){
      echo "['No.of teachers', ".$row[0]."],";
      }

      while($result2=mysqli_fetch_array($row2)){
      echo "['No.of active teachers', ".$row[2]."],";
      }
      echo "['No.of Unregisterd', ".$total"-".$row[0]."]";
      }
   ?>
 ]);

   // Optional; add a title and set the width and height of the chart
   var options = {'width':550, 'height':400};

   // Display the chart inside the <div> element with id="piechart"
   var chart = new google.visualization.PieChart(document.getElementById('piechart'));
   chart.draw(data, options);
 }
 </script></div>
</body>
</html>
