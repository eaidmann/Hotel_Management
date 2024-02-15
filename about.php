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



<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign in</button>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action='login.php' method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button name= 'login' type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<div class="topnav">  
    <a class="active" href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="room.php">Room</a>
    <a href="contact.php">Contact</a>
    <a class="register" href="register.php">Register</a>
    <a class="staff" href="stafflogin.html">STAFF ONLY</a>



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
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<footer>
	Created by <a class="link" href="https://www.facebook.com/syafiqpfs"> TourisMY.Shd.Bhd </a>

</footer>
</body>

</html>
