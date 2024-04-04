<?php

// File path
$file = 'file.txt';

// Check if file exists
if (file_exists($file)) {
    // Set permissions to read and write for owner, read-only for group and others
    if (chmod($file, 0644)) {
        echo "Permissions set successfully.";
    } else {
        echo "Failed to set permissions.";
    }
} else {
    echo "File does not exist.";
}

?>
