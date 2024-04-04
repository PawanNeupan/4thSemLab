<html>
<head>
    <title>User Information Form</title>
</head>
<body>
    <h2>User Information Form</h2>
    <form method="get" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age"><br><br>

        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {

        // Validate name
        if (empty($_GET['name'])) {
            echo "Name is required";
        }

        // Validate age
        if (empty($_GET['age'])) {
            echo "Age is required";
        } elseif ($_GET['age'] < 0 || $_GET['age'] > 150) {
            echo "Invalid age";
        }

        // Validate date of birth
        if (empty($_GET['dob'])) {
            echo "Date of Birth is required";
        }

        // Validate email
        if (empty($_GET['email'])) {
           echo"Email is required";
        } elseif (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        }

        
    }
    ?>
</body>
</html>