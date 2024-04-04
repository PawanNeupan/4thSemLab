<?php
$conn = mysqli_connect('localhost', 'root', '', 'myDBMS');
$sql = "SELECT COUNT(*) AS count FROM myGuests";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);
echo $row['count'];
?>