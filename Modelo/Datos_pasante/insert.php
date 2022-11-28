<?php
include("../conexion.php");


$id_aprendiz=(isset($_POST['id_aprendiz']))?$_POST['id_aprendiz']:"";
$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$jornada=$_POST['jornada'];
$id_ambiente=$_POST['id_ambiente'];
$id_fichas=$_POST['id_fichas'];


$sql="INSERT INTO `aprendiz`(`id_aprendiz`, `documento`, `nombre`, `telefono`, `correo`, `direccion`, `jornada`, `id_ambiente`, `id_fichas`) VALUES ('$id_aprendiz','$documento','$nombre', '$telefono', '$correo','$direccion','$jornada','$id_ambiente','$id_fichas')";
$query= mysqli_query($conn,$sql);

if($query){
   echo"Registro exitoso";
    
}else {
    echo"Error en la insercion";

}
?>	
  