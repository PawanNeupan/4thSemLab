<?php
echo $_SERVER["PHP_SELF"]."<br>";
echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["REQUEST_METHOD"]."<br>";
?>
<form method="POST" action="">
    <label>Name:</label>
    <input type="text" name="name"><br>
    <label>Password</label>
    <input type="text" name="password"><br>
    <input type="submit" name="submit" value="submit">
</form>

