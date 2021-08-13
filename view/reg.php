<!DOCTYPE html>
<html>
<head>
</head>

<body>

<h6 id="Header"><?php include '../header/header.php';?></h6>
<?php

include('../Control/regcheck.php');

if(isset($_SESSION['username'])){
header("location: ../view/login.php");
}
?>

<h1 id="Title">Registration</h1>

<form action="../control/regCheckfile.php" method='post' >
  
  
  <Label>First Name:</label><br>  </h4>
  <input type="text" id="fname" name="fname" ><?php echo $fnameError;?><br><br>
  <Label>Last Name:</Label><br>  </h4>
  <input type="text" id="lname" name="lname" ><?php echo $lnameError;?><br><br>
  <Label>Email:</Label><br>  </h4>
  <input type="text" id="email" name="email" ><?php echo $emailError;?><br><br>
  <Label>User Name:</label><br>  </h4>
  <input type="text" id="username" name="username" ><?php echo $usernameError;?><br><br>

  <Label>Date Of Birth:</Label><br>
  <input type="date" id="DOB" name="DOB" ><?php echo $DOBError; ?> <h4 id="jsDOBerror"></h4><br><br>
  
  <Label>Password:</Label><br> 
  <input type="password" id="password" name="password" ><?php echo $passwordError; ?><br><br>

  
  <Label>Confirm Password:</Label><br>
  <input type="password" id="cpassword" name="cpassword" ><?php echo $cpasswordError; ?> <br><br>
 
  <Label>Address:</Label><br>
  <input type="text" id="address" name="address" ><?php echo $addressError; ?><br><br>

  <label>Gender:</label> <?php echo $genderError; ?>
  <input type="radio" id="gender" name="gender" value="Male" >Male
  <input type="radio" id="gender" name="gender" value="Female" >Female
  <br><br><br>

  
  <br>

  <br>

  <input type="submit" name="submit" id="Button" value="Submit">
  <input type="reset" name="reset" id="Button" value="reset">

</form> 

<ul style="list-style-type:square">
<li>Do you want to go to  <a href="../View/home.php">HOME</a><br></li>
<li>Do you want to go to  <a href="../view/login.php">LOG IN</a><br></li>
<li>Do you want to go to  <a href="../view/profile.php">PROFILE</a><br></li>
<li>Do you want to go to  <a href="../control/logoutcheck.php">LOGOUT</a></li>
</ul>

<br>


</b>


</body>

</html>