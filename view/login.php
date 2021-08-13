<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: application.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>LOG IN</title>
</head>

<body>
<h6 id="Header"><?php include '../header/header.php';?></h6>
<h1>Login</h1>
<!-- onsubmit="return validateForm1()" -->
<form action="" method='post' >

 <Label>UserName:</label><br><?php echo $usernameerror; ?> <h4 id="jsusernameerror"></h4>
  <input type="text" id="username" name="username" placeholder="Enter your username!"><br><br>

  <Label>Password:</label><br><?php echo $passworderror; ?> <h4 id="jspassworderror"></h4>
  <input type="password" id="password" name="password"placeholder="Enter your password!"  ><br><br>

  <input type="button" onclick="window.location.href='http://localhost/Mycode/MidProject/view/application.php';" value="Log in" />

<input name="reset" type="reset" value="reset"><br>


<ul type="squre">
<li>Do you want to go to  <a href="../View/home.php">HOME</a><br></li>

<li>Do you want to go to  <a href="../view/profile.php">PROFILE</a><br></li>
<li>Do you want to go to  <a href="../view/add tenant.php">TENANT</a></li>
<li>Do you want to go to  <a href="../control/logoutcheck.php">LOGOUT</a></li>

</ul>
</form>

<br>
</body>
</html>