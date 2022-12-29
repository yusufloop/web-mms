<?php
include 'dblink.php';

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Yusuf', 'Hensem', 'Yusuf@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include 'footer.php';
?>