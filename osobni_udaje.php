<?php
include "header.php";
include "db.php";
include "common.php";
if(isset($_POST['register'])){
    $username = $_SESSION['login_user'];
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
if(isset($_SESSION['login_user'])){
    $username = $_SESSION['login_user'];
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    if($row['access']==1){
        include "ovladaci_panel_ucitel.php";
    }   else{
        include "ovladaci_panel_student.php";
    }
}
include "head.php"; 
?>

<body> 
<div class="container">
<div class="col-sm-6">

<h3>Registrace</h3> 
<form action="osobni_udaje.php" method="post">
        <div class="form-group">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" class="form-control">
        </div>
        <div class="form-group">
        <label for="surname">Surname</label>
        <input type="text" name="surname" class="form-control">
        </div>
        <div class="form-group">
        <label for="Birthdate">Birthdate</label>
        <input type="text" name="birthdate" class="form-control">
        </div>
        <div class="form-group">
        <select name="sex">
        <option value="muz">Muž</option>
        <option value="zena">Žena</option>
        </select>
        <select name="access">
        <option value="1">Ucitel</option>
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

        <input class ="btn btn-primary" type="submit" name="register" value="Submit">
        <br>

    </form>
</form>
</div>
</div>
</body>
</html>