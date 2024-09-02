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
 <script type="text/javascript">
 function check(pwd1)
 {
   if(pwd1.value.length<4){
     alert("Error: Password must contain at least four characters!");
      return false;

     }
 }

 function checkForm(pwd1,pwd2)
 {


   if(pwd1.value !=pwd2.value) {

       alert("Error: Entered Password is not matching!! Try Again.");
      return false;

     }

     }





</script>

   <body style="height:1027px">




           <nav class="navbar  navbar-fixed-top" style="background-color: #DCDCDC">
 <div class="container-fluid">
   <div class="navbar-header">
 <DIV  class="navbar-brand" ><b>Diva Code</DIV>
 </div>

   <ul class="nav navbar-nav">
     <li ><a href="index.php"style="color:#000000">Home</a></li>
   </ul>
   </div>
   </nav>

    <div class="container-fluid">
 <div class="row" style="padding-top:70px">
                   <div class="col-md-4 col-md-offset-4">
                       <div class="panel panel-primary"  >

                       <h2 class="text-center"><b>LOGIN FOR STUDENTS</h2>

                       <div class="row ">
                           <div class="col-xs-12">
                               <hr class="hrStyle">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-xs-12 ">
                               <form action="" class="form-horizontal" method="POST" role="form">
                                   <div class="input-group" style="padding-left:10px;padding-right:10px;">
                                       <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                                       <input type="text" name="email" class="form-control" placeholder="E-mail" aria-describedby="basic-addon1">
                                   </div>
                                   <span class="help-block"></span>
                                   <div class="input-group" style="padding-left:10px;padding-right:10px;">
                                       <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                                       <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2">
                                   </div>
                                   <span class="help-block"></span>
                 <div class="input-group" style="padding-left:200px;padding-right:10px;">
                                   <button type="submit"  name="submit" class="btn btn-primary">Login</button><br><br></div>
                 <?php

if(isset($_POST['submit'])){


$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);

// Query checks if the email and password are present in the database.
$query = "SELECT * FROM student WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));

$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
 echo "Please enter correct E-mail id and Password";

} else {
 $row = mysqli_fetch_array($result);
 $_SESSION['email'] = $row['email'];
 $_SESSION['password'] = $row['password'];
  $_SESSION['username'] = $row['username'];
 header('location: dashboardstud.php');
}
}

?>






                               </form>
               </div>
               </div>

                           </div>
                       </div>

                   </div>

         <h3><center>Don't have an account??Sign Up below</center></h3>

       <div class="row">
                   <div class="col-md-7 col-md-offset-3">
                       <div class="panel panel-primary"  >

                           <form action="register_stud.php" method="POST" role="form" >
               <h2 style="padding-left:10px"><b>SIGN UP</h2>
                               <div class="form-group form-inline" >

                                  <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                   <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
                                   <input type="text" name="fname" class="form-control" placeholder="First Name *" aria-describedby="basic-addon1" required>
                               </div>


                 <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                   <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
                                   <input type="text" name="lname" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1" required>
                               </div>
                               </div>
                 <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                   <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                                   <input type="text" name="username" class="form-control" placeholder="Enter your username*" aria-describedby="basic-addon1" required>
                               </div>
                               <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                                 <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                                                 <input type="text" name="usn" class="form-control" placeholder="Enter your USN*" aria-describedby="basic-addon1" required>
                                             </div>
                               <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                   <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                                   <input type="text" name="email" class="form-control" placeholder="Enter your email address*" aria-describedby="basic-addon1" required>
                               </div>

                               <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                   <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                                   <input type="password" name="pwd1" class="form-control" placeholder="Enter password*"  aria-describedby="basic-addon2" required>
                               </div>
                               <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                   <span class="input-group-addon" id="basic-addon3"><i class="glyphicon glyphicon-lock"></i></span>
                                   <input type="password" name="pwd2" class="form-control"  placeholder="Re-Enter password*" onclick="check(pwd1)" aria-describedby="basic-addon3" required>
                               </div>



                               <div class="input-group form-group" style="padding-left:10px;padding-right:10px;">
                                   <span class="input-group-addon" id="basic-addon4"><i class=" glyphicon glyphicon-phone"></i></span>

                                   <input type="text" name="phone" class="form-control" placeholder="Enter your phone number*" onclick="checkForm(pwd1,pwd2)" aria-describedby="basic-addon4" required>
                               </div>

                            <div>
                                   <label class="gender-text" >Gender </label>
                                   <span class="gender-radiobuttons">
                                   <input type="radio" name="gender" value="male"> Male
                                   <input type="radio" name="gender" value="female"> Female
                                   </span>
                               </div></div><DIV style="padding-left:10px;padding-right:10px;">
                              <button type="submit"  name="submit" class="btn btn-primary" >Sign up</button><br><br></DIV>


                           </form>
                       </div>
                   </div>
               </div>
           </div>


   </body>
   <footer style="background-color:#dcdcdc ; height:50px" >
       <center> <h4 style="padding-top:15px"><b>Copyright &copy;DIVA CODE. All Rights Reserved | Contact Us: +91 90000 00000</h4> </center>  </footer>
   </html>
