<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="number" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php
    if(isset($_POST['showbtn'])){
        $sername = 'localhost';
        $locname = 'root';
       $cone =  mysqli_connect($sername,$locname,'','school_db') or die('connection not found');
       $stu_id = $_POST['sid'];
       $sql = "select * from student1 where Sid = {$stu_id}";
     $result =  mysqli_query($cone,$sql) or die('sql unsuccessfully');
     
     if(mysqli_num_rows($result) > 0){
       while($row = mysqli_fetch_assoc( $result)){
        
    ?>


    <form class="post-form" action="update1.php" method="post">
    <div class="form-group">
            <label>F-Name</label>
            <input type="hidden" name="sid" value="<?php echo $row['Sid'] ?>">
            <input type="text" name="sname" value="<?php echo $row['first_name'] ?>"/>
        </div>
        <div class="form-group">
            <label>L-name</label>
            <input type="text" name="S_lname" value="<?php echo $row['last_name'] ?>" />
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" name="s_age" value="<?php echo $row['age'] ?>" />
        </div>
        <div class="form-group">
            <label>Class</label>

            <?php
            $sql1 = 'select * from class_name';
            $result1 =  mysqli_query($cone,$sql1) or die('sql unsuccessfully');
  
            if(mysqli_num_rows($result1) > 0){
                echo ' <select name="class">';
              while($row1 = mysqli_fetch_assoc( $result1)){
                if($row['class'] == $row1['cid']){
                    $select1 = 'selected';

                }else{
                    $select1 = "";
                }

                  echo "<option {$select1} value='{$row1['cid']}'>{$row1['classname']}</option>";}
                echo'</select>'; } 
                  ?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="number" name="sphone" value="<?php echo $row['phone_no'] ?>"  />
        </div>
        <div class="form-group">
            <label>City</label>
            <input type="text" name="s_city" value="<?php echo $row['city'] ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php 
       }}}
    ?>
</div>
</div>
</body>
</html>
