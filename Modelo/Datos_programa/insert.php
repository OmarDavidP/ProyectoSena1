<?php
include("../conexion.php");


$id_programa=(isset($_POST['id_programa']))?$_POST['id_programa']:"";
$nombre_progra=$_POST['nombre_progra'];


$sql="INSERT INTO `programas`(`id_programa`, `nombre_progra`)  VALUES ('$id_programa','$nombre_progra')";
$query= mysqli_query($conn,$sql);

if($query){
   echo"Registro exitoso";
    
}else {
    echo"Error en la insercion";

}
?>	
  