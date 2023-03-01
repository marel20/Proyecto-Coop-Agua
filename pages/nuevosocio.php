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
        <!--Start Navbar-->
        <nav id="nav" class="nav-pages">
          <div class="navbar">
            <div
              ><a class="back-button" href="administracion.php"><i class="fas fa-angle-left"></i>Atrás</a>
            </div>

            <ul>
              <li><a href="nuevosocio.php">Cargar Socio</a></li>
              <li><a href="listasocios.php">Listado de Socios</a></li>
              <li><a href="estado.php">Tomar Estado</a></li>
              <li><a href="baja.php">Editar / Eliminar</a></li>
              <li><a href="observaciones.php">Observaciones</a></li>
            </ul>
            <a class="btn-ingresar" href="../index.php">Salir</a>

          </div>

        </nav>

        <!--End Navbar-->

        <!--Start Sidenav-->
        <div id="sidenav" class="sidenav navbar" data-mdb-right="true">
          <div class="imgSidenav nav-pages">
            <div
              ><a class="back-button2" href="administracion.php"><i class="fas fa-angle-left"></i>Atrás</a>
            </div>
            <button
              id="btnHamburguer"
              class="btnVisible navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#collapseWidthExample"
              aria-expanded="false"
              aria-controls="collapseWidthExample"
            >
            <img src="../assets/icons/menu.png" alt="menu">
            </button>
          </div>
          <div
            class="side-nav collapse collapse-horizontal text-center"
            id="collapseWidthExample"
          >
            <button
              id="btnHamburguer"
              class="btnVisible navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#collapseWidthExample"
              aria-expanded="false"
              aria-controls="collapseWidthExample"
            >
            <i class="far fa-times-circle"></i>

            </button>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 sidenav-menu text-center">
              <li class="nav-li nav-item">
                <a class="nav-link active" href="nuevosocio.php">Cargar Socio</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="listasocios.php"
                  >Listado de Socios</a
                >
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="estado.php"
                  >Tomar Estado</a
                >
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="baja.php">Editar / Eliminar</a>
              </li>
              <li class="nav-li nav-item">
                <a class="nav-link active" href="observaciones.php">Observaciones</a>
              </li>
            </ul>
              
            <a class="btn-ingresar2" href="../index.php">Salir</a>

          </div>
        </div>
        <!--End Sidenav-->
      </header>

      <div class="form col-lg-12 col-md-12 mb-4 col-12 text-dark">  
        <section class="get-in-touch">
          <form method="POST" action='../php/nuevosocio.php'>
            <div class="row g-1">
            <div class="col">
                <div class="form-outline">
                
                  <input id="name" name="num" class=" form-control" type="text" required>
                  
                  <label class="form-label" for="name">Numero De Socio</label>
                </div>
              </div>
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
    <footer>
      <section>
        <!-- Left -->
        <div class="info">
          <h3 class="text-white">Cooperativa de Agua Potable Correa</h3>
          <h5 class="text-white text-center">Rafael Obligado 1358, Correa, Argentina</h5>
        </div>
        <!-- Left -->
        
        <!-- Right -->
        <div class="social-media">
          <a
            href="https://www.facebook.com/coopaguacorrea"
            target="_blank"
            class="me-4 link-secondary"
          >
            <i class="fab fa-facebook-f"></i>
          </a>
          <a
            href="https://www.instagram.com/coopaguacorrea"
            target="_blank"
            class="me-4 link-secondary"
          >
            <i class="fab fa-instagram"></i>
          </a>
          <a href="mailto:admin@coopaguacorrea.com.ar" target="_blank" class="me-4 link-secondary">
            <i class="fas fa-envelope"></i>
          </a>
          <a href="tel:03471492045" target="_blank" class="me-4 link-secondary">
            <i class="fas fa-phone"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <div class="separator">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
            <div class="visible"></div>
        </div>
      <!-- Copyright -->
      <div class="text-center text-white p-3">
        © 2023 Copyright:
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
