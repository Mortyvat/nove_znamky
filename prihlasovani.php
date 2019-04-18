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
  <div>
  <label for="username">Username</label>
  <br>
  <input type="text" name="username">
  </div>
  <label for="password">Password</label>
  <input type="password" name= "password"> 
  <input class ="btn btn-primary" type="submit" name="login" value="Submit">
  <a href='registrace.php'>Registrace</a>
</form>
  </div>
  <?php  
}  
?>