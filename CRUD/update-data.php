<?php
include 'dblink.php';

$sql = "UPDATE MyGuests SET lastname='haruan' WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
include 'footer.php';
?>