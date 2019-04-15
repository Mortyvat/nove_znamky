

<?php 
   
    include "db.php";
    $query = "SELECT weekday FROM schedule LIMIT 1";
    $result = mysqli_query($connection, $query);
    if(!$result){
    die('Query FAILED' . mysqli_error($connection));
    }
    while($row = mysqli_fetch_array($result)){
        $weekday = $row['weekday'];
        $query2 = "SELECT * FROM schedule WHERE weekday ='$weekday' LIMIT 1";
        $result2 = mysqli_query($connection, $query2);
        while($row2 = mysqli_fetch_array($result2)){
        echo $weekday. " ".$row2['class'] ."<br>";
 
        } 
    }

?>


