<?php
$servername = "localhost";
$username = "passfymail";
$password = "jaCa62hAs";
$dbname = "passfymail";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, trek, addressfrom, whereis, typepass, weight, namefrom, nameto FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "employee: " . $row["trek"]. . $row["addressfrom"]. . $row["whereis"]. . $row["typepass"]. . $row["weight"]. . $row["namefrom"]. . $row["nameto"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>