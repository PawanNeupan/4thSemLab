<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBMS";

//Create connection
$conn= mysqli_connect($servername,$username,$password,$dbname);
//Check connection
if(!$conn) {
    die("connection failed:".mysqli_connect_error());
}
//sql to create table
$sql = "CREATE TABLE MyGuests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
    if (mysqli_query($conn,$sql)) {
        echo "Table MyGuests created successfully";
   } else {
    echo "Error creating table: ".mysqli_error($conn);
     }
    ?>