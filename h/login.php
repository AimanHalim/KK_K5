<html>
<?php 
include('config.php'); 
?>
<head>
<meta charset="UTF-8">

<center><body bgcolor="lightgrey">
<form action="proslogin.php" method="post">

<center>
<table width="400" border="1">
<tr>
<th scope="col">Username:</th>
<th scope="col"><div align="left">
<input type="text" name="username" size="20"/>
</div>
</th>
<tr>
<tr>
<th scope="col">Password:</th>
<th scope="col"><div align="left">
<input type="password" name="password" size="10"/>
</div>
</th>
</tr>
</table>
<input type='submit' name='log in'>


<br>
</div>
</form>
<form action="Sign_up.php">
    <button type="submit">Sign Up</button>
</form>
</body>
</center>
</html>