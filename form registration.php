<!DOCTYPE html>
<html>
<Title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
<style>
	input[type=text]{
		width: 30%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
        background-color: #f0f0f0;

	}
    label{
        padding: 12px 12px 0;
        display: inline-block;
    }
	input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
*{
	font-family:sans-serif;
    box-sizing: border-box;

}
div{
    text-align: left;
    font-family: sans-serif;
}
select{
    width: 30%;
    padding: 8px 18px;
    border-radius: 4px;
    background-color:#f0f0f0;
}

</style>
<body>
    <na>
    <section>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="About.html" target="#">About</a></li>
            <li><a href="Contact.html" target="#">Contact</a></li>
        </ul>
        </nav><br>

<h1> ICT Registration Form</h1><br>
<form>
<label>First Name</label><br>
<input type="text" name="firstname" autocomplete="off"placeholder="yourname">
<br>
<label>Last Name</label><br>
<input type="text" name="lastname"autocomplete="off"placeholder="surname"><br>
<label>Email</label><br>
 <input type="text" name="email" autocomplete="off"placeholder="email"><br><br>


<h2>Sex</h2>
<div>
    <form>
        <input type="radio" name="gender" value="male" checked> Male<br>
         <input type="radio" name="gender" value="female" > Female<br>
         <input type="radio" name="gender" value="other" > Other<br>
    </form>
</div><br><br>

<p2>The following are coursecode for ICT Program</p2><br>
<select name="coursecode">
<option value="COMM1101">COMM1101</option>
<option value="BICT2303">BICT2303</option>
<option value="BICT1102">BICT1102</option>
<option value="BICT2401">BICT2401</option>
<option value="PRECALCULUS">PRECALCULUS</option>
</select>
<br><br>
<input type="submit" value="submit"><br>
</form>
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
        <a href="#">facebook</a>
      </div>
    </div>
  </footer>

</body>
</html>