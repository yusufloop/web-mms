<?php
include 'dblink.php';

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "azril";
$lastname = "yusuf";
$email = "azril@example.com";
$stmt->execute();

$firstname = "ima";
$lastname = "Moee";
$email = "ima@example.com";
$stmt->execute();

$firstname = "Julien";
$lastname = "Doolee";
$email = "julien@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

include 'footer.php';
?>
