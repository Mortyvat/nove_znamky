<?php
include "layout.php";
if(isset($_POST['register'])){
    $username = $_SESSION['login_user'];
    $login_id = $_SESSION['login_id'];
    $access = $_POST['access'];
    $grade = $_POST['grade'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $birthdate = $_POST['birthdate'];
    $sex = $_POST['sex'];

        $query2 = "UPDATE users SET ";
        $query2 .= "grade = '$grade',";
        $query2 .= "firstname = '$firstname',";
        $query2 .= "surname = '$surname',";
        $query2 .= "birthdate = '$birthdate',";
        $query2 .= "sex = '$sex'";
        $query2 .= "WHERE username = '$username' ";
        $result2 = mysqli_query($connection, $query2);
        if(!$result2){
        die('Query FAILED' . mysqli_error($connection));   
        }
    }  
?>

<h3>Změna údajů</h3> 
<form action="osobni_udaje.php" method="post">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname">

        <label for="surname">Surname</label>
        <input type="text" name="surname">

        <label for="Birthdate">Birthdate</label>
        <input type="text" name="birthdate">

        <select name="sex">
        <option value="muz">Muž</option>
        <option value="zena">Žena</option>

        <br>
        </select>
        <select name="access">
        <option value="1">Učitel</option>
        <option value="2">Student</option>
        </select>
        
        <select name="grade">
        <option value="1">První třída</option>
        <option value="2">Druhá třída</option>
        <option value="3">Třetí třída</option>
        <option value="4">Čtvrtá třída</option>
        <option value="5">Pátá třída</option>
        <option value="6">Šestá třída</option>
        <option value="7">Sedmá třída</option>
        <option value="8">Osmá třída</option>
        <option value="9">Devátá třída</option>
        </div>
        </select>

        <input type="submit" name="register" value="Submit">
        <br>

    </form>
</form>
<?php include "layout_end.php"?>