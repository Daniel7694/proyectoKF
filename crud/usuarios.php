<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estas Seguro?, se eliminarán los datos bro');
        }
    </script>
</head>
<body>

<?php
    include("conexion.php");
    $sql="select * from datos";
    $resultado=mysqli_query($conexion,$sql);
?>

    <h1>lista de Usuarios</h1>
    <a href="agregar.php">Agregar Usuario</a><br><br>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($filas=mysqli_fetch_assoc($resultado)){

            
            ?>
            <tr>
                <td><?php echo $filas['Id'] ?></td>
                <td><?php echo $filas['Nombre'] ?></td>
                <td><?php echo $filas['Edad'] ?></td>
                <td><?php echo $filas['Email'] ?></td>
                <td><?php echo $filas['Telefono'] ?></td>
                <td>
                    <?php echo "<a href='editar.php?id=".$filas['Id']."'>Editar</a>"; ?>
                    -
                    <?php echo "<a href='eliminar.php?id=".$filas['Id']."' 
                    onclick='return confirmar()'>Eliminar</a>"; ?>
                </td>
            </tr>
        </tbody>
        <?php
    }
    ?>
    </table>
   <?php
       mysqli_close($conexion);
   ?>
    
</body>
</html>