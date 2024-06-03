
<?php 
include 'app/connect.php';
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:Alogin.php");

}
?>



<!DOCTYPE html>
<html>
<head>
<title>CIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/login.css">

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
  margin-top: 30%;
  
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
     background-color: grey;   
}
table:hover{
  color: white;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
background-color: white;

}

h3{
  color: white;
  text-align: center;
  font-size: 25px;
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
    	<ul>  <li id="n1"><b>Admin:<?php  echo $_SESSION['Name'];  ?></b></li>
            <li><a href="Alogin after.php">Dashboard</a></li>
            <li><a href="logout.php">logout</a></li>
            
        </ul>
    </nav>
</div>
<hr>




<body>
 <fieldset>
    <form method="post" action="studentdetails.php">
     <h3>Student details</h3>        



<table class="center">
    <tr>
      <th>USN</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>DEPARTMENT</th>
      <th>PHONE</th>
      <th>GRADUATION YEAR</th>
      
      
    
    </tr>
    <?php
      $sql = "SELECT S.USN,S.NAME,S.EMAIL,S.DEPARTMENT,S.GRAD,S.PHONE FROM student S";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      while($row = $result->fetch_assoc()){
    ?>
    <tr>
       <td> <?php echo $row['USN']; ?> </td>
      <td> <?php echo $row['NAME']; ?> </td>
      <td> <?php echo $row['EMAIL']; ?> </td>
      <td> <?php echo $row['DEPARTMENT']; ?> </td>
      <td><?php echo $row['PHONE']; ?></td>
      <td> <?php echo $row['GRAD']; ?> </td>
      
        
    </tr>
    <?php
      }
    ?>
  </table>
</form>
<footer>
  <p>CopyRight@2023 InternshipSurveySystem.in</p>
 </footer>

</body>
</html>