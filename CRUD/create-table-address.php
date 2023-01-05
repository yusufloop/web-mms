<?php
include 'dblink.php';

// sql to create table
$sql = "CREATE TABLE address (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_MyGuests INT(6) NOT NULL,
HouseNo VARCHAR(10) NOT NULL,
AddLine1 VARCHAR(50) NOT NULL,
AddLine2 VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table address created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

 include 'footer.php';
?>