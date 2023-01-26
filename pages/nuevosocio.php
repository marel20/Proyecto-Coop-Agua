<?php
session_start();
            
if($_SESSION['acceso']==1){

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0"
    />
    <link rel="icon" href="../assets/logo/logo.png" type="logo" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/medias.css" />
    <link rel="stylesheet" type="text/css" href="../css/timeline.css" />
    <link rel="stylesheet" type="text/css" href="../css/aos.css" />
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <title>Cargar Socio</title>
  </head>
  <body>
    <main>
      <header>
        <div class="container-navbar" style="margin: 30px auto;">
          <div>
            <a class="nav-button2 backButton" href="administracion.php"
              ><i class="fas fa-arrow-left"></i><p>Atras</p></a>
          </div>
  
          <nav id="nav">
            <ul class="nav-list">
              <li class="nav-link"><a href="nuevosocio.php">Cargar Socio</a></li>
              <li class="nav-link">
                <a href="listasocios.php">Listado de Socios</a>
              </li>
              <li class="nav-link">
                <a href="estado.php">Tomar Estado</a>
              </li>
              <li class="nav-link">
                <a href="baja.php">Editar / Eliminar</a>
              </li>
              <li class="nav-link">
                <a href="observaciones.php">Observaciones</a>
              </li>
            </ul>
            <!-- <a class="nav-button" href="pages/ingreso.html">Ingresar</a> -->
            <a class="nav-button" href="../index.php">Salir</a>
          </nav>
  
          <div class="nav-toggle">|||</div>
        </div>
      </header>

      <div class="form col-lg-6 col-md-6 mb-4 col-12 text-dark">  
        <section class="get-in-touch">
          <form method="POST" action='../php/nuevosocio.php'>
            <div class="row g-1">
              <div class="col">
                <div class="form-outline">
                
                  <input id="name" name="folio" class=" form-control" type="text" required>
                  
                  <label class="form-label" for="name">Folio</label>
                </div>
              </div>
        
            
              
            </div>
          
            <div class="row g-1">
              <div class="col">
                <div class="form-outline">
                  <input id="name" name="nombre" class="form-control" type="text" required>
                  <label class="form-label" for="name">Nombre y Apellido</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input id="email" name="domicilio" class="form-control" type="text" required>
                  <label class="form-label" for="email">Domicilio</label>
                  </div>
                </div>   
            </div>
            <div class="row g-1">
              <div class="col">
                <div class="form-outline">                
                  <input id="name" name="estado" class="form-control" type="text" required>                
                  <label class="form-label" for="name">Estado</label>
                </div>
              </div>
            
              <div class="col">
                <div class="form-outline">                
                  <input id="name" name="consumo" class="form-control" type="text" required>                
                  <label class="form-label" for="name">Consumo</label>
                </div>
            </div>
            </div></br></br></br>
            <div class="form-field col-lg-12">
                <button id="contact-submit" name="submit" class="ingreso2 btn-block mb-4" type="submit" data-submit="...Enviar">ENVIAR</button>
            </div>
          </form>
        </section>
      </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted">
      <!-- Section: Social media -->
      <section
        class="d-flex justify-content-center justify-content-lg-around p-3 border-bottom"
      ></section>
      <!-- Section: Social media -->

      <!-- Copyright -->
      <div class="text-center text-white p-3">
        © 2022 Copyright:
        <b
          ><a
            class="text-white"
            target="_blank"
            href="https://www.mgsolutions.com.ar"
            >MG Solutions</a
          ></b
        >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

  <script src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
  <!-- MDB -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>
</html>
<?php
}else{
  header("location: ingreso.php");
}

?>
