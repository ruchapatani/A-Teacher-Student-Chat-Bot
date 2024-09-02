<?php

  $con=mysqli_connect('localhost','root','','divacode');
  session_start();

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>- Diva Code -</title>
     <!--  <link rel="stylesheet" type="text/css" href="style.css" >
       <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="style.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    </head>
    <body>
                <div class="header">
            <nav class="navbar  navbar-fixed-top" style="background-color: #DCDCDC">
  <div class="container-fluid">
    <div class="navbar-header">

	<DIV  class="navbar-brand" ><b>Diva Code</DIV>

    </div>

    <ul class="nav navbar-nav">
      <li ><a href="index.php"style="color:#000000">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#000000">Login<span class="caret"></span></a>
        <ul  class="dropdown-menu" >
          <li ><a href="logteach.php">For Teachers</a></li>
          <li><a href="logstud.php">For Students</a></li> </ul>
      </li>
    </ul>

  </div>
</nav>
            </div>




</nav>
</div>
<div class="conainers" style="padding-top: 50px ;padding-left:180px">
  <h2>P5 - FS - Problem Statement - 02
  </h2>
</div>
<div style="background-color:#ffffff">

		    <div class="container" >
                  <div class="row" style="padding-bottom:20px">
          <div class="col-md-3 col-sm-6">
    <img src="img/img2.jpg"
         height="350" width="250">


        </div>


          <div class="col-md-3 col-sm-6">

    <img src="img/pata1.jpg"
         height="350" width="250">



        </div>
                <div class="col-md-3 col-sm-6">

    <img src="img/pata2.jpg"
         height="350" width="250">



        </div>
        <div class="col-md-3 col-sm-6">

<img src="img/img1.jpg"
 height="350" width="250">



</div>




</div> </div></div>
				  <hr>
				  <div class="container">
				  <h3 style="color:#769CD3" >DIVA CODE:THE CHAT BOX </h3>
<p>This is a website designed using full web stack.The pages in this website are designed by html,css,php and
bootstrap.It is a user friendly website and also an interactive website that connects a student and a
teacher.</p>
<p>This a chat box used by the teacher and student to clear doubts of the student on a respective topic. The
student can post his/her doubts has a text message or by uploading the file, and also can do both.The
doubt posted by the student is addressed to a respective teacher by specifing their email id.The teacher
can view the doubt posted by the student in their respective notification bar and reply back to the student
either by a text message or by uploading a file or both. As soon as the teacher replys back to the student
the status of the doubt is marked as cleared and the student is notified back that the doubt posted by
him/her is clear and the student can view the answer.</p>
<p>The student and teacher can view the subjects involved and also a brief description of the subject. They
can also view a statistical module in which their is chart describing about the number of students actively
using and the number of students logined and also the teachers who are there for clearing the students
doubts.
</p></div></body>
   <footer style="background-color:#dcdcdc ; height:50px" >
        <center> <h4 style="padding-top:15px"><b>Copyright &copy;DIVA CODE. All Rights Reserved | Contact Us: +91 90000 00000</h4> </center>  </footer>
</html>
