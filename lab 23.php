<html>
<head>
<title></title>
</head>
<body>

<form id="myForm" method="post">
  <label>Name:</label>
  <input type="text" name="name"
  value="<?php echo isset($_POST['name']) ? ($_POST['name']) : 'pawan'; ?>"><br>

  <label>Email:</label>
  <input type="email" name="email"
  value="<?php echo isset($_POST['email']) ? ($_POST['email']) : 'pawan@gmail.com'; ?>"><br>

  <button type="submit">Submit</button>
</form>
</body>
</html>