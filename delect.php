<?php include 'header.php'; 

?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>

<?php

    
if(isset($_POST['deletebtn'])){
    $st_id = $_POST['sid'];

$sername = 'localhost';
$locname = 'root';
$cone =  mysqli_connect($sername,$locname,'','school_db') or die('connection not found');
$sql = "delete from student1 where Sid = $st_id";
$result =  mysqli_query($cone,$sql) or die('sql unsuccessfully');

header('location: index.php');
mysqli_close($cone);
}



?>
</body>
</html>
