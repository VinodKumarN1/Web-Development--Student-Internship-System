<?php
include 'app/connect.php';
?>
<html>
<head>
<title>ISS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body
{
     background-image:url("img/honeycomb.jpg");
    background-repeat: no-repeat;
    background-size: 80%; 
    background-size: cover;
}

h1
{
   color: whitesmoke;
   font-size: 35px;
   margin-top: 2%;

  
} 


nav 
{ 
	width:100%;
    height:80px;
    background-color: black;
    line-height: 50px;
   
}
nav ul
{
    float: right;
    margin-right:20px
}
nav ul li
{
    list-style-type: none;
    display:inline-block;
    transition: 0.8s all;
                
}
nav ul li a
{
    text-decoration: none;
    color: white;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 30px;
    padding: 40px;
}
nav ul li:hover
{
    background-color: coral;
}

footer 
{
  text-align: center;
  padding: 3px;
  background-color: transparent;
  color: white;
  margin-top: 10%;
  
}
p{
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
color: white;
font-size: 20px;
}



* {box-sizing: border-box;}
body {font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width: 80%;
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
  background-color: black;
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
</head>
<body>
<div id="main">
    <nav>  
    	<ul>
            <li><a href="#">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Alogin.php">Admin </a></li>
            <li><a href="Studentlogin.php">User</a></li>
        </ul>
    </nav>
</div>
<hr>



<div class="slideshow-container" align= center >

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/1.jpg" style="width:70%" align=center>
  <h1 align=center>Internship Survey System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/w.png" style="width:70%" align=center>
  <h1 align=center>Internship Survey System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/g1.jpg" style="width:70%" align=center>
  <h1 align=center>Internship Survey System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/i.jpg" style="width:70%" align=center>
  <h1 align=center>Internship Survey System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/m.jpg" style="width:70%" align=center>
  <h1 align=center>Internship Survey System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/c1.jpg" style="width:70%" align=center>
  <h1 align=center>Internship Survey System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/2.jpg" style="width:70%" align=center>
  <h1 align=center>Internship Survey System</h1>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/10.jpg" style="width:70%" align=center>
  <h1 align=center>Internship Survey System</h1>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<footer>
  <p> CopyRight@2023 InternshipSurveySystem.in</p>
 </footer>

</body>
</html>