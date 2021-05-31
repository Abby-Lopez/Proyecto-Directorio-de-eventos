<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>Endurance Tickets Evento</title>

</head>
<body>
  <!-- container -->
  <div class="container-fluid bg-color-event">
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
        </div>
      </div>
    </nav>
    <!-- nav -->
    <!-- card -->
      <div class="container-sm m-auto mt-5 mb-5">
        <div class="card" style="width: 100%;">
          
          <div class="card-date-e">
            <p class="date-text-e">Julio</p>
            <p class="date-number-e">05</p>
            <P class="date-text-e">2021</P>
          </div>
          <div class="card-image">
            <img src="./img/aguasAbiertas.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-content">
            <div class="row">
              <div class="col-sm-6 card-body">
                <ul class="card-info-container">
                    <li class="card-info-top"><div class="info-reg"><p class="info-text">Natación</p></div></li>
                    <li class="card-info-top"><div class="info-reg"><p class="info-text">Adultos</p></div></li>
                    <li class="card-info-top"><div class="info-reg info-reg-green"><p class="info-text">₡20.000</p></div></li>
                </ul>
              </div>
              <div class="col-sm-6 progress-bar-content">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> CUPOS 25%</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 card-main-info">
                  <h5 class="card-title-event">NOMBRE DEL EVENTO</h5>
                  <p class="card-date-event">Lugar del evento - 00:00 am</p>
                  <p class="card-text-event">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
                <div class="col-sm-6 ">
                  <button type="button" v-on:click="showEventDetails(index)" class="btn btn-register" data-bs-toggle="modal" data-bs-target="#modalRegistro">
                    registrarse
                </button>
                </div>
            </div>
            <div class="row">
              <h5 class="galery-text">EVENTOS SIMILARES</h5>
              <div class="row container pb-5 m-auto">
                <div class="col-sm">
                  <a href="./evento.html">
                    <div class="card" style="width: 18rem;">
                      <div class="card-date">
                        <p class="date-text">Julio</p>
                        <p class="date-number">05</p>
                        <P class="date-text">2021</P>
                      </div>
                      <img src="./img/neopreno.jpg" class="card-img-top" alt="neopreno">
                      <div class="card-body">
                        <h5 class="card-title">NOMBRE DEL EVENTO </h5>
                        <p class="card-text">Lugar - 00:00 am</p>
                      </div>
                    </div>
                  </a>
                </div>
          
                <div class="col-sm">
                  <a href="./evento.html">
                    <div class="card" style="width: 18rem;">
                      <div class="card-date">
                        <p class="date-text">Julio</p>
                        <p class="date-number">05</p>
                        <P class="date-text">2021</P>
                      </div>
                      <img src="./img/piscina.jpg" class="card-img-top" alt="piscina">
                      <div class="card-body">
                        <h5 class="card-title">NOMBRE DEL EVENTO </h5>
                        <p class="card-text">Lugar - 00:00 am</p>
                      </div>
                    </div>
                  </a>
                </div>
          
                <div class="col-sm">
                  <a href="./evento.html">
                    <div class="card" style="width: 18rem;">
                      <div class="card-date">
                        <p class="date-text">Julio</p>
                        <p class="date-number">05</p>
                        <P class="date-text">2021</P>
                      </div>
                      <img src="./img/nadadores.jpg" class="card-img-top" alt="nadadores">
                      <div class="card-body">
                        <h5 class="card-title">NOMBRE DEL EVENTO </h5>
                        <p class="card-text">Lugar - 00:00 am</p>
                      </div>
                    </div>
                  </a>
                </div>
          
                <div class="col-sm">
                  <a href="./evento.html">
                    <div class="card" style="width: 18rem;">
                      <div class="card-date">
                        <p class="date-text">Julio</p>
                        <p class="date-number">05</p>
                        <P class="date-text">2021</P>
                      </div>
                      <img src="./img/niñaNadando.jpg" class="card-img-top" alt="niña nadando">
                      <div class="card-body">
                        <h5 class="card-title">NOMBRE DEL EVENTO </h5>
                        <p class="card-text">Lugar - 00:00 am</p>
                      </div>
                    </div>
                  </a>
                </div>  
             </div>
            </div><!--otros eventos-->
          </div><!--card content-->
          
        </div><!--card-->
      </div><!--container-->
      <!-- card -->

    <!-- modal registro-->
    <div class="modal fade" id="modalRegistro" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="row">
                <button type="button" class="btn-close btn-position" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="col modal-1-page">
                    <div class="modal-image"></div>
                    <div class="box-event-name"><h3 class="event-name">Nombre del <br> evento</h3></div>
                    <div class="price-box"><p class="price">₡15000</p></div>
                </div>
                <div class="col modal-register">
                  <div class="px-4 py-5">
                    <div class="progress-track">
                      <ul class="progressbar">
                          <li class="active">Registro</li>
                          <li>Cuenta</li>
                          <li>Revisión</li>
                      </ul>
                  </div>
                    <h4 class="mt-5 register-tittle mb-5">REGISTRO DE PARTICIPANTES</h4> 
                    <div class="d-flex justify-content-between letters-grey"> <span class="font-weight-bold">Tipo de participante</span> 
                      <span class="text-muted letters-grey">
                        <select name="tipo-persona" id="tipo-persona">
                          <option value="adulto">Adulto</option>
                          <option value="niño">Niño</option>
                        </select>
                      </span>
                    </div>
                    <div class="d-flex justify-content-between mt-3 letters-grey"> <span class="font-weight-bold">Cantidad de personas</span> 
                      <span class="text-muted">
                        <input type="number" min="1" size="3" class="input-number">
                      </span> 
                    </div>
                    <div class="mb-3">
                        <hr class="new1 letters-grey">
                    </div>
                    <div class="d-flex justify-content-between"> <span class="font-weight-bold letters-grey">1 Adulto </span> <span class="text-muted letters-grey">₡15000</span> </div>
                    <div class="d-flex justify-content-between"> <span class="font-weight-bold letters-grey">2 Niños </span> <span class="text-muted letters-grey">₡20000</span> </div>
                    <div class="d-flex justify-content-between mt-3"> <span class="font-weight-bold total-color">Total</span> <span class="font-weight-bold theme-color total-color">₡35000</span> </div>
                    <button type="button" v-on:click="showEventDetails(index)" class="btn btn-register-modal" data-bs-toggle="modal" data-bs-target="#modalCuenta">
                      registrarse
                  </button>
                    
                  </div>    

                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- modal registro -->

    <!-- modal cuenta-->
    <div class="modal fade" id="modalCuenta" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
           <div class="modal-content">
             <div class="row">
               <button type="button" class="btn-close btn-position" data-bs-dismiss="modal" aria-label="Close"></button>
               <div class="col modal-1-page">
                 <div class="modal-image"></div>
                <div class="box-event-name"><h3 class="event-name">Nombre del <br> evento</h3></div>
                 <div class="price-box"><p class="price">₡15000</p></div>
               </div>
               <div class="col modal-register">
                 <div class="px-4 py-5">
                   <div class="progress-track">
                     <ul class="progressbar">
                         <li class="active">Registro</li>
                         <li class="step2">Cuenta</li>
                         <li>Revisión</li>
                     </ul>
                 </div>
                 <h4 class="mt-5 register-tittle">CUENTA PARTICIPANTE</h4> 
                    <form class="cuenta" action="/action_page.php">
                      <label for="fname" class="letters-grey">Nombre</label>
                      <input type="text" id="fname" name="fname"><br><br>
                      <label for="lname" class="letters-grey">Apellidos</label>
                      <input type="text" id="lname" name="lname"><br><br>
                      <label for="lname" class="letters-grey">Correo electrónico</label>
                      <input type="text" id="lname" name="lname"><br><br>
                    </form>
                    <button type="button" v-on:click="showEventDetails(index)" class="btn btn-register-modal" data-bs-toggle="modal" data-bs-target="#modalRevision">
                      registrarse
                  </button>
                 </div>    
 
               </div>
             </div>
           </div>
       </div>
   </div>
   <!-- modal cuenta -->

   <!-- modal revison-->
   <div class="modal fade" id="modalRevision" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
         <div class="modal-content">
           <div class="row">
             <button type="button" class="btn-close btn-position" data-bs-dismiss="modal" aria-label="Close"></button>
             <div class="col modal-1-page">
               <div class="modal-image"></div>
                <div class="box-event-name"><h3 class="event-name">Nombre del <br> evento</h3></div>
               <div class="price-box"><p class="price">₡15000</p></div>
             </div>
             <div class="col modal-register">
               <div class="px-4 py-5">
                 <div class="progress-track">
                   <ul class="progressbar">
                        <li class="active">Registro</li>
                        <li class="step2">Cuenta</li>
                        <li class="step3">Revisión</li>
                   </ul>
               </div>
                 <h4 class="mt-5 register-tittle">REVISIÓN DE INSCRIPCIÓN</h4>
                 <div class="d-flex  mt-3 letters-grey"> <span class="font-weight-bold total-color">Nombre: </span> 
                   <span class="text-muted">
                     Abigail López Campos
                   </span> 
                 </div>
                 <div class="d-flex letters-grey"> <span class="font-weight-bold total-color">Evento: </span> 
                  <span class="text-muted">
                   Nombre del evento
                  </span> 
                </div>
                <div class="d-flex letters-grey"> <span class="font-weight-bold total-color">Fecha: </span> 
                  <span class="text-muted">
                    05 Julio 2021
                  </span> 
                </div>
                <div class="d-flex letters-grey"> <span class="font-weight-bold total-color">Categoría: </span> 
                  <span class="text-muted">
                    Natación
                  </span> 
                </div>
                 <div class="mb-3">
                     <hr class="new1 letters-grey">
                 </div>
                 <div class="d-flex justify-content-between"> <span class="font-weight-bold letters-grey">1 Adulto </span> <span class="text-muted letters-grey">₡15000</span> </div>
                 <div class="d-flex justify-content-between"> <span class="font-weight-bold letters-grey">2 Niños </span> <span class="text-muted letters-grey">₡20000</span> </div>
                 <div class="d-flex justify-content-between mt-3"> <span class="font-weight-bold total-color">Total</span> <span class="font-weight-bold theme-color total-color">₡35000</span> </div>
                 <div class="mb-3">
                  <hr class="new1 letters-grey">
                  <div class="d-flex justify-content-center mt-3"> <span class="font-weight-bold total-color">¡QUE DISFRUTE DEL EVENTO!</span>
                </div>
                  <a href="./evento.html"  class="btn btn-register-modal">registrarse</a>
                 
               </div>    

             </div>
           </div>
         </div>
     </div>
  </div>
  </div>
  <!-- modal revision -->

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