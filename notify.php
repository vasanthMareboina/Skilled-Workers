<?php
$skill ="";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', '', 'skill');
if (isset($_POST['not'])) {
  $skill = mysqli_real_escape_string($db, $_POST['designation']);
if (empty($skill)) {
  	array_push($errors, "please enter your skill");
  }
  if (count($errors) == 0&&$skill=='carpentry') {
  	$sql = "SELECT * FROM ccc";
      $a= mysqli_query($db,$sql);
	  echo "<table border='1'>
<tr>
<th>Type</th>
<th>Category</th>
<th>Phone</th>
<th>Email</th>
<th>Description</th>
</tr>";
if(mysqli_fetch_assoc($a)==1)
{
	echo "<tr>";
  echo "<td>type:{$row['type']} </td>".
       "<td>category:{$row['category']} </td>".
       "<td>phone:{$row['phone']} </td>".
       "<td>location:{$row['location']} </td>".
        "<td>description:{$row['description']} </td> ";
  echo "</tr>";
  }
echo "</table>";
	 }
}
?>