<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Staff_Add_Delete_Update</title>
</head>
<body>
	<form method="POST" action="../controller/add_staff.php">
<h1 align="center">Travel & Tourism</h1>
		<center><img align="center" width="275px" height="150px"  
			src="../asset/staff.png"></center><br>
<h1 align="center">Staff List</h1>

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
			<td>Joining date</td>
			<td>
				<input type="date" name="join">
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
	$file = fopen("../models/staff.txt", "r");

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
		<th>Joining Date</th>
		<th align="center" colspan="2">Action</th>
	</tr>
	<tr>
			<td>1</td>
			<td>Mir Monjur</td>
			<td>SFT1231</td>
			<td>House A/90, Ward no-12, Kuril, Dhaka-1209</td>
			<td>01935422222</td>
			<td>0735097567</td>
			<td>01/02/2022</td>
			<td><a href="Edit.html">Edit</td>
			<td><a href="Edit.html">Delete</td>
		</tr>
	<tr>
			<td>2</td>
			<td>Abdul Rahman</td>
			<td>SFT1232</td>
			<td>House 44/21, Damra, Jatrabari, Dhaka-1360</td>
			<td>01935424567</td>
			<td>0458388185</td>
			<td>01/03/2020</td>
			<td><a href="Edit.html">Edit</td>
			<td><a href="Edit.html">Delete</td>
		</tr>
	<tr>
			<td>3</td>
			<td>Kabir Ahamed</td>
			<td>SFT1233</td>
			<td>House 2255, Joydebpur, Gazipur-1700</td>
			<td>01935425632</td>
			<td>0877612177</td>
			<td>01/09/2019</td>
			<td><a href="Edit.html">Edit</td>
			<td><a href="Edit.html">Delete</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Saraaf Khan</td>
			<td>SFT1234</td>
			<td>Porikhitopur, Madhukhali, Faridpur-7850</td>
			<td>01935427654</td>
			<td>0876754132</td>
			<td>01/05/2017</td>
			<td><a href="Edit.html">Edit</td>
			<td><a href="Edit.html">Delete</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Rakib Hossain</td>
			<td>SFT1235</td>
			<td>House 7733, Rohanpur, Rajshahi-1203</td>
			<td>01935429876</td>
			<td>0459054399</td>
			<td>01/08/2017</td>
			<td><a href="Edit.html">Edit</td>
			<td><a href="Edit.html">Delete</td>
		</tr>
	</table> -->
		<h1 align="center"><a href="Dashboard.html">Home</h1>
</form>
</body>
</html>