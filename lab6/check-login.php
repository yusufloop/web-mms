<?php

include 'dblink.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT id FROM user WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
$count = $result->num_rows;

if ($count == 1) {
  // output data of each row
  echo "username is already exist !!";
  $_SESSION['login_user'] = $username;
  echo "<br>Your username is  " . $_SESSION['login_user'];
  
} else {
  header("location: register.php");
  echo "Username is not Exist !!";
}

$conn->close();
?>