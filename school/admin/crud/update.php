<?php
require_once "connection.php";
$update = $connection -> prepare('UPDATE student SET student_name= ?, student_status= ?, courses= ? , birth_date= ? WHERE id= ?');
$update -> execute([$_POST['name'], $_POST['radioo'],$_POST ["course"] ,$_POST['birthday'] ,$_POST['id']]);
header('Location: ../index.php');
// echo $_POST['radioo'] ;
?>