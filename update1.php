<?php 

$s_id = $_POST['sid'];
$fname =  $_POST['sname'];
 $lname =  $_POST['S_lname'];
 $age =  $_POST['s_age'];
 $sclass =  $_POST['class'];
 $sphone =  $_POST['sphone'];
 $scity =  $_POST['s_city'];

 $sername = 'localhost';
 $locname = 'root';
$cone =  mysqli_connect($sername,$locname,'','school_db') or die('connection not found');
$sql = "UPDATE student1 SET first_name = '$fname', last_name = '$lname',
 age = $age, class = $sclass, phone_no = $sphone, city = '$scity' where  Sid = $s_id";

$result =  mysqli_query($cone,$sql) or die('sql unsuccessfully');

header('location: index.php');
mysqli_close($cone);

?>