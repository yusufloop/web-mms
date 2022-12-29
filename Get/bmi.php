<html>
<body>
<?php
$height = $_GET['height'];
$weight = $_GET['weight'];
$bmi = $weight / ($height * $height);
echo $bmi;
?>
</body>
</html>