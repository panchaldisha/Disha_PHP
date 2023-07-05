<?php
$conn=mysqli_connect("localhost","root","");
if(mysqli_query($conn,"create database `db-1`"))
{
	echo "Database created";
	
}
else
{
	echo "some error in database creation";
}
$conn=mysqli_connect("localhost","root","","db-1");
if(mysqli_query($conn,"create table student(rollno numeric primary key,name varchar(30) not null,percentage float)"))
{
	echo "table create";
}
else
{
	echo "some error in database create";
}
?>