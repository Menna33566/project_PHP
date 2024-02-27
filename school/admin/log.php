<?php
session_start () ;
if(isset($_POST['username'])&& !empty($_POST['pass']))
{
    $username=$_POST['username'];
    $password=$_POST['pass'];

    if($username ==='admin')
    {

        $_SESSION['username'] = $username;    
        $_SESSION['pass'] = $password;
        header("Location: index.php");
    }
    else{
        header('Location:login.php');
     }
}
else{
    header('Location:login.php');
}
?>