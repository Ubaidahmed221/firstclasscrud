<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedat.php" method="post">
        <div class="form-group">
            <label>F-Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>L-name</label>
            <input type="text" name="S_lname" />
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" name="s_age" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php 
                 $sername = 'localhost';
                 $locname = 'root';
                $cone =  mysqli_connect($sername,$locname,'','school_db') or die('connection not found');
                $sql = 'select * from  class_name ';
              $result =  mysqli_query($cone,$sql) or die('sql unsuccessfully');
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <option value="<?php echo $row['cid'] ?>"><?php echo $row['classname'] ?></option>
              <?php } ?>  
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="number" name="sphone" />
        </div>
        <div class="form-group">
            <label>City</label>
            <input type="text" name="s_city" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
