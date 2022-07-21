<h1>S.S.C Result</h1>
<?php
$Gujrati=65;
$Hindi=78;
$English=45;
$Computer=87;
echo "Gujrati=".$Gujrati."<br>"."Hindi=".$Hindi."<br>"."English=".$English."<br>"."Computer=".$Computer."<br>";
$total=$Gujrati+$Hindi+$English+$Computer;
echo "total mark is:".$total."<br>";

$per=($total*100)/400;
echo"per%is:".$per."<br>";
if($per>=70)
{
	echo"your grade is  Distric class<br>";
}
elseif($per>=60&& $per<70)
{
	echo "your grade is First class<br>";	
}
elseif($per>=50&&$per<60)
{
	echo"your grade is secound class<br>";
}
elseif($per>=40&&$per<50)
{
	echo"your grade is pass class<br>";
}
else
{
	echo"your grade is Fail<br>";
}
?>