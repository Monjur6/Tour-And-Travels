 <?php 
session_start();
if(isset($_REQUEST['submit']))
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    if($username != null && $password != null)
    {
        $file = fopen('../models/user.txt', 'r');
        while(!feof($file))
        {
            $user = fgets($file);
            $user = explode('|',$user);
            if(trim($user[1]) == $username && trim($user[2]) == $password)
            {
                $_SESSION['status'] = "true";
                setcookie('status', 'true', time()+300,'/');
                header('location: ../views/home.php');
            }
        
        }
        echo "invalid username or password";
    }
    else
    {
        echo "null submission";
    }
}
?>