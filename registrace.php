<?php
include "header.php";
include "db.php";
if(isset($_POST['register'])){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $password2 = $_POST['password2'];
    if(!($password==$password2)){
        echo  'Hesla se neshodují'. '<br>';
    }
    include 'db.php';
    $query2 = "SELECT * FROM users WHERE username ='$username' LIMIT 1";
    $result2 = mysqli_query($connection, $query2);
    if (mysqli_fetch_row($result2)) {
        //$hlaska .= "Prihlasovaci� jmeno existuje". '<br>';
    } else {
            $access = $_POST['access'];
            $grade = $_POST['grade'];
            $firstname = $_POST['firstname'];
            $surname = $_POST['surname'];
            $birthdate = $_POST['birthdate'];
            $sex = $_POST['sex'];
            $query = "INSERT INTO users(username, password, access, grade, firstname, surname, birthdate, sex) ";
            $query .=  "VALUES ('$username', '$password', '$access', '$grade', '$firstname', '$surname', '$birthdate', '$sex')";  
            $result = mysqli_query($connection, $query);
            if(!$result){
            die('Query FAILED' . mysqli_error($connection));
            
        }
    }
}
include "head.php";   
?>

<body> 
<div class="container">
<div class="col-sm-6">
<h3>Registrace</h3> 
<form action="registrace.php" method="post">
        <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control">
        </div>

        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name= "password" class="form-control">
        </div>
        <div class="form-group">
        <label for="password2">Password2</label>
        <input type="password" name= "password2" class="form-control">
        </div>
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
            <li><a href="index.php">HOME</a></li>

    </form>
</form>
</div>
</div>
</body>
</html>