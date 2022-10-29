
<html>
    <head>
        <title>login</title>
    </head>
    <body style="background-color:orange">
        <center><form method="POST" action = "../controllers/loginCheck.php">
        <fieldset><legend align="center"><b><h1>Sign in</h1></b></legend>
        <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" value="";>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" value="";>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="login">

                        <a href="reg.php">Create an Account</a>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form></center>
    </body>
</html>
