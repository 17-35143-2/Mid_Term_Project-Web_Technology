
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<h6 id="Header"><?php include '../header/header.php';?></h6>

</head>




</div>
</div>
<body>
<h2>Successfully Registered Information</h2>




<?php 
// echo "<h2>Your Input:</h2>";

// echo  $_SESSION["Firstname"];
// echo "<br>";
// echo  $_SESSION["Lastname"];
// echo "<br>";

// echo  $_SESSION["email"];
// echo "<br>";

// echo  $_SESSION["City"];
// echo "<br>";


// echo  $_SESSION["Region"];
// echo "<br>";

// echo  $_SESSION["date"];
// echo "<br>";

// echo  $_SESSION["signature"];
// echo "<br>";





include('dbapp.php');

$connection = new dbapp();
$conn=$connection->OpenCon();
$userQuery=$connection->showall($conn,"application"); 
 

echo "<table border='1'>
<tr>
<th>id</th>
<th>Firstname</th>
<th>Lastname</th> 
<th>email</th>
<th>City</th>
<th>Region</th>
<th>date</th>
<th>signature</th>

</tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['Firstname'] . "</td>";
    echo "<td>" . $row['Lastname'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['City'] . "</td>";
    echo "<td>" . $row['Region'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['signature'] . "</td>";
   
    
    echo "</tr>";
    }
    echo "</table>"; //$conn->close(); //mysqli_close($conn);
    } 
?>  
<br><br>
<ul type="squre">
<li>Do you want to go to  <a href="../View/accep_reject.php"> Add TENANT</a></li>
<li>Do you want to go to  <a href="../view/profile.php"> PROFILE</a></li>

<li>Do you want to go to  <a href="../view/add tenant.php"> Add TENANT</a></li>
<li>Do you want to go to  <a href="../control/logoutcheck.php">LOGOUT</a></li>




</ul>

</body>
</html>
