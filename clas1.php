
<
<?php 

    $sername = 'localhost';
    $locname = 'root';
   $cone =  mysqli_connect($sername,$locname,'','empolyeses') or die('connection not found');

    $sql = 'select * from employres';
    $res =    mysqli_query( $cone, $sql);

    echo '<pre>';
    print_r($res);
    echo '</pre>';


    if(mysqli_num_rows( $res) > 0){
        while($roe = mysqli_fetch_assoc( $res)){
            echo '<pre>';
            echo $roe['id'] . '<br>';
            echo $roe['first_name']  . '<br>';
            echo $roe['last_name']  . '<br>';
            echo $roe['gender']  . '<br>';
            echo $roe['department'] ;
            echo $roe['age']. '<br>';
            echo $roe['nationality']. '<br>';
            echo $roe['salary']. '<br>';
            echo $roe['email']. '<br>';
            echo $roe['experince']. '<br>';    
            echo '</pre>';
        }
    }

    mysqli_close($cone);

?>