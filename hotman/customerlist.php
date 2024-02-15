<?php
session_start();

    $db_HOST="localhost";
    $db_USER="root";
    $db_PASS="123456";

    $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL Server" .mysqli_error());
    mysqli_select_db($conn,"hotelmgmt") or die("Failed to connect to Database Server" .mysqli_error());
	
	$username =$_SESSION['username'];
    
    $query=("Select * From usersignup ");
    $retval=mysqli_query($conn,$query)
    
    

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

<div align="center" class="userdetail">
        <h1>Customers Detail</h1>
        <hr/>
        <table width=70% border="5" cellpadding="5" cellspacing="5">
        <thead>
            <th>Full Name</th>
            <th>Birthdate</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Status</th>
        </thead>
        
    

<?php

    while($row=mysqli_fetch_array($retval)){
        echo "<tbody>";
        echo "<tr>"; 
        echo "<td>" .$row['fullname']. "</td>"; 
        echo "<td>" .$row['birthdate']. "</td>"; 
        echo "<td>" .$row['username']. "</td>";
        echo "<td>" .$row['password']. "</td>";
        echo "<td>" .$row['email']. "</td>";  
        echo "<td>" .$row['address']. "</td>"; 
        echo "<td>" .$row['phone']. "</td>"; 
        echo "<td><a href=user_delete.php?id=".$row['username'].">Delete</a></td>";
        echo "</tr>";
        echo "</tbody>";
    }
    
    

?>
    </table>
    </div>

    </body>
</HTML>