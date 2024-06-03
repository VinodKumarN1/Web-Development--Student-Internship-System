<?php
include 'app/connect.php';
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:Studentlogin.php");

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assests/login.css">
    
</head>
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
  margin-top: 35%;
  
}
p{
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
color: white;
font-size: 20px;
}


table {
 border-collapse: collapse;
 width: 50%;
  border-radius: 10px;
}

td{
  padding: 8px;
  text-align: left;
  color: black;

}

 th {
  padding:8px;
  text-align: left;
  background-color: black;
  color: white;
}


tr:hover 
{
     background-color:white;
     
}

table.center {
  margin-left: auto; 
  margin-right: auto;
background-color:#FFFACD;

}

h3
{
  text-align: center;
  color: white;
  font-family: verdana;
  font-size: 20px;: 
  }
  #n1{
     color: white;
     font-family: verdana;
     font-size: 20px;
    }

  </style>

<body>


  <div id="main">
    <nav>  
      <ul>
             <li id="n1"><b>User:<?php  echo $_SESSION['Name'];  ?></b></li>
            <li><a href="Student afterlogin.php">Dashboard</a></li>
            <li><a href=logout1.php>Logout</a></li>
            </ul>
    </nav>
</div>
<hr>
<h3>Company Details</h3>
<hr>
   <table class="center">
   	<tr>
      <th>COMPANY ID</th>
   		<th>NAME</th>
   		<th>EMAIL</th>
   		<th>PHONE</th>
   		
   	</tr>
   	<?php 
      $sql = "SELECT * FROM company";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) {
        ?> 
        <tr>
        	<td> <?php echo $row['COMPANYID']; ?> </td>
        	<td> <?php echo $row['CNAME']; ?> </td>
        	<td> <?php echo $row['EMAIL']; ?> </td>
        	<td> <?php echo $row['PHONE']; ?> </td>
        	
        </tr>  
        <?php     	
            }
     	?>  	
   </table>   

<footer>
  <p>CopyRight@2023 InternshipSurveySystem.in</p>
 </footer>

</body>
</html>