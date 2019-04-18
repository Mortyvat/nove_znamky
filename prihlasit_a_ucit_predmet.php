<?php
include "layout.php";
?>
<h3>Přihlašte si předmět</h3>
<?php
$username =  $_SESSION['login_user'];
$id_ucitele = $_SESSION['student_id'];
$id_predmetu = $_POST['id'];
echo $username. "<br>";
echo $id_ucitele. "<br>";
echo $id_predmetu . "<br>";
$connection = mysqli_connect('localhost', 'root', '', 'databaze');
if(!$connection) {

    die("Database connection failed");

}
$query2 = "INSERT INTO teaching(id_teacher, id_class) ";
$query2 .=  "VALUES ('$id_ucitele', '$id_predmetu')";
echo $query2;
$result = mysqli_query($connection, $query2);
include "layout_end.php"
?>
