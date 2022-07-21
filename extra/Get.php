<html>
<head>
<title>$_get</title>
</head>
<body>
<form action= "" method="post">
  <p>Name:<input type="text" name="name"></p>
  <P>Age:<input type="text"  name="age"></p>
  <p><input type="submit" name="submit" value="click"></p>
</form>
<?php
if(isset($_POST['submit']))
{
   echo $name=$_REQUEST['name']."<br>";
   echo $age=$_REQUEST['age'];
}

session_start();
$_SESSION['user']="disha";
echo $_SESSION['user'];

?>
</body>
</html>   
