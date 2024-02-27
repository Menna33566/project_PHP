<?php
session_start();
// var_dump ($_POST);
// echo $_POST['username'] ;
if (isset($_SESSION['username']) && isset($_SESSION['pass'])){
    // $username=$_POST['username'];
    // $password=$_POST['pass'];
    
    if(($_SESSION['username'] == 'admin') ){
        // $_SESSION['username'] = $username;    
        // $_SESSION['pass'] = $password;
        // header('Location: index.php');
        require_once 'template_AD/header_AD.php';
        require_once 'add_stu.php' ;
        require_once 'allstudents.php' ;
        require_once 'template_AD/footer_AD.php';
        // exit(); // Ensure that no further code is executed after the redirect
     }
    //  else{
    //     echo "<h2>Invalid name or password</h2>";
    //     header("Location: login.php");
    //     // exit(); // Ensure that no further code is executed after the redirect
    //  }
}
else{
    echo "<h2>Invalid</h2>";
    header('Location: login.php');
    // exit(); // Ensure that no further code is executed after the redirect
}
?>


