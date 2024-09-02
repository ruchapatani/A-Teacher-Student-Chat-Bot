<?php

 $con=mysqli_connect('localhost','root','','divacode');
 session_start();
 $query1="SELECT * from teacher";

     $result = mysqli_query($con, $query1)or die(mysqli_error($con));
     $row = mysqli_fetch_array($result);

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
        <li class="active"><a href="dashboardstud.php">Home</a></li>
        <li><a href="main_subjects.html">Subjects</a></li>
        <li><a href="forumstud.php">Forum</a></li>
        <li><a href="replyteach.php">Replies</a></li>
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
    <h1>- F O R U M -</h1>
    <p>Post your questions here.</p>
  </div>
</div>
    <div class="container" style="margin-top: 10px; " >
     <div class="row" style="padding-top:50px">
             <div class="col-lg-12"><h2><strong>- Faculties -</strong></h2></div>
          </div>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
        <div class="row text-center" >
                <div class="col-md-12 col-sm-6 home-feature">
          <div class="thumbnail"style="background-color: rgba(255, 255, 255 ,0.7 )">

          <div class="row">
              <div class="col-xs-2">Faculty Name:</div>
              <div class="col-xs-10"><?php echo $row['username']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">Mail ID:</div>
              <div class="col-xs-10"><?php echo $row['email']; ?></div>
          </div>
            <div class="row">
              <div class="col-xs-2">Pose Question:</div>
              <div class="col-xs-10"><form method="POST" role="form" action ="forumstud.php">
                <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                    <input type="text" name="email" class="form-control" placeholder="type mail id" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                    <input type="textarea" name="question" class="form-control" placeholder="Question" aria-describedby="basic-addon1" required>
                </div>

                <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
            <input type="file" id="myFile" name="file">

                </div>
    <button type="submit"  name="submit" class="btn btn-primary" >Post</button>
<?php
if(isset($_POST['submit']))
    {
        $email =$_POST['email'];
        $question=$_POST['question'];
        $qfile=$_POST['file'];
        $stumail= $_SESSION['email'];
        $status='NotCleared';
        $final_file="img/".$qfile;
		 $query="INSERT INTO forum(email,stumail,question,qfile,status) VALUES ('$email' ,'$stumail', '$question', '$final_file','$status')";
       $data=mysqli_query($con,$query);
header('location: forumstud.php');
$con->close();

       //
    }

 ?>

</form></div>


              </div>
          </div>
                </div>
        </div>
          <hr/>
        <?php } ?>
    </div>
</body>
</html>
