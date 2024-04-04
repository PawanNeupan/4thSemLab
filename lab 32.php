<!-- <?php
//$conn = mysqli_connect('localhost', 'root', '', 'myDBMS');
?>

<html>
<body>
    <h2>Retrieve Data</h2>
    <form method="POST">
        First Name:<br>
        <input type="text" id="firstname" name="firstname"><br><br>
        <input type="submit" name="submit" value="Retrieve Data">
    </form>
    
    <?php
    // Check if form is submitted
    //if(isset($_POST['firstname'])){
       // $firstname = $_POST['firstname'];

       // $sql = "SELECT * FROM myGuests WHERE firstname = '$firstname'";
       // $res = mysqli_query($conn, $sql);
    ?>

    <h2>User List</h2>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // if (mysqli_num_rows($res) > 0) {
            //     while ($row = mysqli_fetch_assoc($res)) {
            ?>
                    <tr>
                        <td><?php //echo $row['id']; ?></td>
                        <td><?php //echo $row['firstname']; ?></td>
                        <td><?php //echo $row['lastname']; ?></td>
                        <td><?php //echo $row['email']; ?></td>
                    </tr>
            <?php
            //     }
            // } else {
            //     echo "<tr><td colspan='4'>No results found</td></tr>";
            // }
            ?>
        </tbody>
    </table>
    <?php
    // }
    // mysqli_close($conn);
    ?>
</body>
</html> -->

<html>
    <body>
        <form action="" method="get">
            firstname: <input type="text" name="fn"><br>
            lastname: <input type="text" name="ln"><br>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
<?php
if (isset($_GET['submit'])){
    $fn=$_GET['fn'];
    $ln=$_GET['ln'];

    $conn = mysqli_connect('localhost', 'root', '', 'myDBMS');
    $sql = "SELECT * FROM myGuests where firstname = '$fn'AND lastname = '$ln'";
    $res = mysqli_query($conn,$sql);
    $data = [];
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            array_unshift($data, $row);
        }
        foreach ($data as $d){
        
            echo $d['id'];
            echo $d['firstname'];
            echo $d['lastname']; 
            echo $d['email']; 
            echo "<br>";
        }
    

}
}

?>
