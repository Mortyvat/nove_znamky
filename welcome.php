<div class="header">
<?php


        if(isset($_SESSION['login_user'])){
    $username = $_SESSION['login_user'];
    $query = "SELECT * FROM users WHERE username = '$username'";
    $connection = mysqli_connect('localhost', 'root', '', 'databaze');
    $result = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($result)) {
        if($row['access']==1){
        echo "<h2 style='text-transform:uppercase;'>Vítejte Pane učiteli ".$_SESSION['login_user']."</h2> ";
        } elseif($row['access']==2){
            echo "<h2 style='text-transform:uppercase;'>Vítejte studente ". $row['grade'].". třídy " .$_SESSION['login_user'] ." </h2>";
        } else {
            echo "Vypadni, tady nemáš co dělat";

        }
        
    }       
}

?>
</div>

