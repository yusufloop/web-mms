<?php
if ($_POST["submit"])
echo "<h2>You clicked Submit!</h2>";
else if ($_POST["cancel"])
echo "<h2>You clicked Cancel!</h2>";
?>
<form action="form.php" method="post">
<input type="submit" name="submit" value="Submit">
<input type="submit" name="cancel" value="Cancel">
</form>