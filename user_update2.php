<?php
session_start();
        $db_HOST="localhost";
        $db_USER="root";
        $db_PASS="123456";

        
        $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL" .mysqli_error());
        mysqli_select_db($conn,"hotelmgmt");

        $query="UPDATE usersignup SET 
        fullname='$_POST[fullname]', 
        birthdate='$_POST[birthdate]',
        password='$_POST[password]',
        address='$_POST[address]', 
        phone='$_POST[phone]',
        email='$_POST[email]' 
        WHERE username='$_GET[id]'";

        $retval=mysqli_query($conn,$query);
        
        if($retval){
            header("refresh:3 url=userdetail.php");
        }
        else{
            echo "Not Update";
        }
    
    ?>