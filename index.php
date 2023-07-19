<?php 
$severname="localhost";
$username= "root";
$password="";
$database="Contact";

$conn=mysqli_connect($severname, $username, $password, $database);
//$sql = "SELECT id, Name, Email, Phone, Message FROM Contact2";
//$result= $conn query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SMITH KAULA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Smith Kaula</h1>
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
	<img src="images/smith.jpg" alt="" width="400" height="400">
	<div>
		<h3>About Me</h3>
		<p>Mr Smith Kaula is a Lilongwe based man and IT Technician who did major in computer Networking, WEB Design, Graphical Desing, Hardware and Software Troubleshoot At University of Malawi the Polytechnic, Where i did get my Advanced Diploma and CCNA Certification.
		As of now i am in MZUNI persuing my Degree Program in ICT.
		</p>
	</div><br>
	<div>
		<h3>My Skills</h3>
	
<ul2 style="list-style-type:square">
	<li>HTML</li>
	<li>CSS</li>
	<li>Photoshop</li>
	<li>Networking</li>
</ul2>
	</div><br>
	<div>
		<h3> Recent Projects</h3>
		<p>The project that i have done so far are designing a website for Mzuni welcoming the student at the ICT DEPT. and Creating Registration form </p><br>

		<a href="viewproject.html" target="blank">View Project</a>
	</div><br>
	<div>
	   <h3>Tools</h3>
	 <ul2>
	 <li>HTML</li>
	 <li>CSS</li>
	 <li>Photoshop</li>
	 <li>Network</li>

	

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
        <a href="#">@smithmifesichalikaula/a>
      </div>
    </div>
  </footer>
</body>
</html>