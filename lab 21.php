<?php
if(isset($_POST['submit'])){
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    if (empty($username)) {
        echo "Username is required<br>";
    }
    if (empty($password)) {
        echo "Password is required<br>";
    }
}
?>
<form method="POST">
    <label>Username:</label>
    <input type="text" name="uname"><br>
    <label>Password:</label>
    <input type="password" name="psw"><br>
    <input type="submit" name="submit" value="Submit">
</form>

