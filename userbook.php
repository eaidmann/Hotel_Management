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

$username = $_SESSION['username'];
$datein=$_POST['datein'];
$dateout=$_POST['dateout'];
$package=$_POST['package'];
$payment=$_POST['payment'];

$sql = "INSERT INTO userbooking (username,date_in,date_out,package,payment) VALUES ('$username','$datein','$dateout','$package','$payment')";

$retval = mysqli_query($conn,$sql);

if(!$retval){
	die('Could Not enter data' .mysqli_error($conn));
}

echo "Entered Data Succesfully";
header ( 'location: userdetail.php');

mysqli_close($conn);

?>