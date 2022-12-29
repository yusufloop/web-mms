<html>
<head>
<title> Hello World! </title>
</head>
<body>
<?php
echo "Hello World!";
?>
<hr>

<?php

$number1 = 1;
$number2 = "1"; //string
$C = ($number1 + $number2); // Integer sum
$D = $number1 . $number2; // String concatenation
echo $C; // prints 2
echo $D;// prints 11

?>
<hr>

<?php
$num = 4;
if ($num == 0) {
echo "The variable num is equal to 0";
}
else if (($num > 0) && ($num <= 5)) {
echo "The variable num is between 1 and 5";
}
else {
echo "The variable num is equal to ".$num;
}
?>

<hr>
<?php
$count=0;
while($count<3)
{
echo "hello PHP. <br>";
$count += 1;
}
?>
<hr>

<h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Some more text.</p>
    <?php include 'footer.php'?>

<hr>

<?php
// This is a function
function multiplication($no1, $no2) {
$result= $no1 * $no2;
return $result;
}
$display_result = multiplication(12, 3);
echo $display_result; // Outputs 
echo multiplication(12, 3); // Outputs 36
?>
<hr>

<button><a href="Get/bmi.php?height=1.67&weight=56.5">Method GET</a></button>

<hr>

<form action="POST/registration.php" method="post"> Name: <input
type="text" name="name">
Email: <input type="text" name="email">
<input type="submit">

<hr>

<button><a href="POST/post.php">Post method by themself</a></button>

<hr>

<button><a href="POST/form.php">Post method onclick </a></button>
</body>
</html>
