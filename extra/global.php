<?php
echo $a=20 ."<br>";
function addition()
{
	$x=45;
	$y=45;
	echo $GLOBALS['z']=$x+$y."<br>";
}
addition();
echo $z;
?>