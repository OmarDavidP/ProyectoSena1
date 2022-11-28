<?php
include('../conexion.php');

$id= $_GET['id'];


$sql="DELETE FROM `fichas` WHERE id_fichas='$id'";
$query= mysqli_query($conn,$sql);

if($query){
	echo"Eliminacion exitosa";
	 
 }else {
	 echo"error en la eliminacion";
 
 }

header ('Location:../../Vista/html/listado_fichas.php?m=1');
?>



