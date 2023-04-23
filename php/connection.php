<?php
// Establecer conexión a la base de datos
$conectar = mysqli_connect("localhost", "root", "", "sakila");

if(!$conectar) {
    die("Conexion fallida. ". mysqli_connect_error());
}

?>