<?php
class db{
function OpenCon(){
$servername = "localhost";
$username = "root";
$password = "";
$dbName= "Rental_Property_Management";
$conn = new mysqli($servername, $username, $password,$dbName) or die("Connect failed: %s\n". $conn -> error);
return $conn;}
function insertUser($conn,$id,$fname,$lname, $email, $username,$DOB, $password, $cpassword, $address,  $gender ){
    $stmt=$conn->preapare("insert into registration(id,fname,lname, email, username, DOB, password, cpassword,  address, gender ) values(?,?,?,?,?,?,?,?,?,?)") or die(mysqli_error($conn));
    $stmt->bind_param("isssssssss",$id,$fname,$lname, $email, $username, $DOB, $password, $cpassword,   $address,  $gender) or die(mysqli_error($conn));
    $stmt->execute();
    //echo "<h3>Created Successful!</h3>";
    $stmt->close();}

function showall($conn,$table) {
    $result = $conn->query("SELECT * FROM  $table ");
    return $result;
    echo "<h3>Registration information showed.</h3>";} 

     
function GetUserByUname($conn,$table, $user)
 {
$result = $conn->query("SELECT * FROM  $table WHERE id='$user'");
 return $result;
 }


 function InputCheckUser($conn,$table,$fname)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $fname."'");
 return $result;
 }

 function FetchCheckUser($conn,$table)
 {
 $result = $conn->query("SELECT * FROM ". $table);
 return $result;
 }

 function UpdateUser($conn,$table,$id, $username,$email,$DOB,$password,$address,$gender)
 {
     $sql = "update registration SET  username='$username',email='$email',DOB='$DOB',password='$password',address='$address',gender='$gender' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record Updated Successfully!";
    } else {
        $result= "Error Updating Record!" ;
    }
    return $result;
 }


 
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>