
<?php
include('../conexion.php');
$idRegistros = $_REQUEST['id_fichas'];
$numero   = $_REQUEST['numero_ficha'];
$programa	 = $_REQUEST['id_programa'];



$update = ("UPDATE `fichas` SET `numero_ficha`='$numero',`id_programa`='$programa' WHERE id_fichas='$idRegistros'");
$result_update = mysqli_query($conn, $update);

echo "<script type='text/javascript'>
        window.location='../../Vista/html/listado_fichas.php';
    </script>";

?>
