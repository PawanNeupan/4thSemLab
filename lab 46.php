<?php
$filename = "file1.txt";

// Open the file for appending
$file = fopen($filename, "a");
if ($file == false) {
    echo "Error: Unable to open file.";
    exit();
}

// Data to be appended
$data = "This is new data to append.";

// Append data to the file
fwrite($file, $data);

// Close the file handle
fclose($file);

echo "Data appended successfully.";
?>
