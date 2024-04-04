<?php
$conn=mysqli_connect('localhost','root','','myDBMS');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Sample form data (you'll replace this with actual form data)
$firstname = "Pawan";
$lastname = "Neupane";
$email = "Neupane1818@gmail.com";

// SQL query with parameterized query to retrieve form data safely
$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests WHERE firstname = ? AND lastname = ? AND email = ?";
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters
mysqli_stmt_bind_param($stmt, "sss", $firstname, $lastname, $email);

// Execute statement
mysqli_stmt_execute($stmt);

// Get result
$result = mysqli_stmt_get_result($stmt);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " - Email: " . $row["email"] . " 
        <br>- Registration Date: " . $row["reg_date"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
