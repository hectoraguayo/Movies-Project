<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOVIES</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

    <!-- MOSTRAR DATOS - TABLA DE PELICULAS -->

    <div class="container">
    <h2 class="my-4">Lista de películas</h2>
    <a class="btn btn-primary mb-3" href="./add.php" role="button">Agregar película</a>
    <a class="btn btn-primary mb-3" href="./home.php" role="button">Menu</a>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titulo de película</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conexión a la base de datos
            $conectar = mysqli_connect("localhost", "root", "", "sakila");

            // Verificar la conexión
            if (!$conectar) {
                die("Error de conexión: " . mysqli_connect_error());
            }

            // Configuración de paginación
            $registros_por_pagina = 50;
            $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
            $empezar_desde = ($pagina_actual - 1) * $registros_por_pagina;

            // Consulta SQL para obtener la cantidad total de registros
            $sql_total = "SELECT film_id FROM film_text";
            $resultado_total = mysqli_query($conectar, $sql_total);
            $total_registros = mysqli_num_rows($resultado_total);

            // Calcular el número total de páginas
            $total_paginas = ceil($total_registros / $registros_por_pagina);

            // Consulta SQL para obtener los registros de la página actual
            $sql = "SELECT film_id, title, description FROM film_text LIMIT $empezar_desde, $registros_por_pagina";
            $resultado = mysqli_query($conectar, $sql);

            // Mostrar los resultados en una tabla HTML
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila["film_id"] . "</td>";
                echo "<td>" . $fila["title"] . "</td>";
                echo "<td>" . $fila["description"] . "</td>";
                echo "</tr>";
            }

            // Cerrar la conexión
            mysqli_close($conectar);
            ?>
        </tbody>
    </table>

    <!-- PAGINACIÓN -->
    <nav>
        <ul class="pagination">
            <li class="page-item <?php echo ($pagina_actual == 1) ? 'disabled' : '' ?>">
                <a class="page-link" href="?pagina=<?php echo $pagina_actual - 1 ?>" aria-label="Anterior">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for ($i = 1; $i <= $total_paginas; $i++) : ?>
                <li class="page-item <?php echo ($pagina_actual == $i) ? 'active' : '' ?>"><a class="page-link" href="?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?php endfor; ?>
            <li class="page-item <?php echo ($pagina_actual == $total_paginas) ? 'disabled' : '' ?>">
                <a class="page-link" href="?pagina=<?php echo $pagina_actual + 1 ?>" aria-label="Siguiente">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
    </nav>

</div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>