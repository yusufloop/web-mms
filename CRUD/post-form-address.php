<html>
<?php
    include 'dblink.php';

?>
<body>

<form action="post-data-address.php" method="post">

    First Name: <input type="text" name="first-name"><br>
    Last Name: <input type="text" name="last-name"><br>
    E-mail: <input type="text" name="email"><br>

    <hr>

    House Number: <input type="text" name="house-number"><br>
    Address Line 1: <input type="text" name="address-line-1"><br>
    Address Line 2: <input type="text" name="address-line-2"><br>
<input type="submit">
</form>

<?php
        include 'footer.php';
?>

</body>
</html>