<?php
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:Studentlogin.php");

}






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
p{
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
color: white;
font-size: 20px;
}

          #leftbox { 
                float:left;  
                background:lightgray; 
                width:20%; 
                height:100px; 
                font-size: 20px;
                font-family: verdana;
                padding: 20px;
                margin-left:5%; 
                margin-top: 15%;
                border-radius: 10px;
            } 
            #leftbox:hover{
              background-color: white;
              color: black;
            }
            #middlebox{ 
                float:left;  
                background:lightgray; 
                width:20%; 
                height:100px;
                font-family: verdana;
                font-size: 20px;
                padding: 20px;
                margin-left: 11%;
                margin-top: 15%;
                border-radius: 10px;

            }  #middlebox:hover{
              background-color: white;
              color: black;
            } 
            #rightbox{ 
                float:right; 
                background:lightgray; 
                width:20%; 
                height:100px;
                font-family: verdana;
                font-size: 20px;
                padding: 20px; 
                margin-right: 5%;
                margin-top: 14%;
                border-radius: 10px;
            } 
            #rightbox:hover{
              background-color: white;
              color: black;
            }


            #c1{ 
                float:left; 
                background:greenyellow; 
                width:20%; 
                height:100px;
                font-family: verdana;
                font-size: 20px;
                padding: 20px; 
                margin-right: 5%;
                margin-left: 39%;
                margin-top: 10%;
                border-radius: 10px;
            }

            #b1{
              padding-left: 20px;
              color: black;
              }
            #b2{
              padding-left: 48px;
              color:black;
              }
              #b3{
              padding-left: 48px;
              color: black;
              
              }
              #n1{
                color: white;
                font-family: verdana;
                font-size: 20px;
              }
</style>
</head>
<body>
<div id="main">
    <nav>  
    	<ul>
            <li id="n1"><b>User:<?php  echo $_SESSION['Name'];  ?></b></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="logout1.php">Logout</a></li>
            </ul>
    </nav>
</div>
<hr>

<div id = "boxes"> 
          
              <a href="Company details.php">
            <div id = "leftbox"> 
           <h3 id="b1">Company Details</h3>
            </div>  
              </a>

              <a href="Internship details.php">
            <div id = "middlebox"> 
               <h3 id="b2">Internships</h3> 
            </div> 
              </a>
           

             <br>
              <a href="Placements.php">
            <div id = "rightbox"> 
             <h3 id="b3">Placements</h3>
            </div> 
          </a>
      

        </div>





</body>
</html>