<?php
$st_id = $_GET['id1'];
$sername = 'localhost';
$locname = 'root';
$cone =  mysqli_connect($sername,$locname,'','school_db') or die('connection not found');
$sql = "delete from student1 where Sid = {$st_id}";
$result =  mysqli_query($cone,$sql) or die('sql unsuccessfully');

mysqli_close($cone);
header('location: index.php');

?>