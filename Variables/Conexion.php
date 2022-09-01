<?php
$conexion = new mysqli("localhost", "root", "", "uesquint_login");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    exit();
}
#echo $mysqli->host_info . "\n";
?>