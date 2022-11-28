<?php
include('../conexion.php');

$id= $_GET['id'];


$sql="DELETE FROM `ambiente_aprendizaje` WHERE id_ambiente='$id'";
$query= mysqli_query($conn,$sql);

if($query){
	echo"Eliminacion exitosa";
	 
 }else {
	 echo"error en la eliminacion";
 
 }

header ('Location:../../Vista/html/listado_ambiente.php?m=1');
?>



