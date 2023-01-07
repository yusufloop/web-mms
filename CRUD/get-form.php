<html>
    <?php
        include 'dblink.php';
    ?>
<body>

<form action="get-welcome.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<?php
        include 'footer.php';
?>

</body>
</html>