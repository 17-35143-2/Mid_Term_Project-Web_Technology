<?php
include('../control/db.php');
include('../control/updatecheck.php');
?>
<!DOCTYPE html>
<html>
<head>

<title>Account update</title>

</head>
<body>
<h6 id="Header"><?php include '../header/header.php';?></h6>
<h2>Update Account information</h2>

<form action="" method='post' onsubmit="return validateForm2()">
  
<Label>Id:</label><br> 
  <input type="text" id="id" name="id" ><br><br>
  
  <Label>User Name:</label><br> 
  <input type="text" id="username" name="username" ><br><br>
  
  
  <Label>Email:</Label><br>
  <input type="text" id="email" name="email" ><br><br><br>
 
  <Label>Date Of Birth:</Label><br>
  <input type="date" id="DOB" name="DOB" ><br><br>
  
  <Label>Password:</Label><br> 
  <input type="password" id="password" name="password" ><br><br>

  
 
  <Label>Address:</Label><br>
  <input type="text" id="address" name="address" ><br><br>

  <label>Gender:</label> <h4 id="jsgendererror"></h4>
  <input type="radio" id="gender" name="gender" value="Male" >Male
  <input type="radio" id="gender" name="gender" value="Female" >Female
  <br><br><br>

  
  <input type="submit" name="update" id="Button" value="update">
  </form>
  


  <?php

$connection = new db();
$conn=$connection->OpenCon();
$userQuery=$connection->showall($conn,"registration"); 
 

echo "<table border='1'>
<tr>
<th>id</th>
<th>username</th>
<th>email</th>
<th>DOB</th>
<th>password</th>
<th>address</th>
<th>gender</th> 


</tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
   
    echo "<td>" . $row['DOB'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";

    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    
    
   
    }
    echo "</table>"; //$conn->close(); //mysqli_close($conn);
    } 
?>  
<ul type="squre">

<li>Do you want to go to  <a href="../view/reg.php">REGISTRATION</a><br></li>
<li>Do you want to go to  <a href="../view/profile.php">PROFILE</a><br></li>
<li>Do you want to go to  <a href="../view/login.php">LOG IN</a></li>

</ul>
</body>
</html>