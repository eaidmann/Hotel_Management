<?php
        $db_HOST="localhost";
        $db_USER="root";
        $db_PASS="123456";
        
        $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL" .mysqli_error());
        mysqli_select_db($conn,"hotelmgmt");

        $query="UPDATE userbooking SET date_in='$_POST[datein]' , date_out='$_POST[dateout]' , package='$_POST[package]' , payment='$_POST[payment]'  WHERE book_id='$_GET[id]'";

        $retval=mysqli_query($conn,$query);
        
        if($retval){
            header("refresh:1 ; url=bookinglist.php");
        }
        else{
            echo "Not Update";
        }
    
    ?>