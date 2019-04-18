<?php include "layout.php";
$id_predmetu = $_POST['id'];
echo "<h3>$id_predmetu</h3>";
$query = "SELECT users.username, classes.class, znamky.date, znamky.mark FROM `users`, znamky, classes WHERE  znamky.id_student= users.id and znamky.id_class = classes.id and classes.class='$id_predmetu' ";
$result = mysqli_query($connection, $query);
$num_rows = mysqli_num_rows($result);
    while($row = mysqli_fetch_array($result)) {
        echo $row[0] .' dostal '. $row[2] .' známku '.$row[3].'<br>';
    //echo "Student ". $row[0] . " obdržel ". $row[2] . " známku <big>". $row[3] .".</big><br>";
    }
    include "layout_end.php";
?>
