<?php
include ('config.php');
$number1=$_GET['number1'];
$query="delete from pelanggan where number1='$number1'";
$result=mysql_query($query);

if($result==TRUE) echo "berjaya <a href=\"baru.php\">senarai</a>"; //xperlu
?>