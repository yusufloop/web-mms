<?php
include 'dblink.php';

$sql = "SELECT id, username, password FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
include 'footer.php';
?>