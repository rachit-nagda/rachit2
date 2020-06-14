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
  $pass = $_POST['pswd'];
  $email = $_POST['email'];

  $q="select * from signrecord where name='$name' && pass='$pass'";

  $result=mysqli_query($con,$q);

  $num=mysqli_num_rows($result);

  if($num == 1)
  {
    echo"Dublicate data";
  }
  else
  {
    $qy="insert into signrecord(name,pass,email)values('$name','$pass','$email')";
    mysqli_query($con,$qy);
    header("refresh:1; url=login.php");
  }

 ?>
