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
        
      <button name= "login" type="submit">Login</button>
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
    <a class="staff" href="hotman/stafflogin.html">STAFF ONLY</a>


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
If you are looking for the best room deal, all you need to do is book direct <a class="booking" href="room.php">here</a>. We guarantee that room rates on our website are the lowest rates publicly available on the Internet.  To read more on our Best Rate Guarantee policy, please <a class="policy"  href="https://www.facebook.com/syafiqpfs">click here</a>.
<br/>
<br/>
Let go of your daily stresses and feel revived when you hit up our sauna and Jacuzzi on your next stay with us. If you’re looking to keep your fitness goals in check even when on holidays, our well-equipped Equinox Fitness Centre will not disappoint.
	</p>


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
