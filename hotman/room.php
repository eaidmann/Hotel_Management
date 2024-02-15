<?php

    $db_HOST="localhost";
    $db_USER="root";
    $db_PASS="123456";

    $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL Server" .mysqli_error());
    mysqli_select_db($conn,"hotelmgmt") or die("Failed to connect to Database Server" .mysqli_error());

    $query=("Select * From roomlist");
    $retval=mysqli_query($conn,$query);
?>

<!DOCTYPE HTML>

<HTML>

    <head>
    
        <title>TourisMY Hotel - Room List</title>
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
            <a href="customerlist.php" >Customer List</a>
            </span>
            <span class="viewbooking">
            <a href="bookinglist.php" >Booking List</a>
            </span>
            <span class="viewstaff">
            <a href="stafflist.php" >Staff Detail</a>
            </span>
        </div>
    
        <div align="center" class="stafflisting">
        <h1>Room List</h1>
        <hr/>
        <table border="1" cellpadding="2" cellspacing="3">
        <thead>
            <th>Room ID</th>
            <th>Room Type</th>
            <th>Status</th>
            <th>Price</th>
            <th>Setting</th>
        </thead>
        
    

<?php

    while($row=mysqli_fetch_array($retval)){
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" .$row['RoomID']. "</td>"; 
        echo "<td>" .$row['RoomType']. "</td>";
        echo "<td>" .$row['Status']. "</td>";
        echo "<td>" .$row['Price']. "</td>";
        echo "<td><a href=rupdate.php?id=".$row['RoomID'].">Update</a> <a href=rdelete.php?id=".$row['RoomID'].">Delete</a></td>";
        echo "</tr>";
        echo "</tbody>";
    }
            
        echo "<a href='roomadd.html'>Add Room</a>";

    mysqli_close($conn);
    
    

?>
    </table>
    </div>
    </body>
    </HTML>