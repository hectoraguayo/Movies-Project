<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGREGAR PELICULA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body>
<div id="wrapper" class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h1 class="text-center">Agregar una película</h1>
      <hr>
      <form method="post" name="form-work" action="./save.php">
        <div class="mb-3">
          <label for="title" class="form-label">Titulo</label>
          <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Descripción</label>
          <input type="text" class="form-control" name="description" id="description">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
          <a class="btn btn-primary btn-lg" href="./show.php" role="button">Lista de películas</a>
          <a class="btn btn-primary btn-lg" href="./home.php" role="button">Menu</a>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>       
       
      