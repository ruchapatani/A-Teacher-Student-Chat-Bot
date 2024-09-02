<?php

 $con=mysqli_connect('localhost','root','','divacode');
 session_start();


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
  <style>
        body{
            margin: 0;
            padding: 0;
            background: #0000000a;
            background-image: url("img/pata2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
            text-align: center;
            font-family: "montserrat";
            font-size: 5em;
            color:#3498db;
        }
        p{
            align-items: center;
        }
        .container{
            text-align: center;
            margin-top: 100px;

        }
        .btn{
            border: 1px solid #3498db;
            background: none;
            border: 2px solid #87bbdd;
            width: 240px;
            height: 100px;
            padding: 40px 25px;
            font-size: 28px;
            border-radius: 4px;
            font-family: "montserrat";
            cursor: pointer;
            margin: 10px;
            transition: 0.8s;
            overflow: hidden;
        }
        .btn1,.btn2{
            color: #3498db;
        }
        .btn3,.btn4{
            color: #3498db;
        }
        .btn1:hover,.btn2:hover{
            color: #3498db;

        }
        .btn3:hover,.btn4:hover{
            color: #3498db;

        }
        .btn::before{
            content: "";
            position:absolute;
            left: 0;
            width: 100%;
            height: 0;
          /* background: #3498db;*/
            z-index: -1;
            transition: 0.8s;
        }
        .btn:hover{
            background: skyblue;
        }
        .btn:active{
            background: #f58500;
            top:2px;
        }


    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
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
        <li><a href="main_subjects.html">Subjects</a></li>
        <li><a href="forumstud.php">Forum</a></li>
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
</nav><div style="background-image: url("img/pata2.jpg");">
<h1>Dashboard</h1>
    <div class="container">
      <p>  <button class="btn btn1"><a href="forumstud.php">Post Questions</a></button>
        <button class="btn btn2"><a href="replyteach.php" >Read Replies</a> </button>
    </p>
    <p>
        <button class="btn btn3"><a href="main_subjects.html" >Check Subjects</a></button>
        <button class="btn btn4"><a href="statteach.php" >Stats</a></button>
    </p>
  </div> </div>
</body>
</html>
