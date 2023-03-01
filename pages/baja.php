<?php
session_start();
            
if($_SESSION['acceso']==1){
  include "../php/conectar.php";
  $sql = 'SELECT * FROM socios';
  $resultado = mysqli_query($conectar, $sql);
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
    <title>Editar/Eliminar Socio</title>
    <script type="text/javascript">
      function confirmar(){
        return confirm('¿Esta Seguro que desea eliminar este Socio?');

      }
    </script>
  </head>
  <body>
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

    <main>

      <div class="form">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
          <div class="searchPartner">
            
            <div>
              <label>Numero De Socio:</label>
              <input type="number" name="num">
            </div>
            <div>
              <label>Folio:</label>
              <input type="number" name="folio">
            </div>
            <div>
              <label>Nombre:</label>
              <input type="text" name="nombre">
            </div>
            <div>
              <input type="submit" class="btn-ingresar" name="enviar" value="BUSCAR">
            </div>
            <div>
              <input href="baja.php" type="submit" class="btn-ingresar" value="MOSTRAR TODOS">
            </div>
          </div>
        </form>
        <div class="tabla text-center">
            <table class="table">
                <thead class="table-items">
                    <th>Numero De Socio</th>
                    <th>Folio</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Estado</th>                    
                    <th>Consumo</th>
                    <th>ACCIONES</th>
                </thead>
            
                <tbody>
                <?php
                if(isset($_POST['enviar'])){
                  $num=$_POST['folio'];
                  $nom=$_POST['nombre'];
                  $nums=$_POST['num'];

                  if(empty($_POST['folio']) && empty($_POST['nombre']) && empty($_POST['num'])){
                    echo '<script language="javascript"> alert ("Debe ingersar el nombre, numero de socio o folio para poder buscarlo!!!"); window.location.href="baja.php" </script>';
                  }else{
                    if(empty($_POST['nombre']) && empty($_POST['num'])){
                      $sql="SELECT * FROM socios where folio=".$num;
                    }
                    if(empty($_POST['folio']) && empty($_POST['num'])){
                      $sql="SELECT * FROM socios where socio like '%".$nom."%'";
                    }
                    if(empty($_POST['folio']) && empty($_POST['nombre'])){
                      $sql="SELECT * FROM socios where num=".$nums;
                    }
                    if(!empty($_POST['folio']) && !empty($_POST['nombre']) && !empty($_POST['num'])){
                      $sql="SELECT * FROM socios where folio=".$num;
                    }
                  }
                  $resultado = mysqli_query($conectar, $sql);
                  while($filas=mysqli_fetch_assoc($resultado)){
              
                ?>
                    <tr>
                    <td data-label="Número" class="text-center"><?php echo $filas['num'] ?></td>
                    <td data-label="Folio" class="text-center"><?php echo $filas['folio'] ?></td>
                    <td data-label="Nombre" class="text-center"><?php echo $filas['socio'] ?></td>
                    <td data-label="Domicilio" class="text-center"><?php echo $filas['direccion'] ?></td>
                    <td data-label="Estado" class="text-center"><?php echo $filas['estado'] ?></td>
                    <td data-label="Consumo" class="text-center"><?php echo $filas["consumo"]?> m3</td>
                    <td data-label="ACCIONES" class="text-center"><?php echo '<a class="btn-ingresar" href="editar.php?folio='.$filas["folio"].'">EDITAR</a>';?> </br></br> <?php echo '<a class="btn-ingresar" href="eliminar.php?folio='.$filas["folio"].'" onclick= "return confirmar()">ELIMINAR</a>'; ?></td>
                  </tr>
              <?php
                  }

                }else{
                    while($filas=mysqli_fetch_assoc($resultado)){
              
              ?>
                  <tr>
                    <td data-label="Número" class="text-center"><?php echo $filas['num'] ?></td>
                    <td data-label="Folio" class="text-center"><?php echo $filas['folio'] ?></td>
                    <td data-label="Nombre" class="text-center"><?php echo $filas['socio'] ?></td>
                    <td data-label="Domicilio" class="text-center"><?php echo $filas['direccion'] ?></td>
                    <td data-label="Estado" class="text-center"><?php echo $filas['estado'] ?></td>
                    <td data-label="Consumo" class="text-center"><?php echo $filas["consumo"]?> m3</td>
                    <td data-label="ACCIONES" class="text-center"><?php echo '<a class="btn-ingresar" href="editar.php?folio='.$filas["folio"].'">EDITAR</a>';?> </br> <?php echo '<a class="btn-ingresar" href="eliminar.php?folio='.$filas["folio"].'" onclick= "return confirmar()">ELIMINAR</a>'; ?></td>
                  </tr>
              <?php
                  }
                }
              ?>
                  
                </tbody>

            <!--incluir lista desde archivo php-->
          
            </table>
        </div>
      </div>
    </main>

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
