<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){
            $Nombre=$_POST['Nombre'];
            $Edad=$_POST['Edad'];
            $Email=$_POST['Email'];
            $Telefono=$_POST['Telefono'];

            include("conexion.php");
            $sql="insert into datos(Nombre,Edad,Email,Telefono)
            values('".$Nombre."','".$Edad."','".$Email."','".$Telefono."')";

            $resultado=mysqli_query($conexion,$sql);

            if($resultado){

                ?><a href="usuarios.php">Regresar</a><?php
                echo " <script language='javascript'>
                         alert('Los datos fueron ingresados 
                            correctamente a la BD');
                         location.assign('usuarios.php');
                        </script>";

                echo  "<script language='JavaScript'>location.assign('usuarios.php');</scripr>";
            }else{
                 echo " <script language='javascript'>
                         alert('ERROR: Los datos NO fueron 
                            ingresados a la BD');
                         location.assign('usuarios.php');
                        </script>";
            }
            mysqli_close($conexion);
            
        }
        
        else{

    ?>

    <h1>Agregar nuevo Usuario</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="">Nombre</label>
        <input type="text" name="Nombre"><br>
        <label for="">Edad</label>
        <input type="text" name="Edad"><br>
        <label for="">Email</label>
        <input type="text" name="Email"><br>
        <label for="">Telefono</label>
        <input type="text" name="Telefono"><br>

        <input type="submit" name="enviar" value="Agregar">
        <a href="usuarios.php">Regresar</a>
    </form>
    <?php } ?>
</body>
</html>