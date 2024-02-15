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
	if(isset($_POST['login']))
	{
		$username= $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM usersignup WHERE username= '$username' and password = '$password' ";
		$retval = mysqli_query($conn,$sql);

		if(mysqli_num_rows($retval) >0 ) 
		{

			$row = mysqli_fetch_array($retval,MYSQLI_ASSOC);
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header ( "Location: index1.php");

		}
		else
		{
		echo "Wrong password or username" ;
		}
	}



?>