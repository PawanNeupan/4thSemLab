<html>
    <head>
        <title></title>
</head>
<?php
$errname='';
$errpass='';
$errmail='';
if(isset($_POST['submit'])){
    $err=1;
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $mail=$_POST['mail'];

    if(empty($name)){
        $errname="fill your name";
        $err=0;
    }
    if(empty($pass)){
        $errpass="password is required";
        $err=0;
 }
}
?>
<form method="post">
<label> Fullname: </label>
<input type="text" name="name"> <br>
<span class="error"><?php echo $errname;?></span>
<br>
<label> Password: </label>
<input type="text" name="pass"><br>
<span class="error"><?php echo $errpass;?></span>
<br>
<label> Email: </label>
<input type="text" name="mail"><br>
<span class="error"><?php echo $errmail;?></span>
<br>
<input type="submit" name="submit" value="submit">
</form>
</html>

