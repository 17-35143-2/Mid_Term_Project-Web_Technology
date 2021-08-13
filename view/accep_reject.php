<?php
session_start();
if(isset($_POST['agent'])){
    header("location: agent.php");
}


if(isset($_POST['rent'])){
    header("location: rent.php");
}

if(isset($_POST['sold'])){
    header("location: sold.php");
}
?>
<!DOCTYPE html>
<html>
<head> <title> Accept Or Reject </title> 

</head>
<body>
<h6 id="Header"><?php include '../header/header.php';?></h6>
<div class="top"></div>
<div class="agent">
<form action="  " method="post">
<table > 
     
     <tr >
     <td>Accept</td>
      <td>  <a href="http://localhost/Mycode/MidProject/view/accept.php"target="blank"><b>Accept</b></a> </td>
    </tr>
       <tr>
       <td> Reject </td>
       <td> <a href="http://localhost/Mycode/MidProject/view/reject.php"target="blank"><b>Reject</b></a>  </td>
    </tr>
    
    
</table>

</form>


</div>
Go Back To   <a href="../control/appoutput.php">Registerd Information</a><br>
</body>
</html>