<?php 
    require('header.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer list</title>
</head>
<body style="background-color:#c7c49f">
<fieldset><legend align="center"><b><h1>Customer list</h1></b></legend>
    <table align='right'>
        <tr>
            <td>
            <a href="home.php">Back</a>
            </td>
            <td></td><td></td>
            <td>
            <a href="../controllers/logout.php">logout</a>
            </td>
        </tr>
    </table>
    
    <br><br>
    <table border="1" align="center">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PASSWORD</th>
            <th>EMAIL</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>1</td>
            <td>morshed</td>
            <td>123</td>
            <td>morshed@gmail.com</td>
            <td>
                <a href="edit.php?id=1">EDIT</a>
                <a href="delete.php">DELETE</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>monjur</td>
            <td>123</td>
            <td>monjur@gmail.com</td>
            <td>
                <a href="edit.php?id=2">EDIT</a>
                <a href="delete.php">DELETE</a>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Mir</td>
            <td>123</td>
            <td>mir@gmail.com</td>
            <td>
                <a href="edit.php?id=3">EDIT</a>
                <a href="delete.php">DELETE</a>
            </td>
        </tr>
    </table>
    </fieldset>
</body>
</html>
<?php
	$file = fopen("../models/cus.txt", "r");

	echo "<pre>";
	while (!feof($file)) {
		echo fgets($file);
	}
	echo "</pre>";

	fclose($file);
?>