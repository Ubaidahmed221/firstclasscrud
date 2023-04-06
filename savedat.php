<?php 

 $fname =  $_POST['sname'];
 $lname =  $_POST['S_lname'];
 $age =  $_POST['s_age'];
 $sclass =  $_POST['class'];
 $sphone =  $_POST['sphone'];
 $scity =  $_POST['s_city'];

 $sername = 'localhost';
 $locname = 'root';
$cone =  mysqli_connect($sername,$locname,'','school_db') or die('connection not found');
$sql = "Insert into student1(first_name,last_name,age,class,phone_no,city) values('{$fname}','{$lname}','{$age}','{$sclass}','{$sphone}','{$scity}')";
 $result =  mysqli_query($cone,$sql) or die('sql unsuccessfully');


header('location: index.php');
mysqli_close($cone);









?>