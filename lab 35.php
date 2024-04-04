<?php
// <!-- Give an example of session with two session variables and their values. -->

session_start();
$_SESSION['batch']='bim';

echo $_SESSION['batch'];


?>