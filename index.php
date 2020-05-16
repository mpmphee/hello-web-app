<?php
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
    $login_message="Wrong Credentials !";
	  $color="red";
}
else{
    $login_message="Enter your Credentials to Login!";
	  $color="black";
}
?>
<!DOCTYPE html>
<html >
    <head>
    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>


        <meta charset="UTF-8">
          <script src="source/js/loginValidate.js"></script>
          <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
        <title>Molalatau CJSS Management System</title>
    </head>
    <body>


    <!-- wraper div -->
        
    <div style="width: 100%; float: center;background-color: grey;height: 700px;border-radius: 20px 20px 20px 20px;">

    <div style="width: 100%; float: left;background-color: yellow;height: 70px;border-radius: 20px 20px 0px 0px;">

    <center>
    <div style="width: 93%; float: left;background-color: green;height: 70px; border-radius: 20px 0px 0px 0px;">
    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>MOLALATAU CJSS MANAGEMENT SYSTEM</b></h1>
    </div>
    </center>
    <div style="width: 7%; float: right;background-color: white;height: 70px; border-radius: 20px 20px 20px 20px;">
    <img src="source/logo.jpg" height="100%" width="100%" alt="photo" style="border-radius: 0px 20px 0px 0px;"/>
    </div>
    
    </div>

    <hr>

    <!-- content content-->
    <center>
      <div style="width: 100%;background-color: white;height: 700px;border-radius: 20px 20px 20px 20px;">

        
        <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img_nature_wide.jpg"alt="photo" style="height:450px; width:100%;border-radius: 20px 20px 20px 20px;float: center;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img_snow_wide.jpg" alt="photo" style="height:450px; width:100%;border-radius: 20px 20px 20px 20px;float: center;">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img_mountains_wide.jpg" alt="photo" style="height:450px; width:100%;border-radius: 20px 20px 20px 20px;float: center;">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 8000); // Change image every 2 seconds
}
</script>
        <div style="width: 100%; float: center;background-color: grey;height: 176px;border-radius: 20px 20px 20px 20px;">
            <?php echo "<font size='4' color='$color'>$login_message</font>";?>
            <form  action="service/check.access.php" onsubmit="return loginValidate();" method="post"><br/>
           <table style="margin-top: 0px">
             
           <tr><td width="100">IDENTITY</td>
              <td width="110">
			    <label>
                <input type="text" id="myid" name="myid"  autofocus="" autocomplete="off"  />
                </label>
			  </td>
             </tr>

            <tr><td width="100">PASSWORD</td>
              <td width="110">
			    <label>
                <input type="password" id="mypassword" name="mypassword"  autocomplete="off"  />
                </label>
			  </td>
			  		 
            </tr>
             &nbsp;&nbsp;&nbsp;&nbsp;
        <tr>
            <td></td>
            <td width="110"><input type="submit" value="Login" /></td> 
             <td width=""><input type="reset" id="clear" value="Clear" /></td>
                  
        </tr>
    </table>
   </form>
    <br>

    </div>
      </div>
    </center>

    <div>
    </body>
</html>
