<?php
session_start();
            
$_SESSION['acceso']=0;

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
    <link rel="icon" href="assets/logo/logo.png" type="logo" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/medias.css" />
    <link rel="stylesheet" type="text/css" href="css/aos.css" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    />
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <title>Cooperativa de Agua Correa</title>
  </head>
  <body id="header">
    <header>
      <!--Start Navbar-->
      <nav id="nav">
        <div class="navbar">
          <div
            ><img class="logo" src="assets/logo/logo.png" alt="Logo-Coop-Agua-Potable"
          /></div>

          <ul>
            <li><a href="#header">Inicio</a></li>
            <li><a href="#company">Nuestra Empresa</a></li>
            <li><a href="#services">Nuestros Servicios</a></li>
            <li><a href="#contact">Contacto</a></li>
          </ul>
          <a class="btn-ingresar" href="pages/ingreso.php">Ingresar</a>

        </div>

      </nav>

      <!--End Navbar-->

      <!--Start Sidenav-->
      <div id="sidenav" class="sidenav navbar" data-mdb-right="true">
        <div class="imgSidenav">
          <img
            src="assets/logo/logo.png"
            alt="Logo-Coop-Agua-Potable"
            loading="lazy"
          />
          <button
            id="btnHamburguer"
            class="btnVisible navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#collapseWidthExample"
            aria-expanded="false"
            aria-controls="collapseWidthExample"
          >
          <img src="assets/icons/menu.png" alt="menu">
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
              <a class="nav-link active" href="#header">Inicio</a>
            </li>
            <li class="nav-li nav-item">
              <a class="nav-link active" href="#company"
                >Nuestra Empresa</a
              >
            </li>
            <li class="nav-li nav-item">
              <a class="nav-link active" href="#services"
                >Nuestros Servicios</a
              >
            </li>
            <li class="nav-li nav-item">
              <a class="nav-link active" href="#contact">Contacto</a>
            </li>
          </ul>
            
          <a class="btn-ingresar2" href="pages/ingreso.php">Ingresar</a>

        </div>
      </div>
      <!--End Sidenav-->

       <!-- Background image -->
  <div
    class="hero p-5 text-center bg-image"
    style="
      height: 100vh;
    "
  >
    <div class="mask" style="background: url('assets/img/banner-frente.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    </div>
  </div>
  <!-- Background image -->
  </header>
    <main>
      <img class="repair" src="assets/img/repair.png" alt="" />


      <!-- Institution -->
    <section id="company">
      <article class="company"></article>
    </section>
      <!-- Institution -->



      <!-- Services Info -->
    <section id="services">
      <article class="services"></article>
    </section>
      <!-- Services Info -->


      <!-- Contact -->

      <section id="contact">
        <form>
          <div class="label">
            <label for="name"><i class="fas fa-user-alt"></i></label>
            <input type="text" id="name" name="name" placeholder="Nombre" required />
          </div>

          <div class="label">
            <label
              for="surname"
            ><i class="fas fa-user-alt"></i></label>
            <input type="text" id="surname" name="surname" placeholder="Apellido" required />
          </div>

          <div class="label">
            <label
              for="email"
            ><i class="fas fa-envelope"></i></label>
            <input type="email" id="email" name="email" placeholder="Email" required />
          </div>

          <div class="label">
            <label
              for="phone"
            ><i class="fas fa-phone"></i></label>
            <input type="number" id="phone" name="phone" placeholder="Teléfono" required />
          </div>

          <div>
            <textarea
              name="textarea"
              id="textarea"
              placeholder="Su mensaje"
              required
            ></textarea>
          </div>

          <div>
            <button type="submit">Enviar</button>
          </div>
        </form>
        <article class="contact">
          
        </article>
      </section>
    </main>

    <!-- Float Buttons -->

    <div id="whatsapp" class="btnWsp">
      <a href="https://wa.me/+5493471588212" class="btn-wsp" target="_blank">
        <i class="icon-whatsapp"></i>
        <img
          src="assets/icons/whatsapp.png"
          style="width: 3rem"
          alt="logowsp"
        />
      </a>
    </div>

    <div id="up" class="up">
      <a href="#header">
        <i class="fas fa-arrow-circle-up"></i>
      </a>
    </div>

    <!-- Float Buttons -->

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

    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script type="text/javascript" src="js/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>



