<?php
include('../conexion.php');

$id= $_GET['id'];

$sql="DELETE FROM `aprendiz` WHERE id_aprendiz='$id'";
$query= mysqli_query($conn,$sql);

if($query){
	echo"Eliminacion exitosa";
	 
 }else {
	 echo"tas jodido";
 
 }

header ('Location:../../Vista/html/listado_pasantes.php?m=1');
?>



