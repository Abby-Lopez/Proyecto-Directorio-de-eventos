<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>Endurance Tickets</title>
</head>
<body>
  <!-- container -->
  <div class="container-fluid">
    <!-- header -->

  <!--nav-->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="logo-endurance" href="./index.php">ENDURANCE<span class="logo-tickets">TICKETS</span></a>
      <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Triatlón</a></li>
              <li><a class="dropdown-item" href="#">Natación</a></li>
              <li><a class="dropdown-item" href="#">Atletismo</a></li>
              <li><a class="dropdown-item" href="#">Ciclismo</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar evento" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- nav -->
  <div>
    <h1 class="header-tittle">TUS EVENTOS DE ENDURANCE EN UN SOLO LUGAR</h1>
    <p class="header-text">¡INCRIBETE PRONTO!</p>
  </div>
  <!-- slider -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/tenisVerdes.jpg" class="border-img d-block w-100" alt="Tenis verdes">
      </div>
      <div class="carousel-item">
        <img src="./img/palco.jpg" class="border-img d-block w-100" alt="Palco de triatlon">
      </div>
      <div class="carousel-item">
        <img src="./img/filaCiclistas.jpg" class="border-img d-block w-100" alt="Fila de ciclistas">
      </div>
      <div class="carousel-item">
        <img src="./img/clavado.jpg" class=" border-img d-block w-100" alt="Clavado en el agua">
      </div>
    </div>
  </div>
  <!-- slider -->
  <!-- header -->

  <!-- galery -->
 <div class="galeryContainer">
    <h2 class="galery-text">GALERIA DE EVENTOS </h2>
    <div class="row container pb-5 m-auto">
      <div class="col-sm">
        <a href="./evento.php">
          <div class="card" style="width: 18rem;">
            <div class="card-date">
              <p class="date-text">Julio</p>
              <p class="date-number">05</p>
              <P class="date-text">2021</P>
            </div>
            <img src="./img/trailRunner.jpg" class="card-img-top" alt="Trail runner">
            <div class="card-body">
              <h2 class="card-title">NOMBRE DEL EVENTO </h2>
              <p class="card-text">Lugar - 00:00 am</p>
              <p class="card-category">Categoría</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-sm">
        <a href="./evento.php">
          <div class="card" style="width: 18rem;">
            <div class="card-date">
              <p class="date-text">Julio</p>
              <p class="date-number">05</p>
              <P class="date-text">2021</P>
            </div>
            <img src="./img/ciclistaRuta.jpg" class="card-img-top" alt="Ciclista de ruta">
            <div class="card-body">
              <h2 class="card-title">NOMBRE DEL EVENTO </h2>
              <p class="card-text">Lugar - 00:00 am</p>
              <p class="card-category">Categoría</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-sm">
        <a href="./evento.php">
          <div class="card" style="width: 18rem;">
            <div class="card-date">
              <p class="date-text">Julio</p>
              <p class="date-number">05</p>
              <P class="date-text">2021</P>
            </div>
            <img src="./img/neopreno.jpg" class="card-img-top" alt="Neopreno">
            <div class="card-body">
              <h2 class="card-title">NOMBRE DEL EVENTO </h2>
              <p class="card-text">Lugar - 00:00 am</p>
              <p class="card-category">Categoría</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-sm">
        <a href="./evento.php">
          <div class="card" style="width: 18rem;">
            <div class="card-date">
              <p class="date-text">Julio</p>
              <p class="date-number">05</p>
              <P class="date-text">2021</P>
            </div>
            <img src="./img/colorRun.jpg" class="card-img-top" alt="Color run">
            <div class="card-body">
              <h2 class="card-title">NOMBRE DEL EVENTO </h2>
              <p class="card-text">Lugar - 00:00 am</p>
              <p class="card-category">Categoría</p>
            </div>
          </div>
        </a>
      </div>  
   </div>
 </div>
  <!-- galery -->

  <!-- footer -->
  <footer>
    <p class="footer-endurance">ENDURANCE<span class="footer-tickets">TICKETS</span></p>
    <p class="copyright"> &copy;2021 Copyright: @abbylopez00</p>
  </footer>
  <!-- footer -->
  </div>
  <!-- container -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>