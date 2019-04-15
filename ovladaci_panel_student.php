<div class="topnav">
<?php
if(isset($_SESSION['login_user'])){
    ?>

            <a href="index.php">Index</a>
            <a href="classes_to_get.php">Přihlásit předmět</a>
            <a href="nastaveni.php">Změna hesla</a>
            <a href="predmety.php">Známky</a>
            <a href="osobni_udaje.php">Osobní údaje</a>
            <a href="odhlaseni.php">Odhlaseni</a>         
<?php 
} 
?>
</div>
