<?php 
$username = '';
$username =  $_SESSION['login_user'];
include "db.php";
$query = "SELECT users.username, classes.class, znamky.date, znamky.mark FROM `users`, znamky, classes WHERE username = '$username' and znamky.id_student= users.id and znamky.id_class = classes.id ";
$result = mysqli_query($connection, $query);
if(!$result){
die('Query FAILED' . mysqli_error($connection));
}
?>
<div class="card">
<h2>Tvoje známky</h2>
<?php
while($row = mysqli_fetch_array($result)) {
    echo $row[2] . " ". $row[1] . ' známka ' . $row[3] . '<br>';
}
?>
</div>

