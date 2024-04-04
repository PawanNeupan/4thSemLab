<?php

// Modifying session configuration
ini_set('session.gc_maxlifetime', 3600); // Setting session timeout to 1 hour
ini_set('session.cookie_lifetime', 0);   // Making session cookie last until browser is closed

// Start the session
session_start();

// Set session variable
$_SESSION['username'] = 'pawan';

// Retrieve data from session variables
$username = $_SESSION['username'];

// Display retrieved data
echo "Username: $username";

// Destroy the session
session_destroy();

?>
