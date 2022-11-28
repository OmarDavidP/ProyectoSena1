<?php
include('../conexion.php');

$id= $_GET['id'];


$sql="DELETE FROM `instructor` WHERE id_instructor='$id'";
$query= mysqli_query($conn,$sql);

if($query){
	echo"Eliminacion exitosa";
	 
 }else {
	 echo"error en la eliminacion";
 
 }

header ('Location:../../Vista/html/listado_instructor.php?m=1');

?>

