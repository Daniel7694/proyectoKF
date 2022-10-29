<?php
    include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <?php
    if(isset($_POST['enviar'])){
        $Id=$_POST['Id'];
        $Nombre=$_POST['Nombre'];
        $Edad=$_POST['Edad'];
        $Email=$_POST['Email'];
        $Telefono=$_POST['Telefono'];

        $sql="update datos set Nombre='".$Nombre."', Edad='".$Edad."', Email='".$Email."', Telefono='".$Telefono."' where Id='".$Id."'";
        $resultado=mysqli_query($conexion,$sql);
        if($resultado){
            ?><a href="usuarios.php">Regresar</a><?php
            echo "<script language='JavaScript'>
                    alert('Los datos se actualizaron 
                        correctamente');
                    location.assign('usuarios.php');
                    </script>";
        }else{
            echo "<script language='JavaScript'>
                    alert('Los datos NO se actualizaron 
                        correctamente');
                    location.assign('usuarios.php');
                    </script>";
        }
        mysqli_close($conexion);
    }else{
       $Id=$_GET['id'];
       $sql="select * from datos where Id='".$Id."'";
       $resultado=mysqli_query($conexion,$sql);
    
       $fila=mysqli_fetch_assoc($resultado);
       $Nombre=$fila["Nombre"];
       $Edad=$fila["Edad"];
       $Email=$fila["Email"];
       $Telefono=$fila["Telefono"];

       mysqli_close($conexion);
    ?>
    <h1>Editar Usuarios</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $Nombre; ?>"><br>
        <label for="">Edad</label>
        <input type="text" name="Edad" value="<?php echo $Edad; ?>"><br>
        <label for="">Email</label>
        <input type="text" name="Email" value="<?php echo $Email; ?>"><br>
        <label for="">Telefono</label>
        <input type="text" name="Telefono" value="<?php echo $Telefono; ?>"><br>

        <input type="hidden" name="Id" value="<?php echo $Id; ?>">

        <input type="submit" name="enviar" value="Actualizar">
        <a href="usuarios.php">Regresar</a>
    </form>
    <?php
    }
    ?>
</body>
</html>