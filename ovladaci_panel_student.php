<?php
if(isset($_SESSION['login_user'])){
    ?>
<nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,12 15,12" stroke="#fff" stroke-width="3"/>
            <path d="M0,18 15,18" stroke="#fff" stroke-width="3"/>
            <path d="M0,24 15,24" stroke="#fff" stroke-width="3"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
      <li><a href="index.php">Domů</a></li>
      <li><a href="classes_to_get.php">Přihlásit předmět</a></li>
      <li><a href="nastaveni.php">Změna hesla</a></li>
      <li><a href="predmety.php">Známky</a></li>
      <li><a href="zapsat_aktualitu.php">Novinka</a></li>
      <li><a href="osobni_udaje.php">Osobní údaje</a></li>
      <li><a href="odhlaseni.php">Odhlašení</a></li>
    </ul>
  </nav>
  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="index.php">Domů</a>
    <a href="classes_to_get.php">Přihlásit předmět</a>
    <a href="nastaveni.php">Změna hesla</a>
    <a href="predmety.php">Známky</a>
    <a href="zapsat_aktualitu.php">Novinka</a>
    <a href="osobni_udaje.php">Osobní údaje</a>
    <a href="odhlaseni.php">Odhlášení</a> 
  </div>

  <div id="main">
  </div>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '200px';
      document.getElementById('main').style.marginLeft = '200px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
</body>          
            
            
            
            
            
                     
<?php 
} 
?>

