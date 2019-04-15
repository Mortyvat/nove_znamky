<?php 
include "header.php";
include "db.php";
if(isset($_POST['submit'])){
    $username =  $_SESSION['login_user'];
    $post = htmlspecialchars($_POST['poslat']);
    $headline = $_POST['headline']; 
    $date = date("Y/m/d") . "<br>";
    $connection = mysqli_connect('localhost', 'root', '', 'databaze');
    if(!$connection) {
        die("Database connection failed");
    } 
    $query = "INSERT INTO blog(username, post, date, headline) ";
    $query .=  "VALUES ('$username','$post','$date', '$headline')";
    $result = mysqli_query($connection, $query);
    if(!$result){
    die('Query FAILED' . mysqli_error($connection));
    }
}
include "head.php";
?>
<body>
<h2>Novinka</h2> 
</div>
<form action="zapsat_aktualitu.php" method="post">
Nadpis <input type="text" name="headline" class="form-control"><br>
<textarea id="poslat" name="poslat" rows="10" cols="100">
Napište novinku
</textarea><br>
<input class ="btn btn-primary" type="submit" name="submit" value="Submit">
</form>
</body>
</html>