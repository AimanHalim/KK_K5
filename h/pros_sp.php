<?php
include('config.php');


$username=$_POST['username'];
$password=$_POST['password'];



echo "<br>";

$query="insert into table_login values('','$username','$password')";
if (mysql_query($query)){
	echo "<h1>Login berjaya!!</h1>";
	echo "<br>";
	echo "<br>";
    header ("location:login.php");}
else
{
echo "Admin User tidak diterima";
echo "<br>";
echo "<br>";
echo "<a href=\"sign_up.php\"> Kembali ke pendaftaran</a>";

}
?>
