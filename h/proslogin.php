<?php
include('config.php');

$uname=$_POST['username'];
$pword=$_POST['password'];

$qur=mysql_query('select * from table_login');

while($x=mysql_fetch_array($qur))
{
	$dbn=$x['username'];
	$dbp=$x['password'];
}

if ($uname==$dbn&&$pword==$dbp)
{
	header ('Location:baru.php');
}
else if ($uname==''||$pword=='')
{
	echo "Empty";
}
else 
{
	echo "Wrong things";
}
?>