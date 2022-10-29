<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manager_Add_Delete_Update</title>
</head>
<body>
	<form method="POST" action="../controller/add_manager.php">
<h1 align="center">Travel & Tourism</h1>
<center><img align="center" width="150px" height="145px" 
	src="../asset/manager.png"></center><br>

	<h1 align="center">Manager List</h1>

<center>
	<table>
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="name">
			</td>
		</tr>
		<tr>
			<td>Id</td>
			<td>
				<input type="text" name="id">
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
				<input type="text" name="address">
			</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>
				<input type="text" name="phone">
			</td>
		</tr>
		<tr>
			<td>NID Number</td>
			<td>
				<input type="text" name="nid">
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<br>
				<input type="submit" name="submit">
			</td>
		</tr>
	</table>
</center>

<?php
	$file = fopen("../models/manager.txt", "r");

	echo "<pre>";
	while (!feof($file)) {
		echo fgets($file);
	}
	echo "</pre>";

	fclose($file);
?>

<!-- <table border="1" align="center">
	<tr>
		<th>S/N</th>
		<th>Name</th>
		<th>Id</th>
		<th align="center">Address</th>
		<th>Phone</th>
		<th>NID Number</th>
		<th align="center" colspan="2">Action</th>
	</tr>
	<tr>
			<td>1</td>
			<td>Mahir Shahriar</td>
			<td>MAN2022</td>
			<td>House 0088, Block J, Wari, Dhaka-1203</td>
			<td>01935422331</td>
			<td>0739038158</td>
			<td><a href="Edit.html">Edit</td>
			<td><a href="Edit.html">Delete</td>
		</tr>
</table> -->
<h1 align="center"><a href="Dashboard.html">Home</h1>
</form>
</body>

</html>