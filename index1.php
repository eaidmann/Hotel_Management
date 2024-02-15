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
<div>
	<p class="desc">
		<strong>Welcome to Hotel TourisMY Perlis!</strong>
		<br/>
		<br/>
If you are looking for the best room deal, all you need to do is book direct <a class="booking" href="room1.php">here</a>. We guarantee that room rates on our website are the lowest rates publicly available on the Internet.  To read more on our Best Rate Guarantee policy, please <a class="policy"  href="https://www.facebook.com/syafiqpfs">click here</a>.
<br/>
<br/>
Let go of your daily stresses and feel revived when you hit up our sauna and Jacuzzi on your next stay with us. If you’re looking to keep your fitness goals in check even when on holidays, our well-equipped Equinox Fitness Centre will not disappoint.
	</p>


</div>

<footer>
	Created by <a class="link" href="https://www.facebook.com/syafiqpfs"> TourisMY.Shd.Bhd </a>

</footer>
</body>

</html>
