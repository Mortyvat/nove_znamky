
<div class="card">
<h2>Hledat studenta</h2>

<input type="text" id="myInput" onkeyup="Hledej()" placeholder="Hledej studenta" title="Napiš název">

<ul id="myUL">
<?php 
$connection = mysqli_connect('localhost', 'root', '', 'databaze');
if(!$connection) {
    die("Database connection failed");
}
$query = "SELECT * FROM `users` ";
$result = mysqli_query($connection, $query);
if(!$result){
die('Query FAILED' . mysqli_error($connection));
} 
while($row = mysqli_fetch_array($result)) {
    $user = $row[1];
    echo "<li><a href='#'>$user</a></li><br>";
    //predmet.php?id=$id&class=$class
}

?>
</ul>
<script>
function Hledej() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
</div>
