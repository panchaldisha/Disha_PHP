<?php
$conn=mysqli_connect("localhost","root","");
if(mysqli_query($conn,"create database `col`"))
{
	echo"Databace created";
}
else
{
	echo "some error in database connection";
}
$conn=mysqli_connect("localhost","root","");
if(mysqli_query($conn,"create table student(rollno numeric primary key,name varchar(30) not null,percentage float)"))
{
	echo "table create";
}
else
{
	echo "some error in database create";
}
?>