<?php
    
    $db_HOST="localhost";
    $db_USER="root";
    $db_PASS="123456";

    $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL Server" .mysqli_error());
    mysqli_select_db($conn,"hotelmgmt") or die("Failed to connect to Database Server" .mysqli_error());


    $username= $_POST['username'];
    $password= $_POST['password'];
    
    $username= stripcslashes($username);
    $password= stripcslashes($password);
    $username = mysqli_real_escape_string($conn,$username);
    $password = mysqli_real_escape_string($conn,$password);

    $query="select * from staffsignup where Username='$username' AND Password='$password'";
    $retval=mysqli_query($conn,$query);

    $row=mysqli_num_rows($retval);

    if($row==1)
    {
        header('location: staffpage.html');
    }
    else
    {
        echo "Failed to Login";
        header("refresh:3 ; url=stafflogin.html");
    }

?>