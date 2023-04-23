<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIES</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
</head>
<body>

        <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MOVIES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./show.php">PELICULAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./add.php">AGREGAR PELICULA</a>
        </li>
      </ul>
      <form action="./search.php" method="post" class="d-flex" role="search">
      <input for="title" type="text" id="title" name="title" class="form-control me-2" type="search" placeholder="PELICULA" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">BUSCAR</button>
      </form>
    </div>
  </div>
</nav>
    
  </div>
</nav>

<!-- CARRUSEL -->
<div id="mi-carrusel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/mario.jpg" class="d-block w-100" alt="Imagen 1">
      </div>
      <div class="carousel-item">
        <img src="images/jhon.jpg" class="d-block w-100" alt="Imagen 2">
      </div>
      <div class="carousel-item">
        <img src="images/exo.png" class="d-block w-100" alt="Imagen 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#mi-carrusel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mi-carrusel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>

  <!-- LISTA DE PELICULAS -->
  <!DOCTYPE html>
<html>
<head>
  <title>Cartelera de películas</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Agregamos las dependencias de Bootstrap 5 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <br>
  <div class="container">
    <!-- CARTELERA TITULO -->
  <div class="row">
    <div class="col text-center">
      <h1>Cartelera</h1>
    </div>
  </div>
  <!-- --------- --

  <!-- LISTA DE PELICULAS  -->
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="images/P1.png" class="card-img-top" alt="Película 1">
          <div class="card-body">
            <h5 class="card-title">Super Mario Bros</h5>
            <p class="card-text">Un fontanero llamado Mario viaja a través de un laberinto subterráneo con su hermano, Luigi, tratando de salvar a una princesa capturada. Adaptación cinematográfica del popular videojuego.</p>
            
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="images/p2.jpg" class="card-img-top" alt="Película 2">
          <div class="card-body">
            <h5 class="card-title">Guardianes de la galaxia 3</h5>
            <p class="card-text">Dirigida por James Gunn y protagonizada por Chris Pratt, Zoe Saldana, Dave Bautista y otros. La película está programada para ser lanzada en mayo de 2023.</p>
            
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="images/p3.jpg" class="card-img-top" alt="Película 3">
          <div class="card-body">
            <h5 class="card-title">AIR</h5>
            <p class="card-text">Sigue la historia del vendedor de zapatos Sonny Vaccaro, y cómo lideró a Nike en su persecución del mayor atleta de la historia del deporte: Michael Jordan.</p>
            
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="images/p4.jpg" class="card-img-top" alt="Película 4">
          <div class="card-body">
            <h5 class="card-title">CREED III</h5>
            <p class="card-text">Después de dominar el mundo del boxeo, Adonis Creed ha progresado tanto en su carrera como en su vida familiar. Cuando Damian (Jonathan Majors), un amigo de la infancia y antiguo prodigio del boxeo, reaparece después de cumplir una larga condena en prisión, Adonis Creed quiere demostrar que merece una oportunidad en el ring.</p>
            
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="images/p6.jpg" class="card-img-top" alt="Película 5">
          <div class="card-body">
            <h5 class="card-title">AVATAR</h5>
            <p class="card-text">De título original 'Avatar: The Way of Water', un nombre que ya se habló en 2018, la secuela de 'Avatar' nos sorprende con su historia y expandiendo los límites del mundo fantástico que conocemos. James Cameron nos fue dando apuntes sobre ella: "La historia de las secuelas seguirá a Jake, Neytiri y a sus hijos.</p>
            
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="images/p5.jpg" class="card-img-top" alt="Película 6">
          <div class="card-body">
            <h5 class="card-title">SHAZAM 2</h5>
            <p class="card-text">Billy Batson y sus compañeros adoptados ya han recibido los poderes de los dioses aunque aún están a prendiendo a controlarlos y compaginarlos con su día a día. Pero cuando las Hijas de Atlas aterrizan en la Tierra buscando venganza, Billy -alias Shazam– tendrá que luchar por mantener sus superpoderes.</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

</body>

</html>