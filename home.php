<html>
<head>
<style>
*{padding:0;margin:0px}
.connect1
{
width:100%;
height:100px;
background:#863F03;
opacity:0.8;
border:1px solid black;
margin-left:0px;
box-shadow:0 15px 10px rgba(0,0,0,.6);
}
h1
{
padding:15px 0px 0px 70px;
font-style:times new roman;
color:white;
font-style:bold;
font-size:50px;
}
.id{
	font-size:30px;
	color:white;
}
</style>
</head>
<body>
<div class="connect1">
<h1>Connect<span class="id">.com</span></h1>
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
</body>
</html>