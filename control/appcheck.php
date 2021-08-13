<?php
include('dbapp.php');

session_start(); 
$Firstname=$Lastname= $email = $City = $Region = $date= $signature=   "";

$FirstnameError= $LastnameError= $emailError=  $CityError= $RegionError= $dateError =  $signatureError =  " ";

function test_input($data) {$data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);
return $data; }

if(isset($_POST["Submit your rental application form"])){

$Firstname = test_input($_POST["Firstname"]);
$Lastname = test_input($_POST["Lastname"]);
$email = test_input($_POST["email"]);
$City = test_input($_POST["City"]);
$Region  = test_input($_POST["Region"]);
$date = test_input($_POST["date"]);
$signature = test_input($_POST["signature"]);


if ((empty($_POST['Firstname']))||(empty($_POST['Lastname'])) || (empty($_POST['email']))  || (empty($_POST['City'])) ||(empty($_POST['Region']))|| 
(empty($_POST['date'])) ||(empty($_POST['signature'])) 
 )
 {
    $FirstnameError = " First Name is required!";
    $LastnameError = " Last Name is required!";
    $emailError = " Email is required"; 
    $CityError =  " UserName is required";
    $RegionError = " Date of birth is required";
    $dateError = " Password is required";
    $signatureError = " Password confirmation is required";
   
    
} else{


$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$email = $_POST['email'];
$City = $_POST['City'];
$Region = $_POST['DOB'];
$date = $_POST['date'];
$signature = $_POST['signature'];


$connection = new dbapp();
$conn=$connection->OpenCon();
$userQuery=$connection->insertUser($conn,$id,$Firstname,$Lastname, $email, $City, $Region, $date, $signature);

$_SESSION["Firstname"]=$Firstname;
$_SESSION["Lastname"]=$Lastname;
$_SESSION["email"]=$email;
$_SESSION["City"]=$City;
$_SESSION["Region"] =$Region ;
$_SESSION["date"]=$date;
$_SESSION["signature"]=$signature;


}
}

?>