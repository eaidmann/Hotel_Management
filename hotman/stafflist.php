<?php

    $db_HOST="localhost";
    $db_USER="root";
    $db_PASS="123456";

    $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL Server" .mysqli_error());
    mysqli_select_db($conn,"hotelmgmt") or die("Failed to connect to Database Server" .mysqli_error());

    $query=("Select ID, Fullname, Birthdate, Username, Address, Phone, Email, Position From staffsignup");
    $retval=mysqli_query($conn,$query);
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
    
        <div align="center" class="stafflisting">
        <h1>Staff List</h1>
        <hr/>
        <table border="1" cellpadding="2" cellspacing="3">
        <thead>
            <th>Staff ID</th>
            <th>Full Name</th>
            <th>Birthdate</th>
            <th>Username</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Position</th>
            <th>Status</th>
        </thead>
        
    

<?php

    while($row=mysqli_fetch_array($retval)){
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" .$row['ID']. "</td>"; 
        echo "<td>" .$row['Fullname']. "</td>"; 
        echo "<td>" .$row['Birthdate']. "</td>"; 
        echo "<td>" .$row['Username']. "</td>"; 
        echo "<td>" .$row['Address']. "</td>"; 
        echo "<td>" .$row['Phone']. "</td>"; 
        echo "<td>" .$row['Email']. "</td>"; 
        echo "<td>" .$row['Position']. "</td>"; 
        echo "<td><a href=supdate.php?id=".$row['ID'].">Update</a> <a href=staffdelete.php?id=".$row['ID'].">Delete</a></td>";
        echo "</tr>";
        echo "</tbody>";
    }

    mysqli_close($conn);
    
    

?>
    </table>
    </div>
    </body>
    </HTML>