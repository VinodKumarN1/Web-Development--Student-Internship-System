<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">    
<title>Gallery</title>
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


.container
{
     width:1280px;
     margin:90px,auto 0;
     display: flex;
     flex-direction: row;
     flex-wrap: wrap;
 }
.container .box
{
     position:relative;
     width:300px;
     height:197px;
 
     margin:10px;
     box-sizing: border-box;
     display:inline-block;
 }       

.container .box .imgBox
{
     position:relative;
     overflow:hidden;
     
 }   
 .container .box .imgBox img 
 {
    max-width: 100%;
    transition:transform 2s;
     
 }   
 .container .box:hover .imgBox img
 {
    transform:scale(1.2);
     
 }   
 .container .box .details
 {
     position:absolute;
     top:10px;
     left:40px;
     bottom:10px;
     right:10px;
     background: rgba(0,0,0,.8 );
     transform: scaleY(0);
     transition: transform .5s;
 }  
 .container .box:hover .details
 {

    transform: scaleY(1);
    
 }   
 .container .box .details .contents
 {
     position:absolute;
     top:10%;
     left:50%;
     transform:translate(-50%);
     text-align:center;
     padding:15px;
     color:#fff;
 }   
 .container .box .details .contents h1
 {
    margin:0;
    padding: 0;
    font-size:20px;
    color:#ff0;
 }   
 .container .box .details .contents p
 {
    margin:10px 0 0;
    padding: 0;
    
 }   
</style>
</head>
    <body>
        <div id="main">
    <nav>  
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Alogin.php">Admin </a></li>
            <li><a href="Studentlogin.php">User</a></li>
        </ul>
    </nav>
</div>
<hr>
<h1 align=center>Gallery</h1>

        <div class="container">
            <div class="box">
                <div class="imgBox">
                  <a href="https://www.amazon.in/Sparx-Mens-N-Blue-Loafers-9-SD0402G_NBNB0009/dp/B07H2Y54MF/ref=cs_sr_dp_2?adgrpid=1317216523470404&hvadid=82326291888808&hvbmt=be&hvdev=c&hvlocphy=156938&hvnetw=o&hvqmt=e&hvtargid=kwd-82326918225385%3Aloc-
                  90&hydadcr=15722_2178316&keywords=casual+slip-on+for+men&qid
                  =1691903591&refinements=p_36%3A4516638031&rnid=4516629031&sr=8-2" ><img src="img/amaz.jpg" ></a>
                </div>
                <div class="details">
                    <div class="contents">
                    <h1>AMAZON</h1>
                </div>
            </div>
        </div>
            <div class="box">
                <div class="imgBox">
                    <img src="img/dell.jpg">
                </div>
                <div class="details">
                    <div class="contents">
                    <h1>DELL</h1>
                </div>
                </div>
              </div>
            <div class="box">
                <div class="imgBox">
                    <img src="img/m.jpg">
                </div>
                <div class="details">
                    <div class="contents">
                    <h1>MICROSOFT</h1>
                </div>
                </div>
            </div>
            <div class="box">
                <div class="imgBox">
                    <img src="img/google.png">
                </div>
                <div class="details">
                    <div class="contents">
                    <h1>GOOGLE</h1>
                </div>
            </div>
        </div>
            <div class="box">
                <div class="imgBox">
                    <img src="img/hp.png">
                </div>
                <div class="details">
                    <div class="contents">
                    <h1>HPE</h1>
                </div>
            </div>
        </div>
            <div class="box">
                <div class="imgBox">
                    <img src="img/intel.jpg">
                </div>
                <div class="details">
                    <div class="contents">
                    <h1>INTEL</h1>
               </div>
            </div>
        </div>
            <div class="box">
                <div class="imgBox">
                    <img src="img/LT.jpg">
                </div>
                <div class="details">
                    <div class="contents">
                    <h1>L AND T</h1>
                </div>
            </div>
        </div>
    <div class="box">
                <div class="imgBox">
                    <img src="img/r.jpg">
                </div>
                <div class="details">
                    <div class="contents">
                    <h1>OFF COMPUS</h1>
                </div>
            </div>
        </div>
            <div class="box">
                <div class="imgBox">
                    <img src="img/w.png">
                </div>
                <div class="details">
                    <div class="contents">
                    <h1>WIPRO</h1>
                </div>
            </div>
        </div>
        <div class="box">
                <div class="imgBox">
                    <img src="img/lor.jpg">
                </div>
                <div class="details">
                    <div class="contents">
                    <h1>LOREAL</h1>
                </div>
            </div>
        </div>
        <div class="box">
                <div class="imgBox">
                    <img src="img/i.jpg">
                </div>
                <div class="details">
                    <div class="contents">
                    <h1>INFOYES</h1>
                </div>
            </div>
        </div>
        <div class="box">
                <div class="imgBox">
                    <img src="img/b.jpg">
                </div>
                <div class="details">
                    <div class="contents">
                    <h1>IBM</h1>
                </div>
            </div>
        </div>
</div>
<footer>
  <p>CopyRight@2023 InternshipSurveySystem.in</p>
 </footer>
</body>
</html>
