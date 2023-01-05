<html>
<body>
<?php
include 'dblink.php';

$firstname = $_POST["first-name"];
$lastname = $_POST["last-name"];
$email = $_POST["email"];

$houseno = $_POST["house-number"];
$addressLine1 = $_POST["address-line-1"];
$addressLine2 = $_POST["address-line-2"];

echo "welcome ".$firstname. " " . $lastname. "<br>";
echo "Email is " .$email. "<br>";
echo "House number ".$houseno. "<br>";
echo "Address line 1 " .$addressLine1. "<br>";
echo "Address line 2 " .$addressLine2. "<br>";


$sql1 = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('$firstname','$lastname','$email')";

if ($conn->query($sql1) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }

$sql2 = "INSERT INTO address (id_MyGuests,houseNo, AddLine1, AddLine2)
VALUES ('$last_id','$houseno','$addressLine1','$addressLine2')";

if ($conn->query($sql2) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();

include 'footer.php';
?>

</body>
</html>