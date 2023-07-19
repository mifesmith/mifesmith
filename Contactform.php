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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Form</title>
	<meta name="viewport" content="width=device-width, initial-scale-1.0">
	<link rel="stylesheet" href="contactform.css">
	
</head>
<body>

	<div id="overlay">
		<form name="myForm" action="/action_page.php"onsubmit="event.preventDefault();validateForm();">
			<h1>Contact Us</h1>

			<label for="name"> Name:</label>
			<input type="text" id="name" placeholder="your name" required>
			<small class="error"></small><br>


			<label for="name"> Email:</label>
			<input type="text" id="email" placeholder="your email"required >
			<small class="error"></small><br>

			<label for="name">Phone:</label>
			<input type="text" id="Phone" placeholder="your phone number"required >
			<small class="error"></small>



			<label for="message"> Message:</label>
			<textarea id="Massage" placeholder="your message" rows="4"required ></textarea>
			<small class="error"></small><br>


			<div class="center">
				<input type="submit" value="Send message">
				<p id="Submit"></p>
			</div>

		</form>
	</div>
	<script src="script.js"></script>
</body>
</html>