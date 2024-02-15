<!DOCTYPE HTML>

<HTML>

    <head>
    
        <title>TourisMY Hotel - Staff Update</title>
        <link rel="stylesheet" href="styling.css">
        
    </head>
    
    <header>
    
        <h1 align="center" class="titleheader">
        <img src="hotel-logo2.png" />
        </h1>
        <hr/>
    
    </header>
<body>
    
    <?php
        $db_HOST="localhost";
        $db_USER="root";
        $db_PASS="123456";
        
        $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL" .mysqli_error());
        mysqli_select_db($conn,"hotelmgmt");

        $query="Select * from roomlist where RoomID='$_GET[id]'";

        $retval=mysqli_query($conn,$query);
    ?>
        
        <div align="center" class="stafflisting">
            <h2>Update Room Detail</h2>
        <table>
            <tr>
            <th>Room ID</th>
            <th>Room Type</th>
            <th>Status</th>
            <th>Price</th>
            <th>Setting</th>
            </tr>
<?php
        while($row=mysqli_fetch_array($retval)){
            echo "<tr><form action=roomupdate.php?id=".$row['RoomID']." method='POST'>";
            echo "<td>".$row['RoomID']."</td>";
            echo "<td><select name=rtype><option value=Economy>Economy Suite</option>
            <option value=Business>BUsiness Suite</option>
            <option value=Executive>Executive</option>
            </select></td>";
            echo "<td><select name=rstatus><option value=Available>Available</option>
            <option value=Booked>Booked</option>
            <option value=Owned>Owned</option>
            </select></td>";
            echo "<td><input type=text name=rprice value=".$row['Price']."></td>";
            echo "<td><input type='submit'></td>";
            echo "</form></tr>";
        }
            echo "<a href='room.php'>Exit</a>";
?>
        </table>
    </div>
    </body>
</HTML>