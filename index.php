<?php
require_once ("header.php");
require_once ("db.php");
require_once ("head.php");
?>

<body>
        <?php
        include "prihlasovani.php";
        include "welcome.php";
        if(isset($_SESSION['login_user'])){
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        if($row['access']==1){
            require_once ("ovladaci_panel_ucitel.php");
        }   else{
            require_once ("ovladaci_panel_student.php");
        } 
        echo "<div class='row'>";
        
        echo "<div class='leftcolumn'>";
        
        require_once ("vypis_znamek_predmetu_studenta.php");
        require_once "Vypsat_aktualitu.php";
         
        echo "</div>";
        echo "<div class='rightcolumn'>";
        require_once ("hledat_studenta.php");
        require_once ("rozvrh.php");
        require_once ("moje_znamky.php");
        require_once ("vypis_studentu_predmetu.php");
        ?> 
        

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