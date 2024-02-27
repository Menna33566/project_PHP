<?php
require_once 'connection.php' ;
$name =$_POST['name'];
$courses= $_POST ["course"] ;
$status = $_POST['radioo'];
$birthday=$_POST['birthday'];

// echo "status" . $status ;
// $image =$_POST['image'];

$file= $_FILES['image'];

$fileName = $_FILES['image']['name'];
$fileTmpName = $_FILES['image']['tmp_name'];
$fileSize = $_FILES['image']['size'];
$fileError = $_FILES['image']['error'];
$fileType = $_FILES['image']['type'];

$fileExt = explode('.' , $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg' , 'jpeg' , 'png' , 'pdf');


    if(in_array($fileActualExt , $allowed)){
        if ($fileError === 0){
            if ($fileSize < 1000000000){
                $fileNameNew = uniqid('' , true) . "." . $fileActualExt;
                $fileDestination = 'uploaded/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                // echo "secceded";
                $insert = $connection -> prepare('INSERT INTO student (student_name,courses,student_status,birth_date,stu_img) VALUES (?,?,?,?,?)');
                $insert-> execute([$name,$courses,$status,$birthday,$fileDestination]);
               
                echo "<img src= uploaded/".$fileNameNew." alt=''> ";

            } else {
                echo "your file is too big";
            }
        } else {
            echo "There was an error while uploadin file!";
        }
    } else {
        echo "You cannot upload files of this types";
    }




header('Location: ../index.php');




?>