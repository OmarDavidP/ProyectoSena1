<?php
include("../conexion.php");


$id_instructor=(isset($_POST['id_instructor']))?$_POST['id_instructor']:"";
$id_senacbc=$_POST['id_senacbc'];
$documento=$_POST['documento'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=(isset($_POST['direccion']))?$_POST['direccion']:"";

$sql="INSERT INTO `instructor`(`id_instructor`, `id_senacbc`, `documento`, `nombre`, `telefono`, `correo`,`direccion`) VALUES ('$id_instructor', '$id_senacbc','$documento','$nombre', '$telefono', '$correo','$direccion')";
$query= mysqli_query($conn,$sql);

if($query){
   echo"Registro exitoso";
    
}else {
    echo"Error en la insercion";

}
?>	
  