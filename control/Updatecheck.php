<?php

 $error="";
// store session data
$id = $username = "";

if (isset($_POST['update'])){
  if ((empty($_POST['username']))) {
    
    $error = "<h4 style='color:red'>Enter Correct Input</h4>";
    
    }
    else
{
  $id=$_POST['id'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $DOB=$_POST['DOB'];
  $password=$_POST['password'];
  $address=$_POST['address'];
  $gender=$_POST['gender'];
 
 
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateUser($conobj,"registration",$id, $username, $email,$DOB,$password,$address,$gender);

echo $userQuery;
$connection->CloseCon($conobj);


}
}
?>