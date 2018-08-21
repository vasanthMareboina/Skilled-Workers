<?php
$conn = new mysqli('localhost', 'root', '', 'skill');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM ccc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["type"]. " - Name: " . $row["category"]. " loc:" . $row["location"]. "des:" . $row["location"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>