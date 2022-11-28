<?php
include("../conexion.php");



$id_ambiente =(isset($_POST['id_ambiente ']))?$_POST['id_ambiente ']:"";
$id_area =$_POST['id_area'];
$fecha_registro=$_POST['fecha_registro'];
$nombre_ambiente=$_POST['nombre_ambiente'];
$capacidad=$_POST['capacidad'];
$descripcion=$_POST['descripcion'];

$sql="INSERT INTO `ambiente_aprendizaje`(`id_ambiente`, `id_area`, `fecha_registro`, `nombre_ambiente`, `capacidad`, `descripcion`) VALUES ('$id_ambiente','$id_area','$fecha_registro','$nombre_ambiente', '$capacidad','$descripcion')";
$query= mysqli_query($conn,$sql);

if($query){
   echo"Registro exitoso";
    
}else {
    echo"Error en la insercion";

}
?>	
  