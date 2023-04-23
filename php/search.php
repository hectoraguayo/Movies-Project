<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar pelicula</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<?php
// Establecer la conexión
$conn = mysqli_connect("localhost", "root", "", "sakila");

// Verificar si la conexión es exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Obtener el film_id del formulario
$title = $_POST['title'];

// Buscar el actor en la base de datos
$sql = "SELECT * FROM film_text WHERE title='$title'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos del actor en un formulario de edición
    $row = $result->fetch_assoc();
    ?>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="./update.php" method="post">
                    <div class="mb-3">
                        <label for="film_id" class="form-label">film_id:</label>
                        <input type="text" id="film_id" name="film_id" value="<?php echo $row['film_id']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">title:</label>
                        <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">description:</label>
                        <input type="text" id="description" name="description" value="<?php echo $row['description']; ?>" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="./delete.php" method="post">
                    <div class="mb-3">
                        <label for="film_id" class="form-label">film_id:</label>
                        <input type="text" id="film_id" name="film_id" value="<?php echo $row['film_id']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">title:</label>
                        <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">description:</label>
                        <input type="text" id="description" name="description" value="<?php echo $row['description']; ?>" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    <?php
} else {
    echo "No se encontró ninguna pelicula con el nombre asignado";
}

// Cerrar la conexión
$conn->close();
?>

</body>
</html>
