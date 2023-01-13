<html>
<body>
<?php
include 'dblink.php';

$username = $_POST["username"];
$password = $_POST["password"];


echo "welcome ".$username. "<br>";
echo "Your password ".$password. "<br>";

$sql1 = "INSERT INTO user (username, password)
VALUES ('$username','$password')";

if ($conn->query($sql1) === TRUE) {
  
    echo "New record created successfully. " ;
  } else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }
?>
</body>
</html>