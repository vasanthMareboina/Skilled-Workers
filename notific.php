<?php include('result.php'); ?>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <style>
  * {
  margin: 0px;
  padding: 0px;
}
html{
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

.header {
  width: 30%;
  margin: 110px auto 0px;
  color: black;
  background: #02F5FC;
  text-align: center;
  border: 1px solid #02F5FC;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
  margin-top:90px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #02F5FC;
  background: #262626;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 23px 0px 10px 0px;
}
.input-group label {
	color:white;
	margin-top:20px;
  display: block;
  text-align: left;
  margin: 3px;
  font-size:20px;
  font-family:times new roman;
}
.input-group input,select {
	
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
	margin-top:10px;
  padding: 10px;
  font-size: 15px;
  color: black;
  background: #02F5FC;
  border: none;
  border-radius: 5px;
}
button[type="submit"]:hover
{
background:#02F5FC;
color:white;
opacity:0.8;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
  </style>
  
</head>
<body>
<div class="connect1">
<h1>Connect<span class="id">.com</span></h1>
</div>
  <div class="header">
  	<h2 style="font-size:25px;">Enter Details</h2>
  </div>
	
  <form method="post" action="#">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Skill:*</label>
  	  <input type="text" name="designation">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="not">Submit</button>
  	</div>
  </form>
</body>
</html>