

<?php 
if(isset($_SESSION['login_user'])){
    $username =  $_SESSION['login_user'];   
    include "db.php";
    $query = "SELECT * FROM blog ORDER BY id_post DESC LIMIT 4";
    $result = mysqli_query($connection, $query);
    if(!$result){
    die('Query FAILED' . mysqli_error($connection));
    
    }
    while($row = mysqli_fetch_array($result)){
        echo "<div class='card'><h2>". $row['headline']."</h2><p>". $row['post']. "<br> Článek vytvořil <b>" . $row['username']. "</b> ". $row['date']. "</p></div>";
 
        } 
}
?>


