<html>
<body>
<?php
include 'dblink.php';

$firstname = $_POST["first-name"];
$lastname = $_POST["last-name"];
$email = $_POST["email"];



echo "welcome ".$firstname. " " . $lastname. "<br>";
echo "Email is " .$email. "<br>";


$sql = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('$firstname','$lastname','$email')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

include 'footer.php';
?>

</body>
</html>