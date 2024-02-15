<?php
        $db_HOST="localhost";
        $db_USER="root";
        $db_PASS="123456";
        
        $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL" .mysqli_error());
        mysqli_select_db($conn,"hotelmgmt");

        $query="UPDATE roomlist SET RoomType='$_POST[rtype]' , Status='$_POST[rstatus]' , Price='$_POST[rprice]' WHERE RoomID='$_GET[id]'";

        $retval=mysqli_query($conn,$query);
        
        if($retval){
            header("refresh:1 ; url=room.php");
        }
        else{
            echo "Not Update";
        }
    
    ?>