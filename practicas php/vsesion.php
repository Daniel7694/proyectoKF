<?php
session_start();


$_SESSION["usuario"]="develoteca";
$_SESSION["estatus"]="logeado";


echo"Secion iniciada"."<br/>";

echo "Usuario: ".$_SESSION["usuario"]."<br/>"." Estatus: ".$_SESSION["estatus"];

?>