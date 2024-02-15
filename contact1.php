<?php 
session_start();
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


<br/>
<br/>
<br/>
<br/>
<hr color = "black" />
<div align=" center">
<p class="CONTACTS" >		
<strong>CONTACTS</strong>
<br/>
Hotel TourisMY
<br/>
Kolej Kediaman UniCITI Alam (KKU),
<br/>
Universiti Malaysia Perlis (UniMAP),
<br/>
02100, Padang Besar
<br/>
Malaysia
<br/>
<br/>
<br/>
<br/>
Tel: +60 4 632 7002
<br/>
Fax: +60 4 632 7101
<br/>
<br/>
Email: info@per.equatorial.com
<br/>
Web: perlis.TourisMY.com
<br/>
<br/>
</div>

<footer>
	Created by <a class="link" href="https://www.facebook.com/syafiqpfs"> TourisMY.Shd.Bhd </a>

</footer>
</body>

</html>
