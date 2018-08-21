
<?php
$skill ="";
$errors = array(); 
$conn = new mysqli('localhost', 'root', '', 'skill');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if (isset($_POST['not'])) {
  $skill = mysqli_real_escape_string($conn, $_POST['designation']);
if (empty($skill)) {
  	array_push($errors, "please enter your skill");
  }
  if (count($errors) == 0&&$skill=='carpentry') {
$sql = "SELECT * FROM ccc";
$result = $conn->query($sql);
echo "<table border='1'><tr><th>type</th><th>category</th><th>phone</th><th>location</th><th>description</th><th>date</th></tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["type"]. " </td><td> " . $row["category"]. " </td><td>" . $row["phone"]. " </td><td>" . $row["location"]. "</td><td>" . $row["description"]. "</td><td>" . $row["date"]. "</td></tr>";
    }
	 echo "</table>";
} else {
    echo "0 results";
}
  }
  if (count($errors) == 0&&$skill=='plumbing') {
$sql = "SELECT * FROM ppp";
$result = $conn->query($sql);
echo "<table border='1'><tr><th>type</th><th>category</th><th>phone</th><th>location</th><th>description</th><th>date</th></tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["type"]. " </td><td> " . $row["category"]. " </td><td>" . $row["phone"]. " </td><td>" . $row["location"]. "</td><td>" . $row["description"]. "</td><td>" . $row["date"]. "</td></tr>";
    }
	 echo "</table>";
} else {
    echo "0 results";
}
  }
  if (count($errors) == 0&&$skill=='electrician') {
$sql = "SELECT * FROM eee";
$result = $conn->query($sql);
echo "<table border='1'><tr><th>type</th><th>category</th><th>phone</th><th>location</th><th>description</th><th>date</th></tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["type"]. " </td><td> " . $row["category"]. " </td><td>" . $row["phone"]. " </td><td>" . $row["location"]. "</td><td>" . $row["description"]. "</td><td>" . $row["date"]. "</td></tr>";
    }
	 echo "</table>";
} else {
    echo "0 results";
}
  }
}
?>
