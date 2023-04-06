<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <form action="">
        <input type="text" name="search"  placeholder="search...." id="" style="margin-left: 320px;margin-bottom: 30px;padding: 7px;"/>

        <button type="submit" style="padding: 10px;color: white;background: deepskyblue; border: none;width: 90px; cursor:pointer;" name="searchbtn">Search</button>
        <select name="sort" id="" style="text-align: center;
    padding: 7px;
    margin-left: 360px;
    margin-top: -9px;
    margin-bottom: 10px">
        <option value="">--- select ---</option>
        <option value="asc">A to Z</option>
        <option value="desc">Z to A</option>
    </select>
</form>
    <?php 

      $sername = 'localhost';
      $locname = 'root';
     $cone =  mysqli_connect($sername,$locname,'','school_db') or die('connection not found');

    $search = $_GET['search'] ?? "";
    $sort = $_GET['sort'] ?? "asc";

    if($search != null){
    $search = $_GET['search'];

    $sql = "select * from student1 join class_name where student1.class = class_name.cid  having CONCAT(Sid,first_name) like '%$search%'"; 
        // $sql = "select * from student1 where CONCAT(Sid,first_name) like '%$search%'";
    //   $result =  mysqli_query($cone,$sql) or die('sql unsuccessfully'); order first_name $sort
    }
    else{
        $sql = "select * from student1 join class_name where student1.class = class_name.cid order by first_name $sort";
        
    }
    $result =  mysqli_query($cone,$sql) or die('sql unsuccessfully');
    if(mysqli_num_rows($result) > 0){
    ?>
   
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>F-Name</th>
        <th>L-Name</th>
        <th>Age</th>
        <th>Class</th>
        <th>Phone No</th>
        <th>City</th>
        <th>Action</th>
        </thead>
        <tbody>

            <?php 
            while($row = mysqli_fetch_assoc($result)){

 

            ?>
            <tr>
                <td> <?php echo $row['Sid']; ?></td>
                <td> <?php echo $row['first_name']; ?></td>
                <td> <?php echo $row['last_name'];  ?></td>
                <td> <?php echo $row['age']; ?></td>
                <td> <?php echo $row['classname']; ?></td>
                <td> <?php echo $row['phone_no']; ?></td>
                <td> <?php echo $row['city']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['Sid']; ?> '>Edit</a>
                    <a href='delectin.php?id1=<?php echo $row['Sid']; ?>'>Delete</a>
                </td>
            </tr>
            <?php }
            
?>
        </tbody>
    </table>
    <?php }
    else{
        echo '<h2>No Record Found</h2>';
    }
    mysqli_close($cone);


    
    ?>
</div>
</div>
</body>
</html>
