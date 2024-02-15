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

        $query="Select * from staffsignup where ID='$_GET[id]'";

        $retval=mysqli_query($conn,$query);
    ?>
        
        <div align="center" class="stafflisting">
            <h2>Update Staff Detail</h2>
        <table>
            <tr>
                <th>Staff ID</th>
                <th>Full Name</th>
                <th>Birthdate</th>
                <th>Username</th>
                <th>Password</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Position</th>
            </tr>
<?php
        while($row=mysqli_fetch_array($retval)){
            echo "<tr><form action=staffupdate.php?id=".$row['ID']." method='POST'>";
            echo "<td>".$row['ID']."</td>";
            echo "<td><input type=text name=fullname value=".$row['Fullname']."></td>";
            echo "<td><input type=date name=birthdate value=".$row['Birthdate']."></td>";
            echo "<td><input type=text name=username value=".$row['Username']."></td>";
            echo "<td><input type=text name=password value=".$row['Password']."></td>";
            echo "<td><input name=address value=".$row['Address']." rows=5 cols=30 ></td>";
            echo "<td><input type=text name=phone value=".$row['Phone']."></td>";
            echo "<td><input type=text name=email value=".$row['Email']."></td>";
            echo "<td><select name=position><option value=1>Cleaner</option>
            <option value=Worker>Worker</option>
            <option value=Concierge>Concierge</option>
            <option value='Event Planner'>Event Planner'</option>
            <option value='Executive Chef'>Executive Chef</option>
            <option value='Front Desk Clerk'>Front Desk Clerk</option>
            <option value='General Manager'>General Manager</option>
            <option value='Housekeeper'>Housekeeper</option>
            </select></td>";
            echo "<td><input type='submit'></td>";
            echo "</form></tr>";
        }
            echo "<a href='stafflist.php'>Exit</a>";
?>
        </table>
    </div>
    </body>
</HTML>