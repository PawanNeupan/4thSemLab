<?php
$conn=mysqli_connect('localhost','root','','myDBMS');
$sql = "SELECT * FROM myGuests";
$res= mysqli_query($conn,$sql);
$data = [];
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){
        array_unshift($data,$row);
    }
}
?>
<html>
    <head> 
    <title> User List </title>
</head>
<body> 
    <table border="1">
        <thead>
        <tr> 
            <th> id </th>
            <th> firstname </th>
            <th> lastname </th>
            <th> email </th>
            
        </tr>
<?php
//$i=1;
foreach ($data as $d) {
    ?>
    <tbody>
        <tr>
            <td><?php echo $d['id']; ?></td>
            <td><?php echo $d['firstname']; ?> </td>
            <td><?php echo $d['lastname']; ?> </td>
            <td><?php echo $d['email']; ?> </td>

            
            

</tbody>
<?php
            }?>
            </thead>

    </table>
</body>
</html>