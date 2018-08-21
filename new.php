<?php include('data.php'); ?>
<html>
<head>
<style>
* {
  margin: 0px;
  padding: 0px;
}
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

.header {
  width: 30%;
  margin: 70px auto 0px;
  color: black;
  background: #02F5FC;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form,.content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #02F5FC;
  background: #262626;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
	color:white;
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input,select {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
  margin-top:4px;
}
.btn {
	margin-top:4px;
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
opacity:0.5;
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
  	<h2>POSTING PROBLEM</h2>
  </div>
  <form method="post" action="#">
  <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Type:</label>
  	  <select name="type">
  <option value="Carpentry">Carpentry</option>
  <option value="plumbing">plumbing</option>
  <option value="electrician">electrician</option>
</select>
  	</div>
  	<div class="input-group">
  	  <label>Category:</label>
  	  <select name="category">
  <option value="major">major</option>
  <option value="minor">minor</option>
  </select>
  	</div>
  	<div class="input-group">
  	  <label>Phone:</label>
  	  <input type="text" name="phone">
  	</div>
  	<div class="input-group">
  	  <label>Location:</label>
  	  <input type="text" name="location">
  	</div>
	<div class="input-group">
  	  <label>Description:</label>
  	  <input type="text" name="description">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg">submit</button>
  	</div>
  </form>
  </div>
</body>
</html>