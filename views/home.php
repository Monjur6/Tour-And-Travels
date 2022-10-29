<?php 
    include_once("header.php");
?>

<!-- <html>
<head>
    <title>Home Page</title>
</head> 
<body style="background-color:#53edb7">
    <h1 align="center">Tour & Travels</h1> -->
    <!-- <a href="login.php">login</a> -->
    <!-- <a href="create.php">create new customer</a>
    <a href="cuslist.php">Customer list</a>
    <a href="../controllers/logout.php">logout</a>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header-1">
            <h1 class="header-a">Tour & Travels</h1>
            <ul class="ul-1">
                <li>Gallary</li>
                <li>Notification</li>
                <li><a href="cuslist.php">Customer list</a></li>
                <li><a href="create.php">Create new scustomer</a></li>
                <li>Money transaction</li>
                <li><a href="../controllers/logout.php">logout</a></li>
                <input class="text" id="search-bar" placeholder="Search here">
            </ul>
        </div>
        <div class="img-1">
            <img src="../assets/b.jpg">
        </div>
        <div class="img-2">
            <img src="../assets/d.jpg">
        </div>
    </div>
</body>
</html>
