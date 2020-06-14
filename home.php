<?php
session_start();
if($_SESSION["user"]==true)
{
  ?>
  <h1>
    <?php
  echo "welcome"." ".$_SESSION["user"];
    ?>
  </h1>
<?php
}
else
{
      header("location:login.php");
}

?>
<html>
<head>

  <title>HomePage</title>
  <style>
  body
  {
    background-image: url('backlog8.jpg');
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: auto;
  }
  img{width:100px; height:100px;}
.container
{
  position: relative;
  width: 50%;
}
.image
{
  display: block;
  width: 100%;
  height: auto;
}
.overlay
{
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100px;
  width: 100px;
  opacity: 0;
  transition: .6s ease;
  background-color: grey;
}
table
{
  margin-left: 30px;
  margin-top: 20px;
  background-color: white;
}
th,td
{
  padding: 8px;
}
.container:hover .overlay
{
  opacity: 1.0;
}
.text
{
  color: white;
  font-size: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.div1
{
    position: absolute;
    top:0px;
    left:55%;
    height:600px;
    width:560px;
    background-color:#232324;
}

h3
{
  margin-left: 100px;
  color: green;
}
.div2
{
  position: absolute;
  top:0px;
  left:85%;
  height:60px;
  width:100px;
  background-color:#232324;
}
</style>
</head>
<body background="backlog8.jpg">
  <div class="div1">
    <h3>Look at below.. <br>The list of Registered Avatar,<br>viewing the doc. Hoverover their info"_"</h3>

    <table border="0px">

      <tr>
        <td><div class="container"><img src="1.png" >
        <div class="overlay">
          <div class="text">Rachit Nagda<br>futureo0o@gmail.com</div>
        </div>
      </div>
      </td>
          <td><div class="container"><img src="2.jpg">
            <div class="overlay">
              <div class="text">Snake Pal<br>paltu129@gmail.com</div>
            </div>
          </div>
          </td>
          <td><div class="container"><img src="3.jpg">
            <div class="overlay">
              <div class="text">Shyam Kothari<br>shymkot@gmail.com</div>
            </div>
          </div>
          </td>
          <td><div class="container"><img src="4.jpg">
            <div class="overlay">
              <div class="text">Vishnav<br>vishnu456@gmail.com</div>
            </div>
          </div>
          </td>
     </tr>
     <tr>
         <td><div class="container"><img src="5.jpg">
           <div class="overlay">
             <div class="text">Anand Kishore<br>kanand17@gmail.com</div>
           </div>
         </div>
         </td>
         <td><div class="container"><img src="6.jpg">
           <div class="overlay">
             <div class="text">Mukharji Raj<br>Rajmukharji@gmail.com</div>
           </div>
         </div>
         </td>
         <td><div class="container"><img src="7.png">
           <div class="overlay">
             <div class="text">namdeo Solanki<br>salonkindv@gmail.com</div>
           </div>
         </div>
         </td>
         <td><div class="container"><img src="8.png">
           <div class="overlay">
             <div class="text">Pradeep Meena<br>meena120@gmail.com</div>
           </div>
         </div>
         </td>
    </tr>
    <tr><td><div class="container"><img src="9.jpg">
      <div class="overlay">
        <div class="text">lakhan Lal<br>lollal@gmail.com</div>
      </div>
    </div>
    </td>
        <td><div class="container"><img src="10.jpg">
          <div class="overlay">
            <div class="text">Gurpreet kaur<br>pritto32@gmail.com</div>
          </div>
        </div>
        </td>
        <td><div class="container"><img src="11.png">
          <div class="overlay">
            <div class="text">Amit Shah<br>shahmit@gmail.com</div>
          </div>
        </div>
        </td>
        <td><div class="container"><img src="12.png">
          <div class="overlay">
            <div class="text">Sonal Sharma<br>sonalsh780@gmail.com</div>
          </div>
        </div>
        </td>
   </tr>
    </table>
  </div>
  <div class="div2">
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>
