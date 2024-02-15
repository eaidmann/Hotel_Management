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
<br>
<br>
<br>
<br>

<div >
<img class="room1" src="room1.jpg" >
<div class="room1desc"><a class="economy"><b><u>ECONOMY SUITE</u></b></a>
<br>
All prices are nett and inclusive of 6% GST. Room Features
<br>
<br>
Air Conditioned
<br>
Writing Desk & Chair
<br>
Living Room Equipped with Furniture
Coffee & Tea
<br>
Complimentary Bottled Water
Hairdryer
<br>
Rain Shower
<br>
In-room Safe
<br>
TV
<br>
Mini Fridge
<br>
WiFi 
<br>
<br>
<a class="price1"><b>RM130.00/night</b></a>                                  
</div>


<img class="room2" src="room2.jpg" >
<div class="room2desc"><a class="business"><b><u>BUSINESS SUITE</u></b></a>
<br>
Inclusive of breakfast for 2 persons All prices are nett and inclusive of 6% GST. Room Features
<br>
<br>
Air Conditioned
<br>
Executive Writing Desk & Chair
<br>
Living Room Equipped with Furniture
<br>
Coffee & Tea
<br>
Complimentary Bottled Water
<br>
Hairdryer
<br>
Rain Shower
<br>
In-room Safe
<br>
TV
<br>
Mini Fridge
<br>
WiFi
<br>
<br>
<a class="price1"><b>RM250.00/night</b></a>  
</div>

<img class="room3" src="room3.jpg" >
<div class="room3desc"><a class="executive"><b>EXECUTIVE SUITE</b></a>
<br>
Inclusive of breakfast for 2 persons All prices are nett and inclusive of 6% GST. Room Features
<br>
<br>
Air Conditioned
<br>
Executive Writing Desk & Chair
<br>
Living Room Equipped with Furniture
<br>
Coffee & Tea
<br>
Complimentary Bottled Water
<br>
Hairdryer
<br>
Rain Shower
<br>
In-room Safe
<br>
TV
<br>
Mini Fridge
<br>
WiFi
<br>
<br>
<a class="price1"><b>RM350.00/night</b></a>  
</div>
</div>

<form action='userbook.php' method='POST'>
<div class="container1">
      <p class="RESERVATION"><b>RESERVATION</b></p>
      <label><b>Username</b></label>
      <br>
      <br><u>
      <?php echo $_SESSION['username']; ?>
      </u>
      <br>
      <br>
      <label><b>Date IN</b></label>
      <input  class= "date_in" type="date" placeholder="Enter Date IN" name="datein" required>
      <br>
      <br>
      <label><b>Date OUT</b></label>
      <input class="date_out" type="date" placeholder="Enter Date OUT" name="dateout" required>
      <br>
      <br>
      <label><b>Package</b></label>
      <select class="package1" name="package">
         <option value="Economy">ECONOMY SUITE</option>
         <option value="Business">BUSINESS SUITE</option>
         <option value="Executive">EXECUTIVE SUITE</option>
       </select>
      <br>
      <br>
      <label><b>Payment</b></label>
       <select class="payment1" name="payment">
         <option value="Visa"> VISA</option>
         <option value="Master Card"> MASTER CARD</option>
         <option value="Bitcoin"> BITCOIN</option>
         <option value="Cash"> CASH</option>
       </select>  
      <button type="submit">RESERVE NOW !</button>
      
    </div>

<footer>
	Created by <a class="link" href="https://www.facebook.com/syafiqpfs"> TourisMY.Shd.Bhd </a>

</footer>
</body>

</html>
