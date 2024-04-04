<?php

session_start();
$_SESSION['username'] = 'pawan';
$_SESSION['email'] = 'neupane1818@gmail.com';

// Retrieving data from session variables
$username = $_SESSION['username'];
$email = $_SESSION['email'];

// Displaying retrieved data
echo "Username: $username <br>";
echo "Email: $email <br>";

// Destroying the session
session_destroy();
?>