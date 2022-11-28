<?php
include("../conexion.php");


$id_matricula=(isset($_POST['id_matricula']))?$_POST['id_matricula']:"";
$id_aprendiz=$_POST['id_aprendiz'];
$id_ambiente=$_POST['id_ambiente'];
$estado=$_POST['estado'];
$fecha_registro=$_POST['fecha_registro'];
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_fin=$_POST['fecha_fin'];



$sql="INSERT INTO `matricula_aprendiz_ambiente`(`id_matricula`, `id_aprendiz`, `id_ambiente`, `estado`, `fecha_registro`, `fecha_inicio`, `fecha_fin`) 
VALUES ('$id_matricula','$id_aprendiz','$id_ambiente','$estado','$fecha_registro','$fecha_inicio','$fecha_fin')";
$query= mysqli_query($conn,$sql);

if($query){
   echo"Registro exitoso";
    
}else {
    echo"Error en la insercion";

}
?>	
  