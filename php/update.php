<?php
//conexion bd
require './connection.php';

// Verificar si la conexión es exitosa
if (!$conectar) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Recibir los datos del formulario
$film_id = $_POST["film_id"];
$title = $_POST["title"];
$description = $_POST["description"];

// Preparar la consulta SQL para insertar los datos
$sql = "UPDATE film_text SET film_id='$film_id', title='$title', description='$description' WHERE film_id='$film_id'";

// Ejecutar la consulta
if (mysqli_query($conectar, $sql)) {
    echo '<script>alert("Datos modificados correctamente"); window.location.href = "./show.php"</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conectar);
}

// Cerrar la conexión
mysqli_close($conectar);

?>