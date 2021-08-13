<?php

 $error="";
// store session data
$id = $username = "";

if (isset($_POST['updateapp'])){
  if ((empty($_POST['Firstname']))) {
    
    $error = "<h4 style='color:red'>Enter Correct Input</h4>";
    
    }
    else
{
  $id=$_POST['id'];
  $Firstname = $_POST['Firstname'];
  $Lastname = $_POST['Lastname'];
  $email = $_POST['email'];
  $City = $_POST['City'];
  $Region = $_POST['DOB'];
  $date = $_POST['date'];
  $signature = $_POST['signature'];
 
 
$connection = new dbapp();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"application",$id,$Firstname,$Lastname, $email, $City,$Region, $date, $signature);

echo $userQuery;
$connection->CloseCon($conobj);


}
}
?>