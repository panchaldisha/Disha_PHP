<?php
$colors=array("red,yellow,green,blue");
foreach($colors as $c)
{
   echo $c."<br>";
}
foreach($colors as $c)
{
	if($c=="green")
	{
		break;
	}
	echo $c."<br>";
}
?>