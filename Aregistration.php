<?php 
include'app/connect.php';

if(isset($_POST['submit'])){

    $AID = $_POST['AdminID'];
    $Name = $_POST['Name'];
    $Password = $_POST['Password'];
    $Confirm = $_POST['ConfirmPassword'];
    $pass = password_hash($Password, PASSWORD_DEFAULT);
    $aid_check = "SELECT * FROM admin WHERE PERSONID = ?";
    $stmt = $conn->prepare($aid_check);
    $stmt->bind_param("s",$USN);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows()>0){
        ?> 
        <script type="text/javascript"> alert(" User ALready Registered!");</script>
        <?php
    }
    else{
    //template for the sql query
    $sql = "INSERT INTO admin(PERSONID,NAME,PASSWORD) VALUES(?,?,?)";

    //preparing the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss",$AID,$Name,$pass);
    $result = $stmt->execute();
    if($result){
       header("location:Alogin.php");
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="assests/registration.css">
   <style> a{
	text-decoration: none;
	color:white;
}
fieldset{
	width:30%;
	margin:20px auto;
	padding: 10px;
	background:rgba(0,0,0,0.3);
	margin-top: 5%;
	border-radius: 20px;
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
    color: white;
}
label{
	padding:5px;
	margin:10px;
	display: block;
	color: white;
}
 input[type="email"],input[type="password"], input[type="text"], 
 input[type="number"],input[type="tel"]{
 	display: block;
 	padding:5px;
 	margin:5px;
	border:none;
	border-bottom:1px solid black;
	outline: none;
	width:95%;
	background-color: transparent;
	cursor: text;
}
::-webkit-input-placeholder{
 		text-transform: uppercase;
 		color:black;
}
select{
	display: block;
 	padding:5px;
	border:none;
	border-bottom:1px solid black;
	outline: none;
	background-color: transparent;
 }
button{
	border:1px solid white;
	border-radius:15px;
	display: block;
	width:35%;
	margin:5px auto;
	padding: 5px;
	background:#e5dee5;
	cursor:pointer;
}
</style>
    <script type="text/javascript">
        function validate(){
            var pwd1 = document.getElementById("password");
            var pwd2 = document.getElementById("confirmPassword");

            if(pwd1.value.length < 6){
                alert("Password must have more than Six characters.");
                return false;
            }
            else{
                if(pwd1.value != pwd2.value){
                    alert("Passwords do not match. Re-Enter it.");
                    return false;
                }
                else{
                    return true;
                }
            }
        }

    </script>
</head>
<body>
    <form onsubmit="return validate()" method="post" action="Aregistration.php">
        <fieldset>
            <legend id="reg">REGISTER</legend>
            <br>

            <label for="AdminID"> AdminId </label>
                <input type="text" name="AdminID" placeholder="Enter UserID" required >

            <label for="Name"> NAME </label>            
                <input type="text" name="Name" placeholder="Enter Name" required >
            
            <label for="Password"> PASSWORD </label>    
            <input type="password" name="Password" id="password" placeholder="Enter Password" >
            
            <label for="Password"> CONFIRM PASSWORD </label> 
            <input type="password" name="ConfirmPassword" id="confirmPassword" placeholder="Re-Enter Password" >

            
            <button type="submit" name="submit"><b> SUBMIT </b> </button>
            <br>
            <a href="Alogin.php" style="text-decoration: none; color:white"> Already Have an Account? </a>
            <br>
            </fieldset>
    </form>
</body>
</html>