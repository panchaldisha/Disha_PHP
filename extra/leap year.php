<?php
for($year=1901;$year<2016;$year++)
{
	if($year%4==0)
	{	

	if($year%100!=0)
	{
		echo"$year  :leap year"."<br>";
	}
	}
	else
     {  
        echo "$year : Not leap year"."<br>";  
	 }	
}

?>	 