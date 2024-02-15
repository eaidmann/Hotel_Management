<?php

    $db_HOST="localhost";
    $db_USER="root";
    $db_PASS="123456";

    $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL Server" .mysqli_error());
    mysqli_select_db($conn,"hotelmgmt") or die("Failed to connect to Database Server" .mysqli_error());

    $NAME= $_POST['staffname'];
    $DATE= $_POST['birthdate'];
    $USERNAME= $_POST['username'];
    $PASSWORD= $_POST['password'];
    $ADDRESS= $_POST['address'];
    $PHONE= $_POST['phonenumber'];
    $EMAIL= $_POST['email'];

    $query="Insert into staffsignup (Fullname,Birthdate,Username,Password,Address,Phone,Email) values ('$NAME','$DATE','$USERNAME','$PASSWORD','$ADDRESS','$PHONE','$EMAIL')";
    $retval=mysqli_query($conn,$query);

    if(isset($_POST['register'])){
        signup();
    }

function signup(){
    if(!retval){
        echo "Failed to Sign Up.";
    }
    else{
        header('location: stafflogin.html');
    }
}
?>