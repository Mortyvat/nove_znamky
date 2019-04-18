<?php
include "header.php";
include "db.php";
include "head.php";

?>

<body>
        <?php
        include "notuser.php";
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
    }  ?>
        <div class="container">
