<?php

$txtNombre="";
$rdgLenguaje="";

$chkphp="";
$chkcss="";
$chkhtml="";

$lsAnime="";

if ($_POST){

    $txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $rdgLenguaje=(isset($_POST['lenguaje']))?$_POST['lenguaje']:"";

    $chkphp=(isset($_POST['chkphp'])=="si")?"checked":"";
    $chkcss=(isset($_POST['chkcss'])=="si")?"checked":"";
    $chkhtml=(isset($_POST['chkhtml'])=="si")?"checked":"";

    $lsAnime=(isset($_POST['lsAnime']) )?$_POST['lsAnime']:""  ; 

    
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <?php if($_POST){ ?>
<strong>Hola</strong>: <?php echo $txtNombre; ?>
<br>
<strong>Tu lenguaje es</strong>: <?php echo $rdgLenguaje; ?>
<br>
<strong>Estas aprendiendo</strong>: 
<?php echo ($rdgLenguaje=="php")?"PHP":"";?>
<?php echo ($rdgLenguaje=="html")?"HTML":"";?>
<?php echo ($rdgLenguaje=="css")?"CSS":"";?>
<br>
<?php } ?>

     <br>
    <form action="input-select.php" method="post">

<input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
<br>
¿te gusta?: <br>
<br> php: <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"";?> name="lenguaje" value="php" id=""> <br>
<br> html: <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":"";?> name="lenguaje" value="html" id=""> <br>
<br> css: <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":"";?> name="lenguaje" value="css" id=""> <br>
<br>
Estas aprendiendo... 
<br> php: <input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
<br> html: <input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
<br> css: <input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id=""><br>

¿Qué anime te gusta?... <br>
<select name="lsAnime" id="">
    <option value="">[Ninguna serie]</option>
    <option value="naruto" <?php echo ($lsAnime=="naruto")?"selected":""; ?>>Naruto</option>
    <option value="bleach" <?php echo ($lsAnime=="bleach")?"selected":""; ?>>Bleach</option>
    <option value="dragon" <?php echo ($lsAnime=="dragon")?"selected":""; ?>>Dragon Ball</option>
  
</select>
<br>
    <input type="submit" value="Enviar informacion">



    </form>
</body>
</html>