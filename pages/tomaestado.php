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
    <title>Tomar Estado</title>
  </head>
  <body>
    <header>
      <!--Start Navbar-->
      <nav id="nav" class="nav-pages">
        <div class="navbar">
          <div
            ><a class="back-button" href="estado.php"><i class="fas fa-angle-left"></i>Atrás</a>
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
            ><a class="back-button2" href="estado.php"><i class="fas fa-angle-left"></i>Atrás</a>
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

      
<?php

      
        if(isset($_POST['enviar'])){
          
            $folio=$_POST['folio'];
            $nombre=$_POST['nombre'];
            $domicilio=$_POST['direccion'];
            $estado=$_POST['estado'];
            $consumo=$_POST['consumo'];
            $estadonuevo=$_POST['estadonuevo'];
            $observacion='*'; 


            
            
              if($estadonuevo>=$estado){
              $consumo=$estadonuevo-$estado;
                  if(isset($_POST["cajarota"])){
                    $observacion=$observacion." Caja Rota,";
                  }
                  if(isset($_POST["tierra"])){
                    $observacion=$observacion." Medidor Con Tierra,";
                  }
                  if(isset($_POST["llave"])){
                    $observacion=$observacion." LLave De Paso Defectuosa.";
                  }

                /*  
               $sql2="SELECT *FROM socios WHERE folio = (SELECT min(folio) FROM socios WHERE folio > 1)";
              $resultado2 = mysqli_query($conectar, $sql2);
              $sig=mysqli_fetch_assoc($resultado2);
              $siguiente=$sig['folio'];



              $sql2= 'SELECT * FROM socios WHERE folio > $folio ORDER BY folio ASC LIMIT 1';
              $resultado2 = mysqli_query($conectar, $sql2);
              $sig=mysqli_fetch_assoc($resultado2);
              $siguiente2=$sig['folio'];
              
               $res = mysqli_query($conectar, "SELECT folio FROM socios WHERE folio = '".$folio."'");
              $resu = $res+1;
              $fila = mysqli_fetch_row($resu);
              
              $siguiente=$fila[0];
              */
              
           
              

              $sql="UPDATE socios SET socio='".$nombre."', direccion='".$domicilio."', estado='".$estadonuevo."', consumo='".$consumo."', observaciones='".$observacion."' where folio='".$folio."'";
              $resultado = mysqli_query($conectar, $sql);
              
              $ssql = "SELECT folio from socios where folio > $folio order by folio asc limit 1";
              $cuer = mysqli_query($conectar, $ssql);
              $agua = mysqli_fetch_array($cuer);
              $next = $agua['folio'];
              if ($next != ""){
              echo ' anterior ';
              }

              /*
              $sql2= 'SELECT folio FROM socios WHERE folio < $folio ORDER BY folio ASC LIMIT 1';
              $resultado2 = mysqli_query($conectar, $sql2);
              $sig=mysqli_fetch_assoc($resultado2);
              $siguiente2=$sig['folio'];
              echo '<script language="javascript"> alert ("Cambios Realizados Correctamente'.$siguiente2.'"); "</script>';
                  */

              



              
              if($resultado){
  
                  
                echo '<script language="javascript"> alert ("Cambios Realizados Correctamente en el Folio '.$folio.'"); window.location.href="tomaestado.php?folio='.$next.'"</script>';
              }else{
                  echo '<script language="javascript"> alert ("Cambios NO Realizados"); window.location.href="tomaestado.php?folio='.$folio.'" </script>';
              }

            
              }else{
                echo '<script language="javascript"> alert ("El estado nuevo debe ser mayor o igual al anterior!!");window.location.href="tomaestado.php?folio='.$folio.'"</script>';
              }
            
            
            

        

            

        }else{
            $folio=$_GET['folio'];
            $sql = 'SELECT * FROM socios where folio="'.$folio.'"';
            $resultado = mysqli_query($conectar, $sql);
            $fila=mysqli_fetch_assoc($resultado);
            $nombre=$fila['socio'];
            $direccion=$fila['direccion'];
            $estado=$fila['estado'];
            $consumo=$fila['consumo'];

        }

    ?>
  <div class="form" >
    <form action="<?=$_SERVER['PHP_SELF']?>" method='post'>
    <div class="dates">
      <div class="searchPartner">
          <h1><?php echo $folio;?></h1>
      </div>
      <div class="searchPartner">
          <h2><?php echo $nombre;?></h2>
      </div>
    
      <div class="searchPartner">
          <h3><?php echo $direccion;?></h3>
      </div>
    </div>

      <div class="checks-asistencia">
        <h4>Estado Actual:</h4>
        <div class="label form-check">
        <input  name="estadonuevo" class="form-control" type="number" required>
        </div><br>       
    

          <!-- Checked checkbox -->
         
          <h4>Observaciones:</h4>
            <div class="form-check">
              <input class="form-check-input" name="cajarota" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Caja Rota</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="tierra" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">Medidor Con Tierra</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="llave" type="checkbox" value="" id="flexCheckChecked"/>
              <label class="form-check-label" for="flexCheckChecked">LLave De Paso En Mal Estado</label>
            </div>
            <br>

            
        


        <input class="btn-ingresar text-center" type="submit" name="enviar" value="ACTUALIZAR"><br>
        <input type="hidden" name="nombre" value="<?php echo $nombre;?>"><br>            
        <input type="hidden" name="direccion" value="<?php echo $direccion;?>"><br>                 
        <input type="hidden" name="estado" value="<?php echo $estado;?>"><br>
        <input type="hidden" name="consumo" value="<?php echo $consumo;?>">
        <input type="hidden" name="folio" value="<?php echo $folio;?>">
        


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