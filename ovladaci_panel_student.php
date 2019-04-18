<?php
if(isset($_SESSION['login_user'])){
    ?>

<nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="20" height="30">
            <path d="M0,12 15,12" stroke="#fff" stroke-width="3"/>
            <path d="M0,18 15,18" stroke="#fff" stroke-width="3"/>
            <path d="M0,24 15,24" stroke="#fff" stroke-width="3"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
    <li><a href="index.php">Domů</a></li>
            <li><a href="classes_to_teach.php">Učit předmět</a></li>
            <li><a href="zapsat_aktualitu.php">Novinka</a></li>
            <li><a href="pridat_znamky.php">Přidat Známky</a></li>
            <li><a href="predmety_ucitel.php">Přehled Známek</a><li>
            <li><a href="osobni_udaje.php">Osobní údaje</a></li>
            <li><a href="odhlaseni.php">Odhlaseni</a></li>
    </ul>
  </nav>
  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="index.php">Domů</a>
    <a href="classes_to_teach.php">Učit předmět</a>
    <a href="zapsat_aktualitu.php">Novinka</a>
    <a href="pridat_znamky.php">Přidat Známky</a>
    <a href="predmety_ucitel.php">Přehled Známek</a>
    <a href="osobni_udaje.php">Osobní údaje</a>
    <a href="odhlaseni.php">Odhlaseni</a>
  </div>

            
            
            
            
            
            
                     
<?php 
} 
?>

