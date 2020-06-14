<?php
  $user=$pass="";
  $userErr=$passErr="";
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["user"]))
    {
      $userErr="*Fill the UserName...";
    }
    else
    if($_POST["user"]!="rachit")
    {
      $userErr="*InValid UserName...";
    }
    else
    {
      $user=$_POST["user"];
    }


    if(empty($_POST["pass"]))
    {
      $passErr="*Enter your Password..";
    }
    else
    if($_POST["pass"]!="R@chit123")
    {
      $passErr="*InValid Password...";
    }
    else
    {
      $pass=$_POST["pass"];
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <style>
  .login
  {
    position:absolute;
    top:0px;
    height:60%;
    left:40%;
    width:29%;
    background-image: url('fstback.jpg');
  }
  div.log
  {
      top:20px;
      margin-left: 80px;
      position: absolute;
      width:350px;
      height:350px;
      text-decoration-color: black;
  }
  .signup
  {
    position:absolute;
    top:40px;
    height:20%;
    left:100%;
    width:100%;

  }

  body
  {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url('backlog3.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover
  }
  * {box-sizing: border-box;}

  /* Full-width input fields */
  input[type=text], input[type=password] {
    width: 80%;
    padding: 10px;
    margin: 3px 0 15px 0;
    display: inline-block;
    height: 20px;
    border: none;
    background: #f1f1f1;
  }

  /* Add a background color when the inputs get focus */
  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    width:350px;
  }

  input[type=submit]
  {
    width: 20%;
    height:25px;
    font-style: oblique;
    background-color: green;
  }
  input[type=submit]:hover{
    background-color: black;
    outline: none;
    color:white;
  }

  /* Set a style for all buttons */
  button {
    background-color:grey;
    color: white;
    padding: 3px 5px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 70%;
    opacity: 0.9;
  }

  button:hover {
    opacity:;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    padding: 3px 5px;
    background-color: #f44336;
  }

  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn, .signupbtn {
    float: left;
    width: 10%;
  }

  /* Add padding to container elements */
  .container {
    padding: 16px;
  }

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color:#232324;/*#157f45;474e5d;*/
    padding-top: 50px;
    align:left;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color:#ffffff; /*#fefefe;*/
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
  }

  /* Style the horizontal ruler */
  hr {
    border: 1px solid #e2e2e2;
    margin-bottom: 25px;
  }
  label{align:right;}

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #d5d5d5;
  }

  .close:hover,
  .close:focus {
    color:#ffffff; /*#f44336;*/
    cursor: pointer;
  }

  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
  }

  /*div.admin
  {
      top:270px;
      left:470px;
      margin-left: 100px;
      position: absolute;
      width:90px;
      height:90px;
      background-color:red;

  }*/
  .block1:hover {
    background-color: black;
    color: #f44336;

  }
  /*.table
  {
    background-color: black;
    color:white;
    position:absolute;
    left:1000px;
    top:15px;
    width:auto;
    height:auto;
  }
  td:hover
  {
    background-color:orange;
    color:yellow;
    cursor: context-menu;
  }
  table:hover
  {
    background-color: black;
    color:white;
  }
  .img{position: absolute;left:550px;top:310px; width:90px;
  height:90px;
  background-color:red;}
  .img:hover{width:90px;height:90px; shape-inside: circle();}
*/
  </style>
  <title>validation</title>
</head>
<center>
<body >
  <!--vitpage-->

  <!--mainlogin-->
  <br><br><br>
  <div class="login">
  <div class="log">
  <form method="post" action="logvalid.php">
    <br><br><br>
    <table border="0px" width="280px">
      <tr>
        <td><label style="color:black; font-size:16px;">User:</label></td>
        <td><input type="text" name="user" placeholder="Enter your username.." autocomplete="off">
        <span class="error" style="color:red;"><?php echo $userErr ?></span><br></td>
      </tr>
      <tr>
        <td><label style="color:black; font-size:16px;">Password:</label></td>
        <td><input type="password" name="pass" placeholder="Enter your Password.." autocomplete="off">
        <span class="error" style="color:red;"><?php echo $passErr ?></span><br></td>
      </tr>
    </table>
    <hr width="200px" color="green" >
    <input type="submit" name="submit" value="Login">
  </form>
  <div class="signup">

  <h2>Look at Here, <br>Key to Success:</h2>
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; align:right;">Sign Up</button>

  <div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="signupvlid.php" method="post">
      <div class="container">
        <h1>Register Here</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <!--<label for="name"><b>UserName</b></label><br>-->
        <input type="text" placeholder="Enter Name" name="user" required><br>


        <!--<label for="pswd"><b>Password</b></label><br>-->
        <input type="password" placeholder="Enter Password" name="pswd" required><br>

        <!--<label for="pswd-repeat"><b>Repeat Password</b></label><br>-->
        <input type="password" placeholder="Repeat Password" name="pswd-repeat" required><br>

        <!--<label for="email"><b>Email</b></label><br>-->
        <input type="text" placeholder="Enter Email" name="email" required><br>

        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label><br>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn">Sign Up</button>
        </div>
      </div>
    </form>
  </div>

  <script>
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>

  </div>
</div>
</div>
<!--mainsignup-->
</body>
</center>
</html>
