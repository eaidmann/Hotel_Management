<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body  background="pic.jpg">
<h2> TourisMY</h2>



<a href="index.php"><button class="logout" style="width:auto;">Logout</button></a>


<div class="topnav">  
    <a class="active" href="index1.php">Home</a>
    <a href="about1.php">About</a>
    <a href="room1.php">Room</a>
    <a href="contact1.php">Contact</a>
    <a class="register" href="register.php">Register</a>
   
</div>
    
<?php
    session_start();

    $db_HOST="localhost";
    $db_USER="root";
    $db_PASS="123456";

    $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL Server" .mysqli_error());
    mysqli_select_db($conn,"hotelmgmt") or die("Failed to connect to Database Server" .mysqli_error());
    
    $username =$_SESSION['username'];
    
    $query=("Select * From usersignup WHERE username = '$username'");
    $retval=mysqli_query($conn,$query);
?>
        
        <div align="center" class="userdetail">
        <h1>User Details</h1>
        <hr/>
        <table width=70% border="5" cellpadding="5" cellspacing="5">
        <tr>
            <th>Full Name</th>
            <th>Birthdate</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Status</th>
        </tr>
<?php
        while($row=mysqli_fetch_array($retval)){
            echo "<tr><form action=user_update2.php?id=".$row['username']." method='POST'>";
            echo "<td><input type=text name=fullname value=".$row['fullname']."></td>";
            echo "<td><input type=date name=birthdate value=".$row['birthdate']."></td>";
            echo "<td>".$row['username']."</td>";
            echo "<td><input type=text name=password value=".$row['password']."></td>";
            echo "<td><input type=text name=email value=".$row['email']."></td>";
            echo "<td><input name=address value=".$row['address']." rows=5 cols=30 ></td>";
            echo "<td><input type=text name=phone value=".$row['phone']."></td>";
            echo "<td><input type='submit'></td>";
            echo "</form></tr>";
        }
            echo "<a href='userdetail.php'>Exit</a>";
?>
        </table>
    </div>
    </body>
</HTML>