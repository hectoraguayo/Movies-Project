<?php
//conexion bd
require './connection.php';

    $title = $_POST["title"];
    $description = $_POST["description"];
    
// Crear la consulta SQL para insertar un nuevo registro en la tabla "actor"
$sql = "INSERT INTO film_text (title, description) VALUES ('$title', '$description')";

if (mysqli_query($conectar, $sql)) {
    echo '<script>alert("Datos ingresados correctamente"); window.location.href = "show.php"</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conectar);
}

mysqli_close($conectar);

?>
