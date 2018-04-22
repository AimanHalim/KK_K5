<!DOCTYPE html>
<html>
<center>
	<head>
		<?php
		include "config.php";
		?>
		<title>PrimeCalculator</title>
<style>
body { 
    /* The image used */
    background-image:url("bg.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
table,tr,th,td{
padding:10px;}
tr,th,td{
border:1px solid red;
}
th{
background-color:orange;}
</style>
	</head>
	<body>
	<script language="javascript">
function Kid()
{
document.getElementById('gambar').src="lol.jpg" style="75px" ;
}
function Teen()
{
document.getElementById('gambar').src="lolol.jpg";
}
function Kid()
{
var Umur=document.getElementById('Umur').value;
if(Umur=lelaki)
{
document.getElementById('Umur').innerHTML=lelaki;
}
else(Umur=perempuan)
{
document.getElementById('Umur').innerHTML=perempuan;
}
}
</script>
<select id='Umur'>
<option>BUDAK</option>
<option>REMAJA</option>
</select>


<button onClick="Kid()">Budak</button>
<button onClick="Teen()">Remaja</button>
</html>
		
		
			<?php
			
			
				if(isset($_POST['submit']))
				{
					
					if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
					{
						
						if($_POST['operation'] == 'Tambah')
						{
							$result = $_POST['number1'] + $_POST['number2'];	
						}
						if($_POST['operation'] == 'Tolak')
						{
							$result = $_POST['number1'] - $_POST['number2'];	
						}
						if($_POST['operation'] == 'Darab')
						{
							$result = $_POST['number1'] * $_POST['number2'];	
						}
						if($_POST['operation'] == 'Bahagi')
						{
							$result = $_POST['number1'] / $_POST['number2'];	
						}
						if($_POST['operation'] == 'Modulus')
						{
							$result = $_POST['number1'] % $_POST['number2'];	
						}
						
						// Print total to the browser
						echo "<h1>Result: {$result}</h1>";
					
					} else {
						
						// Print error message to the browser
						echo 'Numeric values are required';
					
					}
				}
$number1=$_POST['number1'];
$operation=$_POST['operation'];
$number2=$_POST['number2'];
$comment=$_POST['comment'];


$query="insert into kalkulator values
('$number1','$operation','$number2','$result','$comment')";

mysql_query($query);
			?>
		    
		    <!-- Calculator form -->
		    <form method="post" action="">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="Tambah">Tambah</option>
		            <option value="Tolak">Tolak</option>
		            <option value="Darab">Darab</option>
		            <option value="Bahagi">Bahagi</option>
		            <option value="Modulus">Modulus</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" /><br><br>
		        <textarea rows="4" cols="50" name="comment" placeholder="Enter comment here"></textarea>
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>

		    <?php

$sql="SELECT * from kalkulator";
$result=mysql_query($sql) or die (mysql_error());
?>

		    <table>
			<table bgcolor="#ffffff">
		    	<tr>
                <th>nombor1</th><br>
                <th>operasi</th>
                <th>nombor2</th>
                <th>Hasil</th>
                <th>Komen</th>
                </tr>
<?php
while ($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<br><td>".$row["number1"]."</td>";
echo"<td>".$row["operation"]."</td>";
echo"<td>".$row["number2"]."</td>";
echo"<td>".$row["result"]."</td>";
echo"<td>".$row["comment"]."</td>";
echo"</tr>";
}
echo"</table>";
echo"<br>";
?>
<img id="gambar" src="lolol.jpg" style="width:100px">
		    </table>
	    
		</div>
	</body>
	</center>
</html>