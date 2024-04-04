<?php
// File path
$filename = "file.txt";

// Check if file exists
if (!file_exists($filename)) {
    echo "Error: File does not exist.";
    exit();
}

// Check if file is writable
if (!is_writable($filename)) {
    // Attempt to change permissions to make file writable
    if (!chmod($filename, 0644)) {
        echo "Error: Unable to make file writable.";
        exit();
    }
}

// Perform file operations here...
?>
