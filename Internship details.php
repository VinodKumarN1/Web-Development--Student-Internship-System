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
<title>CIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  #n1{
     color: white;
     font-family: verdana;
     font-size: 20px;
    }
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
 width: 90%;
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
    color: black;
    text-align: center;
    font-family: verdana;
    font-size: 30px;
    color: white;
  }
</style>
</head>
<body>
<div id="main">
    <nav>  
      <ul>
            <li id="n1"><b>User:<?php  echo $_SESSION['Name'];  ?></b></li>
            <li><a href="Student afterlogin.php">Dashboard</a></li>
            <li><a href="logout1.php">logout</a></li>
        </ul>
    </nav>
</div>
<hr>
<h3>Internships details</h3>

<hr>

<table class="center">
    <tr>
      <th>INTERNSHIP ID</th>
      <th>COMPANY NAME</th>
      <th>DESCRIPTION</th>
      <th>LOCATION</th>
      <th>START_DATE</th>
      <th>END_DATE</th>
      <th>SKILLS</th>
    
    </tr>
    <?php
      $sql = "SELECT I.INTERNSHIP_ID,I.DESCRIPTION,I.LOCATION,I.START_DATE,I.END_DATE,I.SKILLS,C.CNAME FROM internship I, company C WHERE I.COMPANYID=C.COMPANYID";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      while($row = $result->fetch_assoc()){
    ?>
    <tr>
       <td> <?php echo $row['INTERNSHIP_ID']; ?> </td>
      <td> <?php echo $row['CNAME']; ?> </td>
      <td> <?php echo $row['DESCRIPTION']; ?> </td>
      <td> <?php echo $row['LOCATION']; ?> </td>
      <td> <?php echo $row['START_DATE']; ?> </td>
       <td> <?php echo $row['END_DATE']; ?> </td>
        <td> <?php echo $row['SKILLS']; ?> </td>
    </tr>
    <?php
      }
    ?>
  </table>
  <footer>
  <p>CopyRight@2023 InternshipSurveySystemystem.in</p>
 </footer>
</body>
</html>