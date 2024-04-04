<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time Form</title>
</head>
<body>
    <h2>Enter Date and Time</h2>
    <form method="post">
        Date:
        <input type="date" id="date" name="date"><br>
        Time:
        <input type="time" id="time" name="time"><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Initialize variables for form fields and error messages
        $date = $_POST['date'];
        $time = $_POST['time'];

        // Validate date and time inputs
        if (empty($date)) {
            echo 'Date is required<br>';
        } elseif (!strtotime($date)) {
            echo 'Invalid date format<br>';
        }

        if (empty($time)) {
            echo 'Time is required<br>';
        } elseif (!strtotime($time)) {
            echo 'Invalid time format<br>';
        }

        // If no errors, process the data
        if (!empty($date) && !empty($time) && strtotime($date) && strtotime($time)) {
            echo "Date: $date<br>";
            echo "Time: $time";
        }
    }
    ?>
</body>
</html>
