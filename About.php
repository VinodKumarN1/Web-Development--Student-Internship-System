<?php
include 'app/connect.php';

?>


<!DOCTYPE html>
<html>
<head>
<title>CIS</title>
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
  margin-top: 15%;
  
}


.ad {
  border: 1px solid black;
  background-color: black;
  padding-top: 40px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 50px;
}

h3{
  color: white;
  font-size: 35px;

}
#cl1{
  padding-bottom: 20px;
  font-size: 20px;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
color: white;

}
p{
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
color: white;
font-size: 20px;
}

</style>
</head>
<body>
<div id="main">
    <nav>  
    	<ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Alogin.php">Admin </a></li>
            <li><a href="Studentlogin.php">User</a></li>
        </ul>
    </nav>
</div>
<hr>
<h1 align=center>Internship Survey System</h1>
<br>
<div class="ad">
<h3>About</h3>
<p id="cl1"><p> A railway reservation system is software that handles various aspects 
  of railway operations, including distribution, pricing,
   scheduling, and ticketing</p>
      <p>Key features include:</p>
<ul>Ticket Availability: Users can check seat availability for specific trains and classes.</ul>
<ul>Booking Process: Passengers can book tickets online or offline, paying through various modes.</ul>
<ul>Cancellation and Refunds: The system manages ticket cancellations and refunds.</ul>
<ul>PNR Generation: Each booked ticket receives a unique PNR number.</ul>
</div>
<footer>
  <p>CopyRight@2024 RailwayManagementSystem.in</p>
 </footer>

</body>
</html>