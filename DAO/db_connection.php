<?php

$nombreBase = "almacen";
$user = "root";
$pass = "root";
$host = "localhost";

$conexion = new mysqli($host, $user, $pass, $nombreBase);
if ($conexion){
    //echo "Conexión con base de datos establecida";
    mysqli_select_db($conexion, $nombreBase)
                or die("Base de datos no encontrada");
}
else {
    echo "Error en la conexión con la base de datos";
}

