<?php

include('../Control/profilecheck.php');

if(isset($_SESSION['username'])){
header("location: ../control/profileoutput.php");
}
?>



<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
</head>

<body>
<h6 id="Header"><?php include '../header/header.php';?></h6>

<h1>Profile</h1>

<br><br><br><br>

<form action="" method='post' onsubmit="return validateForm2()">
  
<Label>Id:</label><br>
  <input type="text" id="id" name="id" ><br><br>

  <Label>User Name:</label><br> </h4>
  <input type="text" id="username" name="username" ><?php echo $usernameError;?> <br><br>
  
  
  <Label>Email:</Label><br> </h4>
  <input type="text" id="email" name="email" ><?php echo $emailError;?> <br><br>
 
  <Label>Date Of Birth:</Label><br>
  <input type="date" id="DOB" name="DOB" ><?php echo $DOBError; ?> <br><br>
  
  <Label>Password:</Label><br>  
  <input type="password" id="password" name="password" ><?php echo $passwordError;?><br><br>

  
 
  <Label>Address:</Label><br>
  <input type="text" id="address" name="address" ><?php echo $addressError; ?></h4><br><br>

  <label>Gender:</label><?php //echo $genderError; ?> 
  <input type="radio" id="gender" name="gender" value="Male" >Male 
  <input type="radio" id="gender" name="gender" value="Female" >Female
  <br><br><br>

  <br><br>

  <br>

  <input type="submit" name="submit" id="Button" value="Submit">
  <input type="reset" name="reset" id="Button" value="reset">

</form> 

</form>

<ul type="squre">
<li>Do you want to go to<a href="../View/update.php">Update</a></li>
<li>Do you want to go to  <a href="../View/home.php">HOME</a><br></li>
<li>Do you want to go to  <a href="../view/reg.php">REGISTRATION</a><br></li>
<li>Do you want to go to  <a href="../view/login.php">LOG IN</a></li>
<li>Do you want to go to  <a href="../view/profile.php">PROFILE</a><br></li>
<li>Do you want to go to  <a href="../control/logoutcheck.php">LOGOUT</a></li>

</ul>

<?php include '../footer/footer.php';?> 
<br>
</body>
</html>



