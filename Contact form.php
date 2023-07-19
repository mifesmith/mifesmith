<?php 
$severname="localhost";
$username= "root";
$password="";
$database="Contact";

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
			<input type="text" id="name" name="fname" placeholder="your name" required>
			<small class="error"></small><br>


			<label for="name"> Email:</label>
			<input type="text" id="email" name="mail" placeholder="your email"required >
			<small class="error"></small><br>

			<label for="name">Phone:</label>
			<input type="text" id="Phone" name="phone" placeholder="your phone number"required >
			<small class="error"></small>



			<label for="message"> Message:</label>
			<textarea id="Massage" name="message" placeholder="your message" rows="4"required ></textarea>
			<small class="error"></small><br>


			<div class="center">
				<input type="submit" name="submit" value="Send message">
				<p id="Submit"></p>
			</div>

		</form>
		<?php
		if(isset($_POST["submit"])){
			$name = $_POST['fname'];
			$mail = $_POST['mail'];
			$phone = $_POST['phone'];
			$message = $_POST['message'];
			
			//selecting a database
			$selectdb=mysqli_select_db($con,"testdb");
			$query = "INSERT INTO user(Name,Email,Phone,Message) values('$name','$mail','$phone','$message')";
			$result = mysqli_query($con,$query);
			//mysql_close($con);
			echo "data sent to the database";
		}else{
			echo "data not sent to the database";
		}





	?>
	</div>
	<script src="script.js"></script>
</body>
</html>