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
<h3 id="cl1">About</h3>
<p id="cl1">
  Welcome to the Internship Survey System (ISS), a dedicated platform designed to facilitate collaboration between students and industries 
  by gathering and managing feedback on internship experiences. The system allows for a structured, data-driven approach to improving the internship process for both students and companies.
<br><br>

Our Vision
<br>
Our system aims to enhance the quality of internships by providing a platform where students and industries can share their feedback. By collecting valuable insights from both sides, ISS helps identify strengths, areas of improvement, and potential opportunities for enhancing internship programs.
<br><br>
For Students<br>
The Internship Survey System enables students to provide feedback on their internship experiences in a structured format. They can assess different aspects such as learning outcomes, work environment, mentorship, and overall satisfaction. This feedback is essential for companies to refine their internship programs and ensure they offer valuable learning experiences.
<br><br>
For Industries<br>
Industries can use ISS to create and distribute surveys to their interns, gather responses, and analyze the feedback to improve future internships. This system helps companies understand the intern's perspective, ensuring that their programs remain competitive, educational, and aligned with industry standards.
<br><br>
Key Features:<br><br>
1)User-Friendly Interface: Simple and intuitive dashboards for both students and industries.<br>
2)Survey Creation: Industries can design custom surveys to focus on specific aspects of the internship experience.<br>
3)Feedback Management: Students can easily submit their feedback, and industries can analyze responses in real-time.<br>
4)Data-Driven Insights: Aggregated survey results provide companies with actionable insights to improve internship programs.<br>
5)Confidential & Secure: Feedback provided by students remains confidential, ensuring honest and constructive input.<br><br>
Why Choose ISS?<br><br>
The Internship Survey System is the perfect tool for continuously improving the internship experience. By creating a structured feedback loop, ISS helps students voice their opinions and assists industries in delivering top-notch programs that nurture future professionals.
<br>
Join us today to help shape a better, more effective internship ecosystem!<p> 
</div>
<footer>
  <p>CopyRight@2023 InternshipSurveySystemystem.in</p>
 </footer>

</body>
</html>
