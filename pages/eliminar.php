<?php
  include "../php/conectar.php";
?>
<?php
  $numero=$_GET['folio'];
  include "../php/conectar.php";
  $sql="DELETE FROM socios WHERE folio='".$numero."'";

  $resultado = mysqli_query($conectar, $sql);
  if($resultado){
    echo '<script language="javascript"> alert ("El Socio Se Elimino Correctamente"); window.location.href="baja.php" </script>';
    }else{
        echo '<script language="javascript"> alert ("El Socio NO Pudo Ser Eliminado"); window.location.href="baja.php" </script>';
    }

?>