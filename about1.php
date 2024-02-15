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


<div >
<img class="image1" src="image1.jpg" >
<img class="image2" src="image2.jpg" >
<img class="image3" src="image3.jpg" >



<p  class="ABOUT" >
<strong>ABOUT</strong>
<br/>
“Northern Heritage”. If you prefer luxury comfort place, then surely The TourisMY Hotel may suit you better. Strategically located in the commercial district of Padang Besar, Perlis. Whether you’re a tourist or traveling on business, TourisMY Hotel is a great choice for accommodation when visiting Perlis.
<br/>
<br/>
The hotel houses 662 guestrooms and suites, each classily furnished and facilitated with state of the art in-room amenities.It is a popular choice for executive retreats and incentive group gatherings.  Hotel TourisMY is also uniquely built for meetings, banquets and conventions.  It houses two columnless Grand Ballroom and Matahari Ballroom – reputed to be the largest on the island able to house up to 1,300 people; and also 21 function rooms with various dimensions.
<br/>
<br/>
Perlis is famed for its eclectic cuisine and the hotel is no different with its variety of dining outlets.  The hotel houses several delicious options for your palette ranging from classic French cuisine at The View to authentic Japanese fare at Kampachi. Other hotel facilities include a fully equipped fitness centre, outdoor swimming pool, squash and tennis courts, a business centre, scheduled shuttle services and impeccable service to complete a 5-star stay experience.
</div>


</div>

<footer>
	Created by <a class="link" href="https://www.facebook.com/syafiqpfs"> TourisMY.Shd.Bhd </a>

</footer>
</body>

</html>
