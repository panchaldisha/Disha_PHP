<?php
$Physics=76;
$Chemistry=80;
$Biology=90;
$Mathematics=64;
$Computer=98;
echo "Physics=".$Physics."<br>"."Chemistry=".$Chemistry."<br>"."Biology=".$Biology."<br>"."Mathematics=".$Mathematics."<br>"."Computer=".$Computer."<br>";
$total=$Physics+$Chemistry+$Biology+$Mathematics+$Computer;
echo "total Mark is:" .$total."<br>";

$per=($total*100)/500;
echo "per% is:".$per."</br>";

if($per>=70)
{
	echo "your grade is Distric class<br>";
}
elseif($per>=60&&$per<70)
{
	echo "your grade is First class<br>";
}
elseif($per>=50&&per<60)
{
	echo "your grade is second class<br>";
}
elseif($per>=40&&per<50)
{
	echo "your grade is pass class<br>";
}
else
{
	echo "your grade is fail<br>";
}
?>
