<?php include('valid.php'); ?>
<!DOCTYPE html>
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
background-size:cover;
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
.connect2{
	margin-top:20px;
	width:100%;
	background:#262626;
}
.header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
 .content {
  width: 30%;
  margin: 100px auto;
  padding: 20px;
  border: 1px solid #02F5FC;;
  background: #262626;
  border-radius:10px 10px;
}

.btn {
	margin-top:10px;
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
 button[type="submit"]
{
outline:none;
border:none;
height:45px;
width:200px;
color:black;
font-size:20px;
background:#02F5FC;
border:1px solid #02F5FC;
border-radius:10px;
cursor:pointer;
font-weight:bold;
font-family:times new roman;
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
<div class="connect2">
<?php  if (isset($_SESSION['name'])) : ?>
    	<center><p style="font-family:times new roman;
	font-size:30px;
	font-style:italic;
	display:block;color:#02F5FC">Welcome <strong><?php echo $_SESSION['name']; ?></strong> to Connect.com.</p></center>
    	 <button type="submit" style="margin-left:1170px;"><a href="login.php?logout='1'" style="color:black;text-decoration:none;">Logout</a></button>
    <?php endif ?>
</div>
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
	<p>
	<form>
	<button type="submit"><a href="notific.php" target="_blank" style="text-decoration:none;color:black;">NOTIFICATIONS</a></button>
	<button type="submit"><a href="new.php" style="text-decoration:none;color:black;">PROBLEM</a></button></form></p>
	</div>
</body>
</html>