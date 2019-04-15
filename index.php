<?php
include "header.php";
include "db.php";
include "head.php";
?>

<body>
<div id="main">
  
        <?php
        include "prihlasovani.php";
        include "welcome.php";
        if(isset($_SESSION['login_user'])){
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        if($row['access']==1){
            include "ovladaci_panel_ucitel.php";
        }   else{
            include "ovladaci_panel_student.php";
        } 
        echo "<div class='row'>";
        
        echo "<div class='leftcolumn'>";
        
        include "vypis_znamek_predmetu_studenta.php";
        include "Vypsat_aktualitu.php";
         
        echo "</div>";
        echo "<div class='rightcolumn'>";
        include "hledat_studenta.php";
        include "rozvrh.php";
        include "moje_znamky.php";
        include "vypis_studentu_predmetu.php";
        ?> 
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
        </div>     
</div>
</body>
</html>
<?php }  ?>