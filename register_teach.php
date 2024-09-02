<?php
  $con=mysqli_connect('localhost','root','','divacode');
  session_start();

if(isset($_POST['submit']))
    {
		$username=$_POST['username'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
      $gender='';
      $id=$_POST['id'];
        $email=$_POST['email'];
        $pwd1=$_POST['pwd1'];
        $phone=$_POST['phone'];


		if(isset($_POST['gender'])){
		 $gender=$_POST['gender'];

		 }
		 $query2 = "SELECT * FROM teacher WHERE email='$email'";
  $result2 = mysqli_query($con, $query2)or die($mysqli_error($con));
  $num = mysqli_num_rows($result2);

  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: login.php?m1=' . $m);
  }
   else {


		 $query="INSERT INTO teacher VALUES ('$fname','$lname','$username','$id','$email','$pwd1','$phone','$gender')";
       $data=mysqli_query($con,$query);
	   $email = mysqli_real_escape_string($con, $email);
	   $password = mysqli_real_escape_string($con, $password);
	   $query1 = "SELECT * FROM teacher WHERE email='" . $email . "' AND password='" . $pwd1 . "'";
	   $result = mysqli_query($con, $query1)or die($mysqli_error($con));
	   $num = mysqli_num_rows($result);
	  $row = mysqli_fetch_array($result);
          $_SESSION['email'] = $row['email'];
		  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['pwd1'];
header('location: index.php');

       //
    }
	}

 ?>
