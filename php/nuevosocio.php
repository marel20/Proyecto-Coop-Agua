<?php
    //conectar al servidor
   include 'conectar.php';
    //recuperamos las variables del formulario
    $num=$_POST["num"];
    $folio=$_POST["folio"];
    $nombre=$_POST["nombre"];
    $domicilio=$_POST["domicilio"];
    $estado=$_POST["estado"];
    $consumo=$_POST["consumo"];
   

    $sql="INSERT INTO socios VALUES ('$num','$folio','$nombre','$domicilio','$estado','$consumo','*')";

    //ejecutar la secuencia sql

    $ejecutar=mysqli_query($conectar, $sql);

    //verificamos la ejecucion
    if(!$ejecutar){
        echo '<script language="javascript"> alert ("Ocurrio un error inesperado, intente de nuevo mas tarde"); window.location.href="../pages/nuevosocio.php" </script>';
    }else{
        echo '<script language="javascript"> alert ("Nuevo Socio Cargado."); window.location.href="../pages/nuevosocio.php" </script>';
    }
    
    

?>