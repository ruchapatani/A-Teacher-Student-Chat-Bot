<?php

 $con=mysqli_connect('localhost','root','','divacode');
 session_start();
 $email=$_SESSION['email'];
 $query1="SELECT * from forum where email='$email' and status='NotCleared'";

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
    <h1>- D O U B T S -</h1>
    <p>Here are the questions posted by your students</p>
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
              <div class="col-xs-2">Question ID:</div>
              <div class="col-xs-10"><?php echo $row['id']; $id= $row['id']; ?></div>
          </div>
      <div class="row">
          <div class="col-xs-2">From:</div>
          <div class="col-xs-10"><?php echo $row['stumail']; ?></div>
      </div>
    <div class="row">
          <div class="col-xs-2">Question:</div>
          <div class="col-xs-10"><?php echo $row['question']; ?></div>
      </div>
      <div class="row">
          <div class="col-xs-2">File</div>

            <div class="col-xs-10"><img src ="<?php $row['qfile'];
            print_r($row['qfile']);?>" /> </div>
      </div>

        <div class="row">
          <div class="col-xs-2">Reply:</div>
          <div class="col-xs-10">
            <form method="POST" role="form" action ="forumteach.php">

            <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                <input type="text" name="email" class="form-control" placeholder="type student mail id" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                <input type="textarea" name="reply" class="form-control" placeholder="Reply" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                <input type="number" name="id" class="form-control" placeholder="Type question ID" aria-describedby="basic-addon1" required>
            </div>

            <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
        <input type="file" id="myFile" name="rfile">
       </div>
<button type="submit"  name="submit" class="btn btn-primary">Post</button>
<?php
if(isset($_POST['submit']))
{
   $stumail=$_POST['email'];
    $reply=$_POST['reply'];
    $rfile=$_POST['rfile'];
    $id=$_POST['id'];
    $fin_file="img/".$rfile;
    $status= "Cleared";
 //$query11="INSERT INTO forum(reply,rfile) VALUES ('$reply' ,'$fin_file') where id='$id' ";
 $query11="UPDATE forum set reply='$reply',rfile='$fin_file',status='$status' where id='$id'";
 $data=mysqli_query($con,$query11);
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
