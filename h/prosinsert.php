<?php
include "config.php"; 

 
$number1=$_POST['number1'];
$operation=$_POST['operation'];
$number2=$_POST['number2'];
$result=$_GET['result'];
$comment=$_POST['comment'];
echo "<br>";

$query="insert into kalkulator values
('$number1','$operation','$number2','$result','$comment')";

if(mysql_query($query))
{

 
echo"<a href=\"baru.php\">list</a>";
}

		else
			echo"something went wrong";
