<html>
<head>
    <title>Signup</title>
</head>
<body style="background-color:#53ede3">
    <center><form method="POST" action = "../controllers/regCheck.php" enctype="multipart/form-data">
    <fieldset><legend align="center"><b><h1>Registration form</h1></b></legend>
    
            <table>
                <tr>
                    <td>ID:</td>
                    <td>
                        <input type="number" name="id" value="" placeholder="User ID">
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" value="" placeholder="Username">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" value="" placeholder="enter password here">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" value="" placeholder="email">
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" name="dob" value="" placeholder="Date of Birth"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Other">Other</td>
                </tr>
                <tr>
                    <td>Degree:</td>
                    <td><input type="checkbox" name="degree" value="SSC">SSC
                        <input type="checkbox" name="degree" value="HSC">HSC
                        <input type="checkbox" name="degree" value="Bsc">Bsc
                        <input type="checkbox" name="degree" value="Msc">Msc
                    </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name ="address" value="">
			
                    </td>
                </tr>
                <tr>
                    <td>Image:</td>
                    <td><input type="file" name="myfile"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="submit">
                        <a href="login.php">Back</a>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form></center>
</body>
</html>