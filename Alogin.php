<?php
include 'app/connect.php';
session_start();

if(isset($_POST['submit'])){
  $ADMINID = $_POST['AdminID'];
  $Name = $_POST['Name'];
  $Password = $_POST['Password'];

  $sql = "SELECT PERSONID,NAME,PASSWORD FROM admin WHERE PERSONID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s",$ADMINID);
  $stmt->execute();

  $stmt->bind_result($db_aid,$db_name,$db_pass);
  if($stmt->fetch()){
       

        $_SESSION['Name'] = $db_name;//assicative array
        //echo $_SESSION['Name'];
        $pass_decode = password_verify($Password, $db_pass);

    if($pass_decode){
     echo "Login successful";
      header("location:Alogin after.php");
  }else{
   ?>
     <script> alert("Incorrect Password"); </script>
   <?php } } else {
    ?>
    <script> alert("Incorrect AdminID"); </script>
    <?php
   }
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


fieldset{
  width:20%;
  margin:40px auto;
  padding: 10px;
  background:rgba(0,0,0,0.3);
  border-radius: 15px;
}
legend{
  border:1.5px solid white;
  border-radius: 13px;
  padding:5px;
  text-align: center;
  background: rgba(0,0,0,0.6);
  width:35%;
  margin:0px auto;
  display: inline;

}

label{
  padding:5px;
  margin:10px;
  display: block;

}
 input[type="password"], input[type="text"]{
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
::-webkit-input-placeholder{
    text-transform: uppercase;
    color:black;
}
button{
  border:1px solid white;
  border-radius:15px;
  display: block;
  width:35%;
  margin:40px auto;
  padding: 5px;
  outline: none;
  background: grey;
  cursor:pointer;
  
}
button:hover{
  background-color: white;
  color: black;
}
a{
  text-decoration: none;
  color:white;
}
#reg{
  color: white;
}

#a,#b,#c
{
  color: white;
}




</style>
<form method="post" action="Alogin.php" >
</head>
<body>
<div id="main">
    <nav>  
      <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Studentlogin.php">User</a></li>
        </ul>
    </nav>
</div>
<hr>
<fieldset>
            <legend id="reg" >Admin</legend>
            <label  id="a" for="AdminID">ADMIN ID</label><br>
            <input type="text" name="AdminID" maxlength="10"  placeholder="Enter your ID" required autocomplete="off">
            <br> 

            <label  id="b" for="Name">NAME</label><br>
            <input type="text" name="Name" maxlength="10" placeholder="Enter your Name" required autocomplete="off">
            <br> 
             <label id="c" for="Password">PASSWORD</label><br>
            <input type="password" name="Password" maxlength="10" placeholder="Enter your Password" required autocomplete="off" >
            <br> 
            <button type="submit" name="submit"><b>Submit</b></button>
           </fieldset>
         </form>
<footer>
  <p>CopyRight@2023 InternshipSurveySystemystem.in</p>
 </footer>
</body>
</html>