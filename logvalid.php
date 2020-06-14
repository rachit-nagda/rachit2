<?php
  session_start();

  $con=mysqli_connect('localhost','root');

  if($con)
  {
    echo"Connection Successfull\n";
  }
  else
  {
    echo"Connection UnSuccessfull\n";
  }
  mysqli_select_db($con,'navigus');

  $name = $_POST['user'];
  $pass = $_POST['pass'];

  $q="select * from signrecord where name='$name' && pass='$pass'";

  $result=mysqli_query($con,$q);

  $num=mysqli_num_rows($result);

  if($num == 1)
  {
    $_SESSION['user']=$name;
    header('location:home.php');
    //echo"<script>window.open('www.google.com');</script>";
  }
  else
  {
    header('location:failed.php');
    /*
    $qy="insert into signin(name,pass,email)values('$name','$pass','$email')";
    mysqli_query($con,$qy); */
  }

 ?>
