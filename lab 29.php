<?php
$conn = mysqli_connect('localhost', 'root', '', 'myDBMS');
$sql = "SELECT * FROM myGuests";
$res = mysqli_query($conn,$sql);
$data = [];
if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        array_unshift($data, $row);
    }
}
foreach ($data as $d){
        
            echo $d['id'];
            echo $d['firstname'];
            echo $d['lastname']; 
            echo $d['email']; 
            echo "<br>";
        }?> 