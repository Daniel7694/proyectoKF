<?php
    include("conexion.php");
    $id=$_GET['id'];

    $sql="delete from datos where id='".$id."'";
    $resultado=mysqli_query($conexion,$sql);

    if($resultado){
        echo "<script language='JavaScript'>
        alert('Los datos se eliminaron 
            correctamente de la BD');
        location.assign('usuarios.php');
        </script>";
    }else{
        echo "<script language='JavaScript'>
        alert('Los datos se NO eliminaron 
            correctamente de la BD');
        location.assign('usuarios.php');
        </script>";
    }
?>
<a href="usuarios.php">Regresar</a>