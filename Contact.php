<?php 
$severname="localhost";
$username= "root";
$password="";
$database="Contact";

$conn=mysqli_connect($severname, $username, $password, $database);
$sql = "SELECT id, Name, Email, Phone, Message FROM Contact";
$result= $conn query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Contact Details</title>
	<link rel="stylesheet" type="text/css" href="Contact.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<na>
	<section>
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="About.html" target="#">About</a></li>
			<li><a href="Contact.html" target="#">Contact</a></li>
			<li><a href="skills.html" target="#">Skills</a></li>
			<li><a href="imageslide.html" target="#">Project</a></li>
		
		</ul>
		</section>
	</nav><br>
<div>
	<a href="Contact form.html" target="_blank">Contact Form</a>
</div>
	<h1> CONTACT</h1><br>
	<h2> C/o Mr. W. M. Kaula,</h2>
	<h2>P. O. Box 1235,</h2>
	<h2>Blantyre. </h2><br>
	<h2>Phone: +265881294545</h2><br>
	<h2></a>Whatsapp: +265998332680</h2><br>
	<h2>Email: mifesmith@gmail.com</h2><br>
	<h2>Facebook: @SmithMifesichaliKaula</h2>
	<br><br><br>

<footer>
  <footer>
    <div class="contact">
      <div class="phone-area">
      	<img src="15.PNG" class="icon" alt="icon">
        <span>Phone</span>
        <a href="#">0998332680</a>
      </div>
      <div class="email-area">
      	<img src="GMAIL.PNG" class="icons" alt="icon">
        <span>Email</span>
        <a href="#">mifesmith@gmail.com</a>
      </div>
      <div class="sm-area">
      	<img src="FB.PNG" class="icons" alt="icon">
        <span>Social</span>
        <a href="#">@smithmifesichalikaula</a>
      </div>
    </div>
  </footer>

</body>
</html>
