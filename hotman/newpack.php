<?php

    $db_HOST="localhost";
    $db_USER="root";
    $db_PASS="123456";

    $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL Server" .mysqli_error());
    mysqli_select_db($conn,"hotelmgmt") or die("Failed to connect to Database Server" .mysqli_error());

    $TYPE= $_POST['ptype'];
    $NAME= $_POST['pname'];
    $COST= $_POST['pcost'];

    $query="Insert into package (PackageType,PackageName,PackageCost) values ('$TYPE','$NAME','$COST')";
    $retval=mysqli_query($conn,$query);

    if(isset($_POST['padd'])){
        signup();
    }

function signup(){
    if(!retval){
        echo "Failed to Add New Package.";
    }
    else{
        header('location: package.php');
    }
}
?>