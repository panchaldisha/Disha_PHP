<html>
<head>
<title>form</title>
<body>
<form action="" method="post">
EnterNo1:<input type="text" name="n" value="" ><br>
EnterNo2:<input type="text" name="n2"value="" ><br>
<input type="submit" name="add" value="Add">
<input type="submit" name="mul" value="Mul">
</form>
<?php
if(isset($_POST['add']))
{
	$n=$_POST['n'];
	$n2=$_POST['n2'];
	$add=$n+$n2;
	echo "Addition is".$add;
}

?>
</body>
</html>