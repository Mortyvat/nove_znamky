<?php  
class font{
    private $font_size;
    private $font_color;
    private $string_value;
    function __construct($font_size,$font_color,$string_value) 
    {
    $this->font_size =$font_size;
    $this->font_color=$font_color;
    $this->string_value=$string_value;
    $this->customizePrint();
    }
    function customizePrint() 
    {
        echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";>".$this->string_value."</p>";
    }
}
if(isset($_POST['submit']))
{
    $text = $_POST['text'];
    $velikost = $_POST['velikost'];
    $barva = $_POST['barva'];
    $prd = new font($velikost,$barva,$text);
}
?>
<body> 
<div class="container">
<div class="col-sm-6">
<h3>Registrace</h3> 
<form action="tridy.php" method="post">
        <div class="form-group">
        <label for="text">Textové pole</label>
        <input type="text" name="text" class="form-control">
        </div>
        <div class="form-group">
        <label for="velikost">Velikost</label>
        <input type="text" name="velikost" class="form-control">
        </div>
        <div class="form-group">
        <select name="barva">
        <option value="blue">modra</option>
        <option value="red">cervena</option>
        <option value="green">zelena</option>
        <option value="yellow">zluta</option>
        <option value="brown">hneda</option>
        </select>
		</div>
        <input class ="btn btn-primary" type="submit" name="submit" value="Submit">
        

    </form>

</div>
</div>
</body>