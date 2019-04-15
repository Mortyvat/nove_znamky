<div class="card">
<div style="overflow-x:auto;">
<table style="width:100%">
<tr>
<?php 
   
    include "db.php";
    $query = "SELECT hour FROM schedule LIMIT 1";
    $result = mysqli_query($connection, $query);
    $pole = array("Po", "Ut", "St", "Ct", "Pa");
    if(!$result){
    die('Query FAILED' . mysqli_error($connection));
    }
    echo"<h2>Rozvrh</h2><th></th>";
    for($i=8; $i<14; $i++){
        echo "<th>".$i."</th>";
    }
    for($i=0; $i<sizeof($pole); $i++){
        echo "</tr><tr><td>".$pole[$i]. "</td>";
        $query2 = "SELECT * FROM schedule WHERE weekday ='$pole[$i]'";
        $result2 = mysqli_query($connection, $query2);
        while($row2 = mysqli_fetch_array($result2)){
        //echo "<td>".$row2['cl']."</td>";
        $cl = $row2['cl'];
        $class = $row2['class'];
        $id = $row2['class_id'];
        echo "<td><a href='predmet.php?id=$id&class=$class'>$cl</a></td>";
        } 
        echo "</tr><tr>";
    }
?>
</table> 
</div>
</div>  

