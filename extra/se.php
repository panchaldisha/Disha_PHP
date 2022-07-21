<?php

session_start();
$_SESSION['user']="disha";
echo $_SESSION['user'];

unset($_SESSION['user']);


?>
