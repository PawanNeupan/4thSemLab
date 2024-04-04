<?php
// Convert date and time strings to DateTime objects
$dateString = '2024-03-30';
$timeString = '13:45:00';

$date = new DateTime($dateString);
$time = new DateTime($timeString);

// Manipulate DateTime objects
$date->modify('+1 day');
$time->modify('+2 hours');

// Format DateTime objects
$formattedDate = $date->format('l, F j, Y'); // Format: Day of the week, Month Day, Year
$formattedTime = $time->format('h:i A'); // Format: Hour:Minute AM/PM

// Display formatted date and time
echo "Formatted Date: $formattedDate<br>";
echo "Formatted Time: $formattedTime";
?>