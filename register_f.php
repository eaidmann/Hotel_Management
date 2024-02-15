<?php
 
session_start();

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '123456';
$conn = mysqli_connect('localhost', 'root', '123456');
mysqli_select_db($conn,'hotelmgmt');

if (! $conn)
{

	die ('Could Not connect to' . mysqli_error($conn));

}
$name =$_POST['name'];
$bd =$_POST['bd'];
$username = $_POST['username'];
$password = $_POST['password'];
$email =$_POST['email'];
$address =$_POST['address'];
$phone =$_POST['phone'];




$sql = "INSERT INTO usersignup ( fullname,birthdate,username,password,email,address,phone) VALUES ('$name','$bd','$username','$password','$email','$address','$phone')";

$retval = mysqli_query($conn,$sql);

if(!$retval){
	die('Could Not enter data' .mysqli_error($conn));
}

echo "Entered Data Succesfully";
header ( 'location: index.php');

mysqli_close($conn);

?>