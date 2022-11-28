<?php
include('../conexion.php');

$id= $_GET['id'];

$sql="DELETE FROM `programas` WHERE id_programa='$id'";
$query= mysqli_query($conn,$sql);

if($query){
	echo"Eliminacion exitosa";
	 
 }else {
	 echo"error en la eliminacion";
 
 }

header ('Location:../../Vista/html/listado_programas.php?m=1');
?>

