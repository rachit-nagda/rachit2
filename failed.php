<html>
<head>
  <title>HomePage</title>
  <style>
  body
  {
    background-image: url('failed.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
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
  button {
    color: black;
    padding: 3px 5px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;

  }
  .signup
  {
    position:absolute;
    top:40px;
    height:20%;
    left:100%;
    width:100%;

  }
  .div1
  {
    position: absolute;
    top:70px;
    left:35%;
    height:200px;
    width:260px;
  }
  </style>
</head>
<body background="backlog8.jpg">
  <div id="id01" class="model">
  <div class="div1">
    <table width="400px">
      <tr>
    <td><img src="icon.png" width="100px" height="100px"></td>
    <td><h2>You are not authorized user, Please <a href="login.php">Click Here</a> to Register yourself</h2></td>
      </tr>
    </table>
  </div>
  </div>

</body>
</html>
