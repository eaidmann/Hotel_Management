<!DOCTYPE HTML>

<HTML>

    <head>
    
        <title>TourisMY Hotel - Booking Update</title>
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

        $query="Select * from userbooking where book_id='$_GET[id]'";

        $retval=mysqli_query($conn,$query);
    ?>
        
        <div align="center" class="stafflisting">
            <h2>Update Booking Detail</h2>
        <table>
            <tr>
                <th>Booking ID</th>
                <th>Username</th>
                <th>Date In</th>
                <th>Date Out</th>
                <th>Package</th>
                <th>Payment</th>
            </tr>
<?php
        while($row=mysqli_fetch_array($retval)){
            echo "<tr><form action=bupdate.php?id=".$row['book_id']." method='POST'>";
            echo "<td>".$row['book_id']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td><input type=date name=datein value=".$row['date_in']."></td>";
            echo "<td><input type=date name=dateout value=".$row['date_out']."></td>";
           echo "<td><select name=package><option value=Economy>Economy Suite</option>
            <option value=Business>Business Suite</option>
            <option value=Executive>Executive Suite</option>
            </select></td>";
            echo "<td><select name=payment><option value=Visa>Visa</option>
            <option value='Master Card'>Master Card</option>
            <option value=Bitcoin>Bitcoin</option><option value=Cash>Cash</option>
            </select></td>";
            echo "<td><input type='submit'></td>";
            echo "</form></tr>";
        }
            echo "<a href='bookinglist.php'>Exit</a>";
?>
        </table>
    </div>
    </body>
</HTML>