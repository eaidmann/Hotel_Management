<?php

    $db_HOST="localhost";
    $db_USER="root";
    $db_PASS="123456";

    $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL Server" .mysqli_error());
    mysqli_select_db($conn,"hotelmgmt") or die("Failed to connect to Database Server" .mysqli_error());

    $TYPE= $_POST['roomtype'];
    $STATUS= $_POST['roomstatus'];
    $PRICE= $_POST['roomprice'];

    $query="Insert into roomlist (RoomType,Status,Price) values ('$TYPE','$STATUS','$PRICE')";
    $retval=mysqli_query($conn,$query);

    if(isset($_POST['radd'])){
        signup();
    }

function signup(){
    if(!retval){
        echo "Failed to Add New Room.";
    }
    else{
        header('location: room.php');
    }
}
?>