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
        <div class="container-navbar" style="margin: 30px auto;">
          <div>
            <a class="nav-button2 backButton" href="estado.php"
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

              $sql="UPDATE socios SET socio='".$nombre."', direccion='".$domicilio."', estado='".$estadonuevo."', consumo='".$consumo."', observaciones='".$observacion."' where folio='".$folio."'";
              $resultado = mysqli_query($conectar, $sql);
              $siguiente=$folio+1;
              if($resultado){
                  
                echo '<script language="javascript"> alert ("Cambios Realizados Correctamente"); window.location.href="tomaestado.php?folio='.$siguiente.'"</script>';
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
    <div class="searchPartner">
        <h1><?php echo $folio;?></h1>
    </div>
    <div class="searchPartner">
        <h2><?php echo $nombre;?></h2>
    </div>
  
    <div class="searchPartner">
        <h3><?php echo $direccion;?></h3>
    </div>
    <div class="checks-asistencia">
      
    <h4>Estado Actual:</h4>
        <div class="form-check">
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

            
        


        <input class="nav-button2" type="submit" name="enviar" value="ACTUALIZAR"><br>
        <input type="hidden" name="nombre" value="<?php echo $nombre;?>"><br>            
        <input type="hidden" name="direccion" value="<?php echo $direccion;?>"><br>                 
        <input type="hidden" name="estado" value="<?php echo $estado;?>"><br>
        <input type="hidden" name="consumo" value="<?php echo $consumo;?>">
        <input type="hidden" name="folio" value="<?php echo $folio;?>">
        


      </div>

  </div>
</main>


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