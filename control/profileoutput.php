<?php
session_start(); 

$cookie_name = "Profile";
$cookie_value = $_SESSION["username"];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


if(empty($_SESSION["username"])) 
{
header("Location:../view/profile.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<body>
<h2>Profile Information</h2>


<h5>Do you want to <a href="logoutcheck.php">logout</a></h5>

<?php 
echo "<h2>Your Input:</h2>";

echo  $_SESSION["username"];
echo "<br>";

echo  $_SESSION["email"];
echo "<br>";

echo  $_SESSION["DOB"];
echo "<br>";

echo  $_SESSION["address"];
echo "<br>";

echo  $_SESSION["gender"];
echo "<br>";


?>

<?php

 

?>

<ul style="list-style-type:square">
<li>Do you want to go to  <a href="../View/update.php">Update</a><br></li>
<li>Do you want to go to  <a href="../control/logoutcheck.php">LOGOUT</a></li>
</ul.

</body>
</html>
