<?php
include('../conexion.php');

$id= $_GET['id'];

$sql="DELETE FROM `matricula_aprendiz_ambiente` WHERE id_matricula='$id'";
$query= mysqli_query($conn,$sql);

if($query){
	echo"Eliminacion exitosa";
	 
 }else {
	 echo"error en la eliminacion";
 
 }

header ('Location:../../Vista/html/listado_asignacion.php?m=1');
?>


