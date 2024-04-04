<?php
setcookie("username1", "pawan Neupane", time() + 32592000);
setcookie("password1", "pawan", time() + 32592000);
echo "Cookies set <br>";
echo $_COOKIE['username1'];
echo $_COOKIE['password1'];
?>