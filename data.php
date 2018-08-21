<?php

// initializing variables
$type = "";
$category = "";
$phone="";
$location="";
$description="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'skill');

// REGISTER USER
if (isset($_POST['reg'])) {
  // receive all input values from the form
  $type = mysqli_real_escape_string($db, $_POST['type']);
  $category = mysqli_real_escape_string($db, $_POST['category']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $description = mysqli_real_escape_string($db, $_POST['description']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($type)) { array_push($errors, "Username is required"); }
  if (empty($category)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phonenumber is required"); }
 if (empty($location)) { array_push($errors, "location is required"); }
 $date = date("Y-m-d H:i:s");
  if (count($errors) == 0&&$type=='Carpentry') {

  	$query = "INSERT INTO ccc (type, category,phone,location,description,date) 
  			  VALUES('$type', '$category', '$phone','$location','$description','$date')";
  	mysqli_query($db, $query);
	$_SESSION['name'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main1.php');
  }
  if (count($errors) == 0&&$type=='plumbing') {

  	$query = "INSERT INTO ppp (type, category,phone,location,description,date) 
  			  VALUES('$type', '$category', '$phone','$location','$description','$date')";
  	mysqli_query($db, $query);
	$_SESSION['name'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main1.php');
  }
  if (count($errors) == 0&&$type=='electrician') {

  	$query = "INSERT INTO eee (type, category,phone,location,description,date) 
  			  VALUES('$type', '$category', '$phone','$location','$description','$date')";
  	mysqli_query($db, $query);
	$_SESSION['name'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: main1.php');
  }
}
?>