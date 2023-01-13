<html>
<body>
    <?php 
        include 'dblink.php';
        
    ?>
<h1>Register</h1>
<form action="register-post.php" method="post">

Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>

<?php 
    include 'footer.php';
?>
</body>
</html>