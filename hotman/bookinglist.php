<?php
session_start();

    $db_HOST="localhost";
    $db_USER="root";
    $db_PASS="123456";

    $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL Server" .mysqli_error());
    mysqli_select_db($conn,"hotelmgmt") or die("Failed to connect to Database Server" .mysqli_error());
	
	$username =$_SESSION['username'];
    
    $query1=("Select * From userbooking ");
    $retval1=mysqli_query($conn,$query1);
    
    

?>

<!DOCTYPE HTML>

<HTML>

    <head>
    
        <title>TourisMY Hotel - Staff List</title>
        <link rel="stylesheet" href="styling.css">
        
    </head>
    
    <header>
    
        <h1 align="center" class="titleheader">
        <img src="hotel-logo2.png" />
        </h1>
        <hr/>
    
    </header>

 <body>

  <div id="taskbar">
        
            <span class="viewcust">
            <a href="staffpage.html">Homepage</a>
            </span>
            <span class="viewcust">
            <a href="customerlist.php">Customer List</a>
            </span>
            <span class="viewbooking">
            <a href="bookinglist.php">Booking List</a>
            </span>
            <span class="viewstaff">
            <a href="stafflist.php">Staff Detail</a>
            </span>
        </div>

<div align="center" class="userbooking">
        <h1>Customer Reservation</h1>
        <hr/>
        <table width=70% border="5" cellpadding="5" cellspacing="5">
        <thead>
            <th>Book ID</th>
            <th>Username</th>
            <th>Date_in</th>
            <th>Date_out</th>
            <th>Package</th>
            <th>Payment</th>
            <th>Status</th>
        </thead>

<?php

    while($row1=mysqli_fetch_array($retval1)){
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" .$row1['book_id']. "</td>";
        echo "<td>" .$row1['username']. "</td>"; 
        echo "<td>" .$row1['date_in']. "</td>";
        echo "<td>" .$row1['date_out']. "</td>";
        echo "<td>" .$row1['package']. "</td>";
        echo "<td>" .$row1['payment']. "</td>";
        echo "<td><a href=bookupdate.php?id=".$row1['book_id'].">Update</a> <a href=bookingdelete.php?id=".$row1['book_id'].">Delete</a></td>";
        echo "</tr>";
        echo "</tbody>";
    }

    mysqli_close($conn);
    
 ?>
    </table>
</div>

</body>
</HTML>