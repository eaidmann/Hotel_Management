<?php
        $db_HOST="localhost";
        $db_USER="root";
        $db_PASS="123456";
        
        $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL" .mysqli_error());
        mysqli_select_db($conn,"hotelmgmt");

        $query="UPDATE staffsignup SET Fullname='$_POST[fullname]' , Birthdate='$_POST[birthdate]' , Username='$_POST[username]' , Password='$_POST[password]' , Address='$_POST[address]' , Phone='$_POST[phone]' , Email='$_POST[email]', Position='$_POST[position]' WHERE ID='$_GET[id]'";

        $retval=mysqli_query($conn,$query);
        
        if($retval){
            header("refresh:1 ; url=stafflist.php");
        }
        else{
            echo "Not Update";
        }
    
    ?>