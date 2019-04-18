<?php
include 'db.php';
include 'common.php';
if(isset($_SESSION['login_user'])){

    } else {  
    if(isset($_POST['login'])){   
    showLogin();
    }
?>
<div class='container'>
<h3>Prihlasovani</h3> 
<form action="index.php" method="post">
  <label for="username">Username</label>
  <input type="text" name="username">
  <label for="password">Password</label>
  <div class="pole">
  <input type="password" name= "password">
  </div>
  <br>
  <input type="submit" name="login" value="Submit">
  <a href='registrace.php'>Registrace</a>
</form>  
  </div> 
  <?php  
}  
?>