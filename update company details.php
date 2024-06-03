<?php 
include 'app/connect.php';
session_start();
if(!isset($_SESSION['Name']))
{
  header("location:Alogin.php");

}

if(isset($_POST['submit'])){

    $CID = $_POST['CID'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
       
    $cid_check = "SELECT * FROM company WHERE COMPANYID = ?";
    $cid_stmt = $conn->prepare($cid_check);
    $cid_stmt->bind_param("i",$CID);
    $cid_stmt->execute();

    $cid_stmt->store_result();
    if($cid_stmt->num_rows()>0){
        ?> 
        <script> alert(" Company Already Registered!"); </script>
        <?php
    }
    else{


    //template for the sql query
    $sql = "INSERT INTO company(COMPANYID,CNAME,EMAIL,PHONE) VALUES(?,?,?,?)";

    //preparing the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("issi",$CID,$Name,$Email,$Phone);
    $result = $stmt->execute();

    if($result)
    {
      ?>
       <script> alert("Company Registeration Successfull");</script>
    <?php
       //header("location:Alogin after.php");
    }
  }
}
/*
    $expectedData = 1;
    $spoiledData = "1; DROP TABLE student";
    $query = "select * from student where USN = $spoiledData";
    select * from student where USN=1; 
    Drop table student;
*/

?>
<style>
  #n1{
       color: white;
       font-family: verdana;
       font-size: 20px;
    }
</style>


<!DOCTYPE html>
<html>
<head>
<title>CIS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="assests/registration.css">
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
input[type="password"], input[type="text"], input[type="email"], input[type="tel"]
,input[type="number"]{
  color: white;
  display: block;
  padding:5px;
  margin:10px;
  border:none;
  border-bottom:1px black;
  outline: none;
  width:85%;
  background-color: transparent;
  cursor: text;
}

  h3
  {
    color: #F0F3F4;
    text-align: center;
    font-family: verdana;
    font-size: 25px;
  }
</style>
</head>
<body>
<div id="main">
    <nav>  
    	<ul>
            <li id="n1"><b>Admin:<?php  echo $_SESSION['Name'];  ?></b></li>
            <li><a href="Alogin after.php">Dashboard</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    </nav>
</div>
<hr>
<h3>Company details</h3>


<form action="update company details.php" method="post">
<fieldset>
            
            <label  id="a" for="CID">Company ID</label><br>
            <input type="number" name="CID" maxlength="10"  placeholder="Enter  Company id" required autocomplete="off">
            <br> 
             <label id="c" for="Name">Name</label><br>
            <input type="text" name="Name" placeholder="Enter Name" required autocomplete="off" >
            <br> 
            <label id="c" for="Email">Email</label><br>
            <input type="email" name="Email" placeholder="Enter Email" required autocomplete="off" >
            <br> 
            <label id="c" for="Phone">Phone</label><br>
            <input type="tel" name="Phone" placeholder="Enter Phone" required autocomplete="off" >
            <br> 


            <button type="submit" name="submit"><b>Submit</b></button>
            
             <br>
           </fieldset>
         </form>


<footer>
  <p>CopyRight@2023 InternshipSurveySystem.in</p>
 </footer>

</body>
</html>