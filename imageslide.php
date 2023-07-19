<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <link rel="stylesheet" href="slider.css">
    
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

    <!--image slider start-->
    <div Class="Slider">
    <div class="slides">

     <!--radio buttons start-->   

        <input type="radio" name="radio-btn" id="radio0">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

     <!--radio buttons ends-->
     <!--image slide start-->   
<div class="slides first">
    <img src="image slider/img 0.jpg" alt="">
</div>

<div class="slides first">
    <img src="image slider/img 1.jpg" alt="">
</div>
<div class="slides first">
    <img src="image slider/img 2.jpg" alt="">
</div>
<div class="slides first">
    <img src="image slider/img 3.jpg" alt="">
</div>
<div class="slides first">
    <img src="image slider/img 4.jpg" alt="">
</div>
<!--image slide end-->
<!--automatic navigation start-->
<div class="navigation-auto">
    <div class="auto-btn0"></div>
    <div class="auto-btn1"></div>
    <div class="auto-btn2"></div>
    <div class="auto-btn3"></div>
    <div class="auto-btn4"></div>
</div>
<!--automatic navigation ends-->
<!--manual navigation start-->
<div class="navigation-manual">
    <label for="radio0" class="manual-btn"></label>
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
    <!--manual navigation ends-->
</div>
<div><h2> Visit the project</h2>
	<p>The project that i have done so far are designing a website for Mzuni welcoming the student at the ICT DEPT. and Creating Registration form </p><br>
	<p><a href="form registration.html" target="blank">View Registration Form</a></p>
		<p><a href="MZUNI HTML.html" target="blank"> View Mzuni welcome Page</a></p><br></div>

      
    <!--image slider end--> 
    <script type="text/javascript">
        var couner = 1;
        setInterval(function(){document.getElementById('radio' + counter).checked= true;
    counter++;
    if(counter > 4){
        counter=1 }
      }, 5000);
    </script>
    </div>
</body>
</html>
