<?php

$servidor="localhost";  //servidor local 127.0.0.1
$usuario="root";
$contraseña="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la programacion', 'foto.jpg');";//insertar datos 
    $conexion->exec($sql);

    echo "Conexion establecida :D";


}catch(PDOException $error){
    echo "Error de conexion ".$error;
}
?>