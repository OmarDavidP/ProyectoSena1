
<?php
include('../conexion.php');
$idRegistros = $_REQUEST['id_programa'];
$nombre 	 = $_REQUEST['nombre_progra'];


$update = ("UPDATE `programas` SET `nombre_progra`='$nombre' WHERE id_programa='$idRegistros'");
$result_update = mysqli_query($conn, $update);

echo "<script type='text/javascript'>
        window.location='../../Vista/html/listado_programas.php';
    </script>";

?>
