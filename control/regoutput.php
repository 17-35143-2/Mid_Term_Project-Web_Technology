<?php
session_start(); 

if(empty($_SESSION["username"])) 
{
header("Location:../view/reg.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Regoutput</title>
</head>

<body>
<h2>Successfully Registered Information</h2>

<?php 
echo "<h2>Your Input:</h2>";

echo  $_SESSION["fname"];
echo "<br>";
echo  $_SESSION["lname"];
echo "<br>";

echo  $_SESSION["email"];
echo "<br>";

echo  $_SESSION["username"];
echo "<br>";


echo  $_SESSION["DOB"];
echo "<br>";

echo  $_SESSION["address"];
echo "<br>";

echo  $_SESSION["gender"];
echo "<br>";
?>

<ul type="squre">
<li>Do you want to go to  <a href="../View/home.php">HOME</a><br></li>
<li>Do you want to go to  <a href="../view/reg.php">REGISTRATION</a><br></li>
<li>Do you want to go to  <a href="../view/login.php">LOG IN</a></li>
<li>Do you want to go to  <a href="../view/profile.php">PROFILE</a><br></li>
<li>Do you want to go to  <a href="../control/logoutcheck.php">LOGOUT</a></li>

</ul>
</body>
</html>
