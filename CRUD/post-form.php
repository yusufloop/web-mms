<html>
    <?php 
        include 'dblink.php';
    ?>
<body>

<form action="post-data.php" method="post">
First Name: <input type="text" name="first-name"><br>
Last Name: <input type="text" name="last-name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<?php
        include 'footer.php';
?>

</body>
</html>