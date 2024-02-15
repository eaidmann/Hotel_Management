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

    $query1=("Select * From userbooking WHERE username = '$username'");
    $retval1=mysqli_query($conn,$query1);
?>

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
    <a href="userdetail.php" class ="name"> Welcome <u><?php echo $_SESSION['username']; ?> </u></a>
</div>

<div align="center" class="userbooking">
        <h1>Your Reservation</h1>
        <hr/>
        <table width=70% border="5" cellpadding="5" cellspacing="5">
        <thead>
            <th>Book ID</th>
            <th>Date_in</th>
            <th>Date_out</th>
            <th>Package</th>
            <th>Payment</th>
        </thead>

<?php

    while($row1=mysqli_fetch_array($retval1)){
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" .$row1['book_id']. "</td>"; 
        echo "<td>" .$row1['date_in']. "</td>";
        echo "<td>" .$row1['date_out']. "</td>";
        echo "<td>" .$row1['package']. "</td>";
        echo "<td>" .$row1['payment']. "</td>";
        echo "</tr>";
        echo "</tbody>";
    }

    mysqli_close($conn);
    
 ?>
    </table>
</div>



<div align="center" class="userdetail">
        <h1>User Details</h1>
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
       
        echo "<td><a href=user_update.php?id=".$row['username'].">Update</a></td>";
        echo "</tr>";
        echo "</tbody>";
    }
    
    

?>
    </table>
    </div>
    </body>
    </HTML>






<footer>
	Created by <a class="link" href="https://www.facebook.com/syafiqpfs"> TourisMY.Shd.Bhd </a>

</footer>
</body>

</html>
