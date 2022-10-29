<?php 
session_start();
if(isset($_REQUEST['submit']))
{
    $id = $_REQUEST['id'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $dob = $_REQUEST['dob'];
    $address = $_REQUEST['address'];
    $gender = $_REQUEST['gender'];
    $degree = $_REQUEST['degree'];
    if($username != null && $password != null && $email != null)
    {
            $user = ['id' => $id, 'username' => $username, 'password' => $password, 'email' => $email, 'dob' => $dob, 'gender' => $gender, 'degree' => $degree, 'address' => $address];
            $_SESSION['user'] = $user;
            $user = "\r\n".$id."| ".$username."| ".$password."| ".$email."| ".$dob."| ".$gender."| ".$degree."| ".$address;
            $file = fopen('../models/user.txt','a');
            fwrite($file, $user);
            $src = $_FILES['myfile']['tmp_name'];
            $des = '../assets/upload/'.$_FILES['myfile']['name'];
            move_uploaded_file($src, $des);
            header('location: ../views/login.php');
    }
    else
    {
        echo "null submission";
    }
}
?>