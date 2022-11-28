
<?php
include('../conexion.php');
$idRegistros = $_REQUEST['id_instructor'];
$documento   = $_REQUEST['documento'];
$nombre 	 = $_REQUEST['nombre'];
$telefono 	 = $_REQUEST['telefono'];
$correo 	 = $_REQUEST['correo'];
$direccion 	 = $_REQUEST['direccion'];


$update = ("UPDATE `instructor` SET `documento`='$documento',`nombre`='$nombre',`telefono`='$telefono',`correo`='$correo',`direccion`='$direccion' WHERE id_instructor='$idRegistros'");
$result_update = mysqli_query($conn, $update);

echo "<script type='text/javascript'>
        window.location='../../Vista/html/listado_instructor.php';
    </script>";

?>
