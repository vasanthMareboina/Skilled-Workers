<?php
session_start();
$username = "";
$phone   = "";
$skill ="";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'skill');
if (isset($_POST['reg'])) {
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $skill = mysqli_real_escape_string($db, $_POST['skill']);

  if (empty($username))
	  { array_push($errors, "Username is required"); }
  if (empty($password_1)) 
  { array_push($errors, "Password is required"); }
if (empty($password_2))
	  { array_push($errors, "confirm the password"); }
 
  if (empty($phone))
	  { array_push($errors, "phonenumber is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  $user_check_query = "SELECT * FROM skill WHERE phone='$phone'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['phone'] === $phone) {
      array_push($errors, "phonenumber already exists");
    }
  }
  $user_check_query = "SELECT * FROM carpentry WHERE phone='$phone'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['phone'] === $phone) {
      array_push($errors, "phonenumber already exists");
    }
  }
  $date = date("Y-m-d H:i:s");
if (count($errors)==0&&$skill=='None') {
  	$password = md5($password_1);
$query = "INSERT INTO skill(user,password,phone,skill,date)VALUES('$username','$password','$phone','$skill','$date')";
  	mysqli_query($db, $query);
	 $_SESSION['name'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.php');
  } else
	if (count($errors)==0&&$skill=='Carpentry') {
  	$password = md5($password_1);
$query = "INSERT INTO carpentry(name,password,phone,skill,date)VALUES('$username','$password','$phone','$skill','$date')";
  	mysqli_query($db, $query);
	 $_SESSION['name'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.php');
  }  else
	  if (count($errors)==0&&$skill=='plumbing') {
  	$password = md5($password_1);
$query = "INSERT INTO plumbing(user,password,phone,skill,date)VALUES('$username','$password','$phone','$skill','$date')";
  	mysqli_query($db, $query);
	 $_SESSION['name'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.php');
  }else
     if(count($errors)==0&&$skill=='electrician') {
  	$password = md5($password_1);
$query = "INSERT INTO electrician(user,password,phone,skill,date)VALUES('$username','$password','$phone','$skill','$date')";
  	mysqli_query($db, $query);
	 $_SESSION['name'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.php');
  }  
  }
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db,$_POST['name']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  
  if (count($errors) == 0) {
  	$password = md5($password);
  	$sql = "SELECT * FROM electrician WHERE user='$username' AND password='$password'";
      $a= mysqli_query($db,$sql);
	   if(mysqli_num_rows($a)==1)
  	{
  	  $_SESSION['name'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.php');
  	}else
		{
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  if (count($errors) == 0) {
  	$password = md5($password);
  	$sql = "SELECT * FROM carpentry WHERE user='$username' AND password='$password'";
      $a= mysqli_query($db,$sql);
	   if(mysqli_num_rows($a)==1)
  	{
  	  $_SESSION['name'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.php');
  	}else
		{
  		array_push($errors, "Wrong username/password combination");
  	}
  }
  if (count($errors) == 0) {
  	$password = md5($password);
  	$sql = "SELECT * FROM plumbing WHERE user='$username' AND password='$password'";
      $a= mysqli_query($db,$sql);
	   if(mysqli_num_rows($a)==1)
  	{
  	  $_SESSION['name'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main.php');
  	}else
		{
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}


//logout
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['name']);
  	header("location: login.php");
  }
?>