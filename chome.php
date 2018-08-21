<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
*{padding:0;margin:0px}
html
{
background-image:url(connect15.jpeg);
background-size:100%100%;
}
.connect1
{
width:100%;
height:100px;
background:#262626;
border-bottom:2px solid #02F5FC;
margin-left:0px;
box-shadow:0 15px 10px rgba(0,0,0,.6);
}
h1
{
padding:15px 0px 0px 70px;
font-style:times new roman;
color:#02F5FC;
font-style:bold;
font-size:50px;
}
.id{
	font-size:30px;
	color:#02F5FC;
}
 button[type="submit"]
{
outline:none;
border:none;
height:45px;
width:200px;
color:black;
border:2px solid #02F5FC;
border-radius:10px;
font-size:20px;
background:#02F5FC;
cursor:pointer;
font-weight:bold;
font-family:times new roman;
}
 button[type="submit"]:hover
{
background:#02F5FC;
opacity:0.5;
}
.code
{
padding:20px 0px 10px;
font-size:200%;
font-style:italic;
color:#02F5FC;
}
.box{
	width:55%;
	height:61%;
	margin-top:30px;
	overflow:hidden;
	border:2px solid #02F5FC;
	box-shadow:0 25px 0px rgba(0,0,0,.6);
	margin-left:580px;
	}
	.home{
		width:100%;
	}
	.align{
		width:100%;
		margin-left:50px;
	}
	#b{
position:relative;
height:380px;
width:320px;
float:left;
border:2px solid #02F5FC;
box-shadow:0 15px 10px rgba(0,0,0,.6);
margin-left:100px;
overflow:hidden;
background:white;
}
.c{
	width:100%;
	height:110px;
	margin-top:20px;
}
	
h2
{
text-align:center;
font-size:18px;
font-family:times new roman;
font-weight:bold;
padding:10px;
height:25px;
background:#02F5FC;
background-size:cover;
color:black;
}
.footer
{
	width:100%;
	height:40%:
	background:#262626;
	
}
</style>
</head>
<body>
<div class="connect1">
<h1>Connect<span class="id">.com</span>
<i class="fa fa-sign-in" aria-hidden="true" style="margin-left:480px;font-size:45px;"></i>
<button type="submit"><a href="login.php" target="_blank" style="text-decoration:none;color:black;">Login<a></button>
<i class="fa fa-user-plus" aria-hidden="true"style="font-size:40px;"></i>
<button type="submit"><a href="signup.php" target="_blank" style="text-decoration:none;color:black;">SignUp</a></button></h1>
</div>
<div class="code">
<marquee behavior="slide">
<center><b>Connect.com....connecting people over the world through skill</b></marquee></div>
<div class="home">
<div id="b"style="box-shadow:0 25px 0px rgba(0,0,0,.6);"><h2>DailyQuote</h2>
<div id="content" style="padding-top:0px;">
<img src="connect9.jpeg" width="100%" height="100%"></div>
</div>
<div class="box">
<img class="myslides" src="connect1.jpeg" width="100%" height="100%" style="opacity:0.8;">
<img class="myslides" src="connect2.jpeg" width="100%" height="100%" style="opacity:0.8;">
<img class="myslides" src="connect3.jpeg" width="100%" height="100%" style="opacity:0.8;">
<img class="myslides" src="connect4.jpeg" width="100%" height="100%" style="opacity:0.8;">
<img class="myslides" src="connect5.jpeg" width="100%" height="100%" style="opacity:0.8;">
</div>
</div><br/><br/><br/>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
       if (myIndex > x.length) {myIndex = 1} 
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000);
	}
</script>
<div class="align">
<div id="b"><h2>NOTIFICATIONS</h2></div>
<div id="b"style="margin-left:80px;"><h2>NEWS</h2></div>
<div id="b" style="margin-left:80px;"><h2>ABOUT</h2></div>
<div>
</body>
</html>