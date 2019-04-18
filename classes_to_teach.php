<?php 
include "layout.php";
$username =  $_SESSION['login_user'];
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    if(!$result){
            die('Query FAILED' . mysqli_error());
    }
    $row3 = mysqli_fetch_array($result);
    $_SESSION['student_id'] = $row3[0];

?>
    
<form method="POST" action="prihlasit_a_ucit_predmet.php">
<select name ="id" id="">          
    <?php
    $username =  $_SESSION['login_user'];
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
    
        if(!($row[0]==$row2[2])){

            $id = $row[1];
            $id2 = $row[0];   
            $_POST['id'] = $id;
            echo "<option value='$id2'>$id</option>\n";
            echo '<br>';
            }   
        }
       
    ?>
</select>           
<input type="submit" name="submit" value="Submit">   
<?php include "layout_end.php"?>