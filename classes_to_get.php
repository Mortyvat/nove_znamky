<?php 
include "layout.php";
?>

<body>
    
<div class="container">
<h3>Předměty k přihlášení</h3>
    <form method="POST" action="prihlasit_predmet.php">
    <div class="form-group">
        <select name ="id" id="">            
        <?php
        showMyClasses();          
        ?>
            </select>
            </div>
            <br>
    <input type="submit" name="submit" value="Submit">
    <?php 
    ?>   
    </div>
    </form>
</div>
</body>
</html>