<?php 
    require('header.php');
    $id = $_GET['id'];
    $file = fopen('../models/cus.txt','r');
    while(!feof($file))
    {
        $user = fgets($file);
        $userArray = explode("|",$user);
        if(trim($userArray[0]) == $id)
        {
            $editUser = $userArray;
            break;
        }
    }
?>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body style="background-color:#96ed53">
    <a href="home.php">Back</a>
    <a href="../controllers/logout.php">logout</a>
    <center><form method="POST" action = "../controllers/cusCheck.php">
        <fieldset><legend align="center"><b><h1>Edit Customer</h1></b></legend>
            <table>
                <tr>
                    <td>ID:</td>
                    <td>
                        <input type="number" name="id" value="<?=$editUser[0]?>">
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" value="<?=$editUser[1]?>">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" value="<?=$editUser[2]?>">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" value="<?=$editUser[3]?>">
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="dob" value="<?=$editUser[4]?>"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gender" value="<?=$editUser[5]?>">Male
                        <input type="radio" name="gender" value="<?=$editUser[5]?>">Female
                        <input type="radio" name="gender" value="<?=$editUser[5]?>">Other</td>
                </tr>
                <tr>
                    <td>Degree:</td>
                    <td><input type="checkbox" name="degree" value="<?=$editUser[6]?>">SSC
                        <input type="checkbox" name="degree" value="<?=$editUser[6]?>">HSC
                        <input type="checkbox" name="degree" value="<?=$editUser[6]?>">Bsc
                        <input type="checkbox" name="degree" value="<?=$editUser[6]?>">Msc
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name ="address" value="<?=$editUser[7]?>">
			
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Update">
                    </td>
                </tr>
            </table>
            </fieldset>
        </form></center>
</body>
</html>