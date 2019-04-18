<?php 
include "layout.php";
$username =  $_SESSION['login_user'];
$query3 = "SELECT * FROM users WHERE username ='$username' ";
$result3 = mysqli_query($connection, $query3);
if(!$result3){
    die('Query FAILED' . mysqli_error());
}
$row3 = mysqli_fetch_array($result3);
$_SESSION['student_id'] = $row3[0];
//echo "ID studenta " . $_SESSION['student_id']. "<br>";
?>
<h3>Předměty</h3>
    <form method="POST" action="studenti_predmetu.php">
        <select name ="id" id="">
        <?php
        $query = "SELECT * FROM classes";
        $query2 = "SELECT users.username, classes.class, classes.id FROM `users`, teaching, classes WHERE users.username = '$username' and teaching.id_teacher= users.id and teaching.id_class = classes.id ";
        $result = mysqli_query($connection, $query);
        $result2 = mysqli_query($connection, $query2);
        if(!$result){
            die('Query FAILED' . mysqli_error());
        }
        if(!$result2){
            die('Query FAILED' . mysqli_error());
        }
        while($row = mysqli_fetch_array($result)) {
            $row2 = mysqli_fetch_array($result2);
            if(($row[0]==$row2[2])){
                $id = $row[1];
                $id2 = $row[0];   
                echo "<option value='$id'>$id</option>\n";
                //echo $_POST;
                echo '<br>';
                }   
        }    
        ?>
            </select>
            <br>
    <input type="submit" name="submit" value="Submit">
    </form>
<?php include "layout_end.php";?>