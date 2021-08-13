<?php
include('db.php');

session_start(); 
$fname=$lname= $email = $username = $DOB = $password= $cpassword=  $address=  $gender =    "";

$fnameError= $lnameError= $emailError=  $usernameError= $DOBError= $passwordError =  $cpasswordError = $addressError=   $genderError=   " ";

function test_input($data) {$data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);
return $data; }

if(isset($_POST["submit"])){

$lname = test_input($_POST["fname"]);
$lname = test_input($_POST["lname"]);
$email = test_input($_POST["email"]);
$username = test_input($_POST["username"]);
$DOB  = test_input($_POST["DOB"]);
$password = test_input($_POST["password"]);
$cpassword = test_input($_POST["cpassword"]);
$address = test_input($_POST["address"]);
$gender = test_input($_POST["gender"]);




if ((empty($_POST['fname'])) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['fname']))||(empty($_POST['lname'])) || (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['lname']))|| (empty($_POST['email']))  || (empty($_POST['username'])) ||(empty($_POST['DOB']))|| 
(empty($_POST['password'])) ||(empty($_POST['cpassword'])) ||(empty($_POST['address'])) ||(empty($_POST['gender'])) 
 )
 {
    $fnameError = " First Name is required!";
    $lnameError = " Last Name is required!";
    $emailError = " Email is required"; 
    $usernameError =  " UserName is required";
    $DOBError = " Date of birth is required";
    $passwordError = " Password is required";
    $cpasswordError = " Password confirmation is required";
    $addressError = " Address is required";
    $genderError = " Gender is required";
    
} else{


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$username = $_POST['username'];
$DOB  = $_POST['DOB'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];
$gender = $_POST['gender'];


$connection = new db();
$conn=$connection->OpenCon();
$userQuery=$connection->insertUser($conn,$id,$fname,$lname, $email, $username, $DOB, $password, $cpassword, $address,  $gender);

$_SESSION["fname"]=$fname;
$_SESSION["lname"]=$lname;
$_SESSION["email"]=$email;
$_SESSION["username"]=$username;
$_SESSION["DOB"] =$DOB ;
$_SESSION["password"]=$password;
$_SESSION["cpassword"]=$cpassword;
$_SESSION["address"]=$address;
$_SESSION["gender"]=$gender;


}
}

?>