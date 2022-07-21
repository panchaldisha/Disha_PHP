<?php
$a=87;
$b=76;
$c=40;
$lar=($a>$b)?($a>$c?$a:$c):($b>$c?$c:$b);
echo"The largest number among"."$a"."$b"."$c"."is:".$lar;
?>