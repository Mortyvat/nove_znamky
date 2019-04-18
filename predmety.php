<?php 
include "layout.php";
$username = '';
$username =  $_SESSION['login_user'];
$connection = mysqli_connect('localhost', 'root', '', 'databaze');
if(!$connection) {
    die("Database connection failed");
} 

$query = "SELECT users.username, classes.class, classes.id FROM `users`, attending, classes WHERE users.username = '$username' and attending.id_student= users.id and attending.id_class = classes.id ";
$result = mysqli_query($connection, $query);
if(!$result){
die('Query FAILED' . mysqli_error($connection));
}
?>
<div class="moje_predmety">
<h2>Tvoje známky</h2>
<?php
while($row = mysqli_fetch_array($result)) {
    echo"<div class='rightcolumn'><div class=card>";
    $id = $row['id'];
    $class = $row['class'];
    echo "<h2>".$class. "<br></h2>";
    $query2 = " SELECT users.username, classes.class, znamky.date, znamky.mark FROM `users`, znamky, classes WHERE username = 'robin' and znamky.id_student= users.id and znamky.id_class = classes.id and classes.id='$id'";
    $result2 = mysqli_query($connection, $query2);
    $numRow = mysqli_num_rows($result2);
    if(!$result2){
        die('Query FAILED' . mysqli_error($connection));
    }
    if($numRow > 0){
        $i = 0;
        $totalgrade = 0;
        echo "<b>Tvoje známky:</b><br>";
        while($row2 = mysqli_fetch_array($result2)) {
            
            echo $row2['date'] . ' známka ' . $row2['mark'] . '<br>';

            $grade = $row2['mark'];
            $i++;
            $totalgrade = ($totalgrade + $grade)/$i;
        }
        echo "<b>Tvůj průměr: </b>". $totalgrade;
        echo "<br><br>";
    }else{
        echo "<b>Nemáte známky</b><br>";
    }
    echo '</div></div>';
}


include "layout_end.php"
?>
</div>

