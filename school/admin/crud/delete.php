<?php
require_once 'connection.php' ;
$delete= $connection ->prepare ('DELETE FROM student WHERE id=?');
$delete ->execute([$_GET['id']]);
if(mysqli_fetch_array(mysqli_query(mysqli_connect('localhost', 'root', '', 'storedb'), 'SELECT COUNT(*) FROM student'))["COUNT(*)"]=='0'){
    mysqli_query(mysqli_connect('localhost', 'root', '', 'storedb'), 'ALTER TABLE student AUTO_INCREMENT = 1');
}
header('Location: ../index.php');
echo $_GET['id'];

?>