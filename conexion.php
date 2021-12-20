<?php

$conexion=mysqli_connect("localhost","root",'',"o_nuestras_ferias");
if ($conexion->connect_error) {
	die('Error en la conexion' . $conexion->connect_error);
}

?>