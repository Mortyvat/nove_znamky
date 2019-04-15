<?php 
$username = '';
$username =  $_SESSION['login_user'];
$connection = mysqli_connect('localhost', 'root', '', 'databaze');
if(!$connection) {
    die("Database connection failed");
} 
$query = "SELECT * FROM classes";
$result = mysqli_query($connection, $query);
if(!$result){
die('Query FAILED' . mysqli_error($connection));
}
?>
<div class="card">
<h2>Spolužáci</h2> 
<?php
while($row = mysqli_fetch_array($result)) {
    $id = $row[0];
    $class = $row[1];
    echo "<a href='predmetek.php?id=$id'>$class</a><br>";
}
?>
</div>