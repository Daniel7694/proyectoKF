<?php

$servidor="localhost";  //servidor local 127.0.0.1
$usuario="root";
$contraseña="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM `fotos`";

    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    //print_r($resultado);

    foreach($resultado as $foto){
        echo $foto['nombre']."<br/>";
    }

    echo "Conexion establecida :D";


}catch(PDOException $error){
    echo "Error de conexion ".$error;
}
?>