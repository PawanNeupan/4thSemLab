<?php
// Example usage:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize filename
    $filename = preg_replace('/[^a-zA-Z0-9-_\.]/', '', $_POST['filename']);

    // Check if filename is valid
    if (!preg_match('/^[a-zA-Z0-9-_\.]+$/', $filename)) {
        echo "Invalid filename.";
        exit();
    }

    // Use $filename safely
    echo "Safe filename: $filename";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filename Validation and Sanitization</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="filename">Enter filename:</label>
        <input type="text" id="filename" name="filename" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
