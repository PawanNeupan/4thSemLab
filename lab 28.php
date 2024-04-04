<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBMS";

//Create connection
$conn= mysqli_connect($servername,$username,$password,$dbname);
//Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
$sql = "INSERT INTO MyGuests (firstname,lastname,email)
VALUES ('Nabin','Neupane','neupane@gmail.com')";
if(mysqli_query($conn,$sql)) {
    echo"New records created successfully";
} else {
    echo "Error: ".$sql . "<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>